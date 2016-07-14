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
        $this->load->view('html/header');
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
        $this->load->view('html/header');
        $this->load->view('html/aboutus.html');
        $this->load->view('html/footer.html');
    }
    
    public function edited_request($request_id){
        $this->load->model('tutor_model');
        $data = new stdClass();
        $data->request = $this->tutor_model->get_request_info($request_id)->row();
        $opcodes = FineDiff::getDiffOpcodes($data->request->text, $data->request->tutor_revision /* default granularity is set to character */);
        $data->outpot =FineDiff::renderDiffToHTMLFromOpcodes($data->request->text, $opcodes);
        $this->load->library(array('ion_auth','form_validation'));
        $this->load->view('html/header');
        $this->load->view('user/sent_corr',$data);
        $this->load->view('html/footer.html');
        
    }
    public function edited_eq($request_id){
        $this->load->model('tutor_model');
        $data = new stdClass();
        $data->request = $this->tutor_model->get_request_info($request_id)->row();
        $this->load->view('html/header');
        $this->load->view('user/edited_eq',$data);
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
<<<<<<< HEAD
=======
        $user = $this->ion_auth->user()->row();
>>>>>>> 8acc103f8803865c2a126b1c1b0135338fe5270a
        $this->load->view('html/header');
        $data->points= $user->points;
        $this->load->view('html/payment',$data);
        $this->load->view('html/footer.html');
        }
    public function price(){
        
        $this->load->view('html/header');
        $this->load->view('html/price.html');
        $this->load->view('html/footer.html');
        
        
        
    }
    public function setting(){
        $this->load->view('html/header');
        $this->load->view('html/setting.html');
        $this->load->view('html/footer.html');

    }
    public function privacy(){

        $this->load->view('html/header');
        $this->load->view('html/privacy.html');
        $this->load->view('html/footer.html');

    }
     public function terms(){
        
        $this->load->view('html/header');
        $this->load->view('html/terms.html');
        $this->load->view('html/footer.html');

    }
    public function jobposting(){
        
        $this->load->view('html/header');
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
        if ($user->points <=20){
            redirect('user/pay', 'refresh');
        }
        
        if(isset($_POST['sentence'])){
            
            $data = new stdClass();
            //$data->type='sentence';
            $data->user_id= $user->id;
            $data->type='Sentence Correction';
            $data->request_date= time();
            $data->text=$_POST['sentence'];
            $data->additional=$_POST['optional'];
            $this->db->insert('sentence_correct', $data);
            $data->user_id =$user->id;
          
            if ($this->db->affected_rows() == 1) {
              $this->load->view('html/header');
              $this->load->view('sen_correct/sen_correct_success',$data);
              $this->load->view('html/footer.html');
                $this->tutor_model->send_email_to_tutors();
          }
        }
        else
        {
            $this->load->view('html/header');
            $this->load->view('sen_correct/sen_correct_student');
            $this->load->view('html/footer.html');
        }
        
        
    }
      public function contactus(){
        $this->load->view('html/header');
        $this->load->view('html/contactus');
        $this->load->view('html/footer.html');

    }
    public function userpage(){
        $this->load->model('user_model');
        $data = new stdClass();
        $user = $this->ion_auth->user()->row();
        $data->sc=$this->user_model->s_correct_requests($user->id);
        $data->eq=$this->user_model->english_q_requests($user->id);
        $this->load->view('html/header');
        $this->load->view('user/userpage',$data);
        $this->load->view('html/footer.html');
    }
    public function pay(){
        $this->load->view('user/pay');
    }
	
}
