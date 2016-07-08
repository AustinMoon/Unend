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
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
		$this->load->model('user_model');
		
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
	public function register() {
		
		// create the data object
		$data = new stdClass();
		
		// load form helper and validation library
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		// set validation rules
		$this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_numeric|min_length[4]|is_unique[users.username]', array('is_unique' => 'This username already exists. Please choose another one.'));
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('password_confirm', 'Confirm Password', 'trim|required|min_length[6]|matches[password]');
		
		if ($this->form_validation->run() === false) {
			
			// validation not ok, send validation errors to the view
			$this->load->view('header');
			$this->load->view('user/register/register', $data);
			$this->load->view('footer');
			
		} else {
			
			// set variables from the form
			$username = $this->input->post('username');
			$email    = $this->input->post('email');
			$password = $this->input->post('password');
			
			if ($this->user_model->create_user($username, $email, $password)) {
				
				// user creation ok
				$this->load->view('header');
				$this->load->view('user/register/register_success', $data);
				$this->load->view('footer');
				
			} else {
				
				// user creation failed, this should never happen
				$data->error = 'There was a problem creating your new account. Please try again.';
				
				// send error to the view
				$this->load->view('header');
				$this->load->view('user/register/register', $data);
				$this->load->view('footer');
				
			}
			
		}
		
	}
		
	/**
	 * login function.
	 * 
	 * @access public
	 * @return void
	 */
    
    public function admin(){
        if (!isset($_POST['id'])){
        $data = new stdClass();
        $this->load->model('user_model');
        $data->users= $this->user_model->show_users(); 
        $this->load->view('header');
        $this->load->view('admin/admin',$data);
            }
        else{
        
        $data = new stdClass();
        $this->load->model('user_model');
        $id = $this->input->post('id');
        $username = $this->input->post('username');
        $group = $this->input->post('Group');
        $this->user_model->edit_user($id,$username,$group);
        $data->users= $this->user_model->show_users(); 
        $this->load->view('header');
        $this->load->view('admin/admin',$data);
        }
        
    }
    public function admin_user_edited(){
        $this->load->model('user_model');
        $id = $this->input->post('id');
        $username = $this->input->post('username');
        $group = $this->input->post('Group');
        if ($this->user_model->edit_user($id,$username,$group)){
            //echo"edited";
           $this->load->view('admin/edited');
            
        }else {echo"not edited";
              }
    }
    public function test1(){
        
                
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        $this->load->view('header');
        $this->load->view('footer');
        echo 'hello world';
        
        
    }}
    
    public function payment(){
        $this->load->view('user/payment/payment_page');
          
    }
    public function payment_success(){
        error_reporting(E_ERROR | E_PARSE | E_CORE_ERROR | E_CORE_WARNING | E_COMPILE_ERROR | E_COMPILE_WARNING);
        $data->points=$_POST['points'];
        $this->db->insert('users', $data);
        $this->load->view('user/payment/payment_success', $data); 
    }
    
    public function login() {
		
		// create the data object
		$data = new stdClass();
		
		// load form helper and validation library
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		// set validation rules
		$this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		if ($this->form_validation->run() == false) {
			
			// validation not ok, send validation errors to the view
			$this->load->view('header');
			$this->load->view('user/login/login');
			$this->load->view('footer');
			
		} else {
			
			// set variables from the form
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			if ($this->user_model->resolve_user_login($username, $password)) {
				
				$user_id = $this->user_model->get_user_id_from_username($username);
				$user    = $this->user_model->get_user($user_id);
				
				// set session user datas
				$_SESSION['user_id']      = (int)$user->id;
				$_SESSION['username']     = (string)$user->username;
				$_SESSION['logged_in']    = (bool)true;
				//$_SESSION['is_confirmed'] = (bool)$user->is_confirmed;
				$_SESSION['group']     = $user->group;
				
				// user login ok
				$this->load->view('header');
				$this->load->view('user/login/login_success', $data);
				$this->load->view('footer');
				
			} else {
				
				// login failed
				$data->error = 'Wrong username or password.';
                $data->username= $username;
                $data->password= $password;
				
				// send error to the view
				$this->load->view('header');
				$this->load->view('user/login/login', $data);
				$this->load->view('footer');
				
			}
			
		}
		
	}
	
	/**
	 * logout function.
	 * 
	 * @access public
	 * @return void
	 */
	public function logout() {
		
		// create the data object
		$data = new stdClass();
		
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
			
			// remove session datas
			foreach ($_SESSION as $key => $value) {
				unset($_SESSION[$key]);
			}
			
			// user logout ok
			$this->load->view('header');
			$this->load->view('user/logout/logout_success', $data);
			$this->load->view('footer');
			
		} else {
			
			// there user was not logged in, we cannot logged him out,
			// redirect him to site root
			redirect('/');
			
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
	
}
