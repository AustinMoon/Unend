<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User class.
 * 
 * @extends CI_Controller
 */
class User extends CI_Controller {

	/**
	 * __construct function.
	 * 
	 * @access public
	 * @return void
	 */
	public function __construct() {
        

        //  Path to simple_html_dom
        include APPPATH . 'third_party/finediff.php';


		
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language','date'));
        $this->load->model('tutor_model');
		
	}
	
	
	public function index() {
        $this->load->library(array('ion_auth','form_validation'));
        
        $data = new stdClass();
         if ($this->ion_auth->logged_in()){
        $user = $this->ion_auth->user()->row();
        $data->points= $user->points;
         }
        $this->load->view('html/header',$data);
        $this->load->view('html/main.html');
        $this->load->view('html/footer.html');
		

		
	}
	
	/**
	 * register function.
	 * 
	 * @access public
	 * @return void
	 */

   
    public function payment_success(){
        //error_reporting(E_ERROR | E_PARSE | E_CORE_ERROR | E_CORE_WARNING | E_COMPILE_ERROR | E_COMPILE_WARNING);
        
		$data['id'] = $_SESSION['user_id'];
		if($_GET['st'] == 'Completed'){
			 $this->db->where(array('id' => $_SESSION['user_id']));
			 $query = $this->db->get('users');
			 $user = $query->result_array();
			 $points = $user[0]['points'] + $_GET['item_number']; 
			 $data['points'] = $points;
		}
		$data['txn_id'] = $_GET['tx'];
		$data['payment_status'] = $_GET['st'];

		$this->db->where('id', $_SESSION['user_id']);
		$this->db->update('users', $data);
        $this->load->view('user/payment/payment_success', $data); 
    }
	
	public function payment_ipn(){
        //error_reporting(E_ERROR | E_PARSE | E_CORE_ERROR | E_CORE_WARNING | E_COMPILE_ERROR | E_COMPILE_WARNING);
        
		if($_GET){
			$this->db->where(array('txn_id' => $_GET['tx']));
			$query = $this->db->get('users');
			$user = $query->result_array();
			if(!empty($user)){
				$data['payment_status'] = $_GET['st'];
				if($_GET['st'] == 'Completed'){
					$points = $user[0]['points'] + $_GET['item_number']; 
					$data['points'] = $points;
				}
				$this->db->where('id', $user[0]['id']);
				$this->db->update('users', $data);
			}
		}
    }
	
	
    public function aboutus(){
        $this->load->library(array('ion_auth','form_validation'));
         $data = new stdClass();
         if ($this->ion_auth->logged_in()){
        $user = $this->ion_auth->user()->row();
        $data->points= $user->points;
         }
        $this->load->view('html/header',$data);
        $this->load->view('html/aboutus.html');
        $this->load->view('html/footer.html');
    }
    
    public function edited_request($request_id){
        {$data = new stdClass();
            $user = $this->ion_auth->user()->row();
            $data->points= $user->points;
            $this->load->view('html/header',$data);}
        $this->load->model('tutor_model');
        $data = new stdClass();
        $data->request = $this->tutor_model->get_request_info($request_id)->row();
        $opcodes = FineDiff::getDiffOpcodes($data->request->text, $data->request->tutor_revision /* default granularity is set to character */);
        $data->outpot =FineDiff::renderDiffToHTMLFromOpcodes($data->request->text, $opcodes);
        $this->load->library(array('ion_auth','form_validation'));
        
        $this->load->view('user/sent_corr',$data);
        $this->load->view('html/footer.html');
        
    }
    public function edited_eq($request_id){
        {
            $data = new stdClass();
            $user = $this->ion_auth->user()->row();
            $data->points= $user->points;
            $this->load->view('html/header',$data);
        }
        $this->load->model('tutor_model');
        $data = new stdClass();
        $data->request = $this->tutor_model->get_request_info($request_id)->row();
        $this->load->view('user/edited_eq',$data);
        $this->load->view('html/footer.html');
        
    }
    
    public function edited_pro($request_id){
        
            $data = new stdClass();
            $user = $this->ion_auth->user()->row();
            $data->points= $user->points;
            $this->load->view('html/header',$data);
        
        $this->load->model('tutor_model');
        $data = new stdClass();
        $data->request = $this->tutor_model->get_request_info($request_id)->row();
        $this->load->view('user/edited_pro',$data);
        $this->load->view('html/footer.html');
        
    }
    
     public function edited_proof($request_id){
        {
            $data = new stdClass();
            $user = $this->ion_auth->user()->row();
            $data->points= $user->points;
            $this->load->view('html/header',$data);
        }
        $this->load->model('tutor_model');
        $data = new stdClass();
        $data->request = $this->tutor_model->get_request_info($request_id)->row();
        $this->load->view('user/edited_proof',$data);
        $this->load->view('html/footer.html');
        
    }
    
    
    
    
   // public function payment(){$this->load->view('user/payment/payment_page');}
    
    public function payment(){
         if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
        $data = new stdClass();

        $user = $this->ion_auth->user()->row();
 
            $data->points= $user->points;
            $this->load->view('html/header',$data);


        $this->load->view('html/payment',$data);
        $this->load->view('html/footer.html');


        }
    public function price(){
        
         $data = new stdClass();
         if ($this->ion_auth->logged_in()){
        $user = $this->ion_auth->user()->row();
        $data->points= $user->points;
         }
        $this->load->view('html/header',$data);
        $this->load->view('html/price.html');
        $this->load->view('html/footer.html');
        
        
        
    }
    public function setting(){
        $data = new stdClass();
        $user = $this->ion_auth->user()->row();
        $data->points= $user->points;
        $this->load->view('html/header',$data);
        
        $this->load->view('html/setting');
        $this->load->view('html/footer.html');

    }
    public function privacy(){
        $data = new stdClass();
        if ($this->ion_auth->logged_in()){
        $user = $this->ion_auth->user()->row();
        $data->points= $user->points;
         }

        $this->load->view('html/header',$data);
        $this->load->view('html/privacy');
        $this->load->view('html/footer.html');

    }
     public function terms(){
        
         $data = new stdClass();
         if ($this->ion_auth->logged_in()){
        $user = $this->ion_auth->user()->row();
        $data->points= $user->points;
         }
        $this->load->view('html/header',$data);
        $this->load->view('html/terms.html');
        $this->load->view('html/footer.html');

    }
     public function faqs(){
        
         $data = new stdClass();
         if ($this->ion_auth->logged_in()){
        $user = $this->ion_auth->user()->row();
        $data->points= $user->points;
         }
        $this->load->view('html/header',$data);
        $this->load->view('html/faqs.html');
        $this->load->view('html/footer.html');

    }
    public function jobposting(){
        
         $data = new stdClass();
         if ($this->ion_auth->logged_in()){
        $user = $this->ion_auth->user()->row();
        $data->points= $user->points;
         }
        $this->load->view('html/header',$data);
        $this->load->view('html/jobposting.html');
        $this->load->view('html/footer.html');
        
        
        
    }
    
    public function sen_correct_student(){
        
        if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
        $user = $this->ion_auth->user()->row();
        if ($user->points <=50){
            redirect('user/pay', 'refresh');
        }
        
        if(isset($_POST['sentence'])){
            
            $data = new stdClass();
            //$data->type='sentence';
            $data->user_id= $user->id;
            $data->type='Sentence Correction';
            $data->request_date= time();
            $data->text=$_POST['sentence'];
            $points=str_word_count($_POST['sentence']);
            $data->req_points=$points *1.5;
            $data->additional=$_POST['comment'];
            $this->db->insert('sentence_correct', $data);
            $data->user_id =$user->id;
          
            if ($this->db->affected_rows() == 1) {
            {$data = new stdClass();
            $user = $this->ion_auth->user()->row();
            $data->points= $user->points;
            $this->load->view('html/header',$data);}
              
              $this->load->view('sen_correct/sen_correct_success',$data);
              $this->load->view('html/footer.html');
            $this->tutor_model->send_email_to_tutors();
          }
        }
        else
        {
             $data = new stdClass();
            $user = $this->ion_auth->user()->row();
            $data->points= $user->points;
            $this->load->view('html/header',$data);
            $this->load->view('sen_correct/sen_correct_student');
            $this->load->view('html/footer.html');
        }
        
        
    }
      public function contactus(){
         $data = new stdClass();
         if ($this->ion_auth->logged_in()){
        $user = $this->ion_auth->user()->row();
        $data->points= $user->points;
         }
        $this->load->view('html/header',$data);
        $this->load->view('html/contactus');
        $this->load->view('html/footer.html');

    }
    public function userpage(){
        if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
        $data = new stdClass();
        $this->load->model('user_model');
        $this->load->library('pagination');
        $user = $this->ion_auth->user()->row();
        $config=$this->user_model->paging();
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $config["base_url"] = base_url() . "user/userpage";
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
        $config["total_rows"] = $this->user_model->user_record_count($user->id);
        $this->pagination->initialize($config);
        $data->content=$this->user_model->user_requests($user->id,$config["per_page"], $page);
        $data->points= $user->points;
        $this->load->view('html/header',$data);
        $this->load->view('user/userpage',$data);
        $this->load->view('html/footer.html');
    }
    public function pay(){
        $this->load->view('user/pay');
    }
    
	function save_rating($request_id){
        $data = new stdClass();
        $this->load->model('tutor_model');
        $stars=$this->input->post('star');
        $feedback=$this->input->post('feedback');
        $this->tutor_model->add_rating($request_id,$stars,$feedback);
        $user = $this->ion_auth->user()->row();
        $data->points= $user->points;
        $this->load->view('html/header',$data);
        $this->load->view('user/feedback_success');
        $this->load->view('html/footer.html');
        
    }
    
    function tip($tip_id){
        $data = new stdClass();
        $user = $this->ion_auth->user()->row();
        $data->points= $user->points;
        $this->load->model('user_model');
        $data->request=$this->user_model->tip($tip_id)->row();
        $this->load->view('html/header',$data);
        $this->load->view('user/tip',$data);
        $this->load->view('html/footer.html');
        
    }
    
    function arabic_proofreading(){
        if ($this->input->post('submit'))
        {
            $config['upload_path']          = './uploads/';
                $config['allowed_types']        = '*';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('userfile'))
                {
                    $error = array('error' => $this->upload->display_errors());
                    $data = new stdClass();
                    $user = $this->ion_auth->user()->row();
                    $data->points= $user->points;
                    $this->load->view('html/header',$data);
                    $this->load->view('proofread/arabic_proofread',$error);
                    $this->load->view('html/footer.html');
                }
            
                else
                {
                    $this->load->model('user_model');
                    $data = $this->upload->data();
                    $this->user_model->proofread_language($_POST['user_id'],$data['file_name'],'Arabic Proofread');
                    $data = new stdClass();
                    $user = $this->ion_auth->user()->row();
                    $data->points= $user->points;
                    $this->load->view('html/header',$data);
                    $this->load->view('sen_correct/sen_correct_success');
                    $this->load->view('html/footer.html');
                    
                }
        }
        
        else
        {
            $data = new stdClass();
            $user = $this->ion_auth->user()->row();
            $data->points= $user->points;
            $this->load->view('html/header',$data);
            $this->load->view('proofread/arabic_proofread');
            $this->load->view('html/footer.html');
            
        }
    }
    
    function chinese_proofreading(){
        if ($this->input->post('submit'))
        {
            $config['upload_path']          = './uploads/';
                $config['allowed_types']        = '*';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('userfile'))
                {
                    $error = array('error' => $this->upload->display_errors());
                    $data = new stdClass();
                    $user = $this->ion_auth->user()->row();
                    $data->points= $user->points;
                    $this->load->view('html/header',$data);
                    $this->load->view('proofread/chinese_proofread',$error);
                    $this->load->view('html/footer.html');
                }
            
                else
                {
                    $this->load->model('user_model');
                    $data = $this->upload->data();
                    $this->user_model->proofread_language($_POST['user_id'], $data['file_name'], 'Chinese Proofread');
                    $data = new stdClass();
                    $user = $this->ion_auth->user()->row();
                    $data->points= $user->points;
                    $this->load->view('html/header',$data);
                    $this->load->view('sen_correct/sen_correct_success');
                    $this->load->view('html/footer.html');
                    
                }
        }
        
        else
        {
            $data = new stdClass();
            $user = $this->ion_auth->user()->row();
            $data->points= $user->points;
            $this->load->view('html/header',$data);
            $this->load->view('proofread/chinese_proofread');
            $this->load->view('html/footer.html');
            
        }
    }
    
    function korean_proofreading(){
        if ($this->input->post('submit'))
        {
            $config['upload_path']          = './uploads/';
                $config['allowed_types']        = '*';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('userfile'))
                {
                    $error = array('error' => $this->upload->display_errors());
                    $data = new stdClass();
                    $user = $this->ion_auth->user()->row();
                    $data->points= $user->points;
                    $this->load->view('html/header',$data);
                    $this->load->view('proofread/korean_proofread',$error);
                    $this->load->view('html/footer.html');
                }
            
                else
                {
                    $this->load->model('user_model');
                    $data = $this->upload->data();
                    $this->user_model->proofread_language($_POST['user_id'], $data['file_name'], 'Korean Proofread');
                    $data = new stdClass();
                    $user = $this->ion_auth->user()->row();
                    $data->points= $user->points;
                    $this->load->view('html/header',$data);
                    $this->load->view('sen_correct/sen_correct_success');
                    $this->load->view('html/footer.html');
                    
                }
        }
        
        else
        {
            $data = new stdClass();
            $user = $this->ion_auth->user()->row();
            $data->points= $user->points;
            $this->load->view('html/header',$data);
            $this->load->view('proofread/korean_proofread');
            $this->load->view('html/footer.html');
            
        }
    }
    
    function spanish_proofreading(){
        if ($this->input->post('submit'))
        {
            $config['upload_path']          = './uploads/';
                $config['allowed_types']        = '*';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('userfile'))
                {
                    $error = array('error' => $this->upload->display_errors());
                    $data = new stdClass();
                    $user = $this->ion_auth->user()->row();
                    $data->points= $user->points;
                    $this->load->view('html/header',$data);
                    $this->load->view('proofread/spanish_proofread',$error);
                    $this->load->view('html/footer.html');
                }
            
                else
                {
                    $this->load->model('user_model');
                    $data = $this->upload->data();
                    $this->user_model->proofread_language($_POST['user_id'],$data['file_name'],'Spanish Proofread');
                    $data = new stdClass();
                    $user = $this->ion_auth->user()->row();
                    $data->points= $user->points;
                    $this->load->view('html/header',$data);
                    $this->load->view('sen_correct/sen_correct_success');
                    $this->load->view('html/footer.html');
                    
                }
        }
        
        else
        {
            $data = new stdClass();
            $user = $this->ion_auth->user()->row();
            $data->points= $user->points;
            $this->load->view('html/header',$data);
            $this->load->view('proofread/spanish_proofread');
            $this->load->view('html/footer.html');
            
        }
    }
    
}
