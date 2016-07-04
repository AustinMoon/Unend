<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tutor extends CI_Controller {
    
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
    
    function index(){
        
        $this->load->model('tutor_model');
        $data = new stdClass();
        $user = $this->ion_auth->user()->row();
        $data->content= $this->tutor_model->open_requests();
        $data->assigned_reuests= $this->tutor_model->assigned_requests($user->id);
        $data->group = $this->ion_auth->get_users_groups(5)->result(); 
        $this->load->view('tutor/index',$data);
    }
    
    function assign($tutor_id, $request_id){
        
        $this->db->set('tutor_id', $tutor_id);
        $this->db->set('is_assigned', 1);
        $this->db->where('request_id',$request_id);
        $this->db->update('sentence_correct');
        
        redirect('tutor/', 'refresh');
        
    }
    
    
    
}