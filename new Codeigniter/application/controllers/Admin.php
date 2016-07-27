<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    //runs before every function
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
	}
    
    
    
    function requests (){
        
        if (!$this->ion_auth->is_admin())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
        $data = new stdClass();
        $this->load->library('pagination');
        $this->db->limit(5, $this->uri->segment(3));
        $this->load->model('user_model');
        $config=$this->user_model->paging();
        $config['base_url'] = 'http://quickcorrections.com/qc/login3/admin/requests/';
        $config['per_page'] = 10;
        $this->db->where('is_assigned',1);
        $this->db->order_by('assign_date', 'ASC');
        $data->all_requests=$this->db->get('sentence_correct',$config['per_page']);
        $config['total_rows'] = $this->db->get('sentence_correct')->num_rows();
        $this->pagination->initialize($config);
        $user = $this->ion_auth->user()->row();
        $data->points= $user->points;
        $this->load->view('html/header',$data);
        $this->load->model('tutor_model');
        $user = $this->ion_auth->user()->row();
        //$data->all_requests= $this->tutor_model->all_requests();
        $this->load->view('admin/requests',$data);
        $this->load->view('html/footer.html');
        
    }
    
    function send_email($request_id){
        $this->load->model('tutor_model');
        $data = $this->tutor_model->get_request_info($request_id)->row();
        $tutor = $this->ion_auth->user($data->tutor_id)->row();
        $message='request no ';
        $message.=$data->request_id;
            $message.=' is in your account for ';
        $message.= $this->humanTiming($data->assign_date);
            $message.=' .Please finish it ASAP';
        mail($tutor->email, 'My Subject', $message);
        echo 'Email sent successfully';
        
    }
    
    function humanTiming ($time)
{
    date_default_timezone_set("America/New_York");
    $time = time() - $time; // to get the time since that moment
    $time = ($time<1)? 1 : $time;
    $tokens = array (
        31536000 => 'year',
        2592000 => 'month',
        604800 => 'week',
        86400 => 'day',
        3600 => 'hour',
        60 => 'minute',
        1 => 'second'
    );

    foreach ($tokens as $unit => $text) {
        if ($time < $unit) continue;
        $numberOfUnits = floor($time / $unit);
        return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
    }

}
    function proofreading_orders(){
        if (!$this->ion_auth->is_admin())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
        {$data = new stdClass();
            $user = $this->ion_auth->user()->row();
            $data->points= $user->points;
            $this->load->view('html/header',$data);}
        $this->load->model('tutor_model');
        $data = new stdClass();
        $data->content= $this->tutor_model->open_proofread();
        $data->tutors= $this->tutor_model->list_of_tutors();
       
        $this->load->view('admin/admin_page',$data);
        $this->load->view('html/footer.html');
    }
    
   
    function tutor_list(){
        if (!$this->ion_auth->is_admin())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
        $this->load->library('ion_auth');
        $data = new stdClass();
        $this->load->model('tutor_model');
        $this->load->model('user_model');
        $this->load->library('pagination');
        $config=$this->user_model->paging();
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $config["base_url"] = base_url() . "admin/tutor_list";
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
        $config["total_rows"] = $this->tutor_model->number_of_tutors();
        $this->pagination->initialize($config);
        $data->content=$this->tutor_model->tutor_list($config["per_page"], $page);
        $user = $this->ion_auth->user()->row();
        $data->points= $user->points;
        $this->load->view('html/header',$data);
        $this->load->view('admin/tutor_list',$data);
        $this->load->view('html/footer.html');
    }
    function assign_proofread(){
        $this->load->model('tutor_model');
        $req_id= $_POST['req_id'];
        $tutor_id= $_POST['tutor_id'];
        $points= $_POST['points'];
        $this->tutor_model->assign_to_tutor($req_id,$tutor_id,$points);
    }
    
    
}