<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tutor extends CI_Controller {
    
    //runs before every function
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));
        $this->load->model('tutor_model');

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
	}
    
    function index(){
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(4))
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
      
               
        $this->load->model('tutor_model');
        $data = new stdClass();
        $user = $this->ion_auth->user()->row();
        $data->content= $this->tutor_model->open_requests();
        $data->assigned_reuests= $this->tutor_model->assigned_requests($user->id);
        $data->group = $this->ion_auth->get_users_groups(5)->result(); 
        $this->load->view('html/header',$data);
        $this->load->view('tutor/index',$data);
        $this->load->view('html/footer.html',$data);
        
        
    }
    
    function assign($tutor_id, $request_id){
        $this->load->helper('date');
        $this->db->set('tutor_id', $tutor_id);
        $this->db->set('is_assigned', 1);
        $this->db->set('assign_date', time());
        $this->db->where('request_id',$request_id);
        $this->db->update('sentence_correct');
        
        redirect('tutor/', 'refresh');
        
    }
    
    function edit($request_id){
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(4))
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
        if($this->tutor_model->role_exists($request_id)){
        
        $data = new stdClass();
        $this->load->model('tutor_model');
        $data->request = $this->tutor_model->get_request_info($request_id)->row();
        $this->load->view('html/header');
        $this->load->view('tutor/tutor_sentence',$data);
        $this->load->view('html/footer');  
    }}
    
    function uploaded($request_id){
        $request=get_request_info($request_id)->row();
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(4) || $request->type != 'Uploded File' )
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
    }
    
    function add_revision(){
        $this->load->model('tutor_model');
        $TR= $_POST['tutor_revision'];
        $this->db->set('tutor_revision', $TR);
        $this->db->set('revision_finish_date', time());
        $this->db->where('request_id',$_POST['request_id']);
        $this->db->update('sentence_correct');
        $req=$this->tutor_model->get_request_info($_POST['request_id'])->row();
        $user = $this->ion_auth->user($req->user_id)->row();
        $new_points= $user->points - str_word_count($req->text);
        $this->db->where('id',$user->id);
        $this->db->set('points', $new_points);
        $this->db->update('users');
        $message='Hello, tutor responded to your request #'.$_POST['request_id'].'. with the following: '.$TR;
        mail($user->email, 'Your Request # '.$_POST['request_id'].' is Finished', $message);

        $this->load->view('html/header');
        $this->load->view('tutor/tutor_success');
        $this->load->view('html/footer.html');
        
    }
    function tutor_english_question($request_id){
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(4))
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
        if($this->tutor_model->role_exists($request_id)){
        
        $data = new stdClass();
        $this->load->model('tutor_model');
        $data->request = $this->tutor_model->get_request_info($request_id)->row();
        $this->load->view('html/header');
        $this->load->view('tutor/tutor_english_q',$data);

        $this->load->view('html/footer'); 

    }}
    function tutor_submit(){
        

    }
    
    function tutor_download(){
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(4)){
			redirect('auth/login', 'refresh');
		}
        
        if($this->tutor_model->role_exists($request_id)){
            $data = new stdClass();
            $this->load->model('tutor_model');
        
        
        
        
    }
        
        
    }

       

    
    
    
    
}