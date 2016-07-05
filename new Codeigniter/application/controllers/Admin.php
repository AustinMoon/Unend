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
    
    
}