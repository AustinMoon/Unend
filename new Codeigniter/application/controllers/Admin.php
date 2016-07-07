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
        
        $this->load->model('tutor_model');
        $data = new stdClass();
        $user = $this->ion_auth->user()->row();
        $data->all_requests= $this->tutor_model->all_requests();
        $this->load->view('admin/requests',$data);
        
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
    
    
}