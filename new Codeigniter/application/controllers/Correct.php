<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Correct extends CI_Controller {
    
    function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
	}
    
    public function sen_correct_student(){
        
        if(isset($_POST['sentence'])){
            $user = $this->ion_auth->user()->row();
            $data = new stdClass();
            $data->type='sentence';
            $data->words=$_POST['sentence'];
            $this->db->insert('words', $data);
            $data->user_id =$user->id;
          
            if ($this->db->affected_rows() == 1) {
              $this->load->view('sen_correct/sen_correct_success');
          }
        }
        else
        {
            $this->load->view('sen_correct/sen_correct_student');
        }
        
        
    }
    
}