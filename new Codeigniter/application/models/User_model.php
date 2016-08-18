<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 * 
 * @extends CI_Model
 */
class User_model extends CI_Model {

	/**
	 * __construct function.
	 * 
	 * @access public
	 * @return void
	 */
	public function __construct() {
		
		parent::__construct();
		$this->load->database();
		
	}
	
	/**
	 * create_user function.
	 * 
	 * @access public
	 * @param mixed $username
	 * @param mixed $email
	 * @param mixed $password
	 * @return bool true on success, false on failure
	 */
    
	public function create_user($username, $email, $password) {
        $this->load->helper('date');
        date_default_timezone_set("America/New_York");
		$data = array(
			'username'   => $username,
			'email'      => $email,
			'password'   => sha1($password),
			'created_on' => date('Y-m-d H:i:s'),
            'groups'      => 'student',
		);
		
		return $this->db->insert('users', $data);
		
	}
	
	/**
	 * resolve_user_login function.
	 * 
	 * @access public
	 * @param mixed $username
	 * @param mixed $password
	 * @return bool true on success, false on failure
	 */
	public function resolve_user_login($username, $password) {
		
		$this->db->select('password');
		$this->db->from('users');
		$this->db->where('username', $username);
		$hash = $this->db->get()->row('password');
		//($hash == sha1($password)) ? return true : false;
        if ($hash == sha1($password))
            return true;
        else
            return false;
		//return $this->verify_password_hash($password, $hash);
		
	}
	
	/**
	 * get_user_id_from_username function.
	 * 
	 * @access public
	 * @param mixed $username
	 * @return int the user id
	 */
	public function get_user_id_from_username($username) {
		
		$this->db->select('id');
		$this->db->from('users');
		$this->db->where('username', $username);

		return $this->db->get()->row('id');
		
	}
	
	/**
	 * get_user function.
	 * 
	 * @access public
	 * @param mixed $user_id
	 * @return object the user object
	 */
	public function get_user($user_id) {
		
		$this->db->from('users');
		$this->db->where('id', $user_id);
		return $this->db->get()->row();
		
	}
	
	/**
	 * hash_password function.
	 * 
	 * @access private
	 * @param mixed $password
	 * @return string|bool could be a string on success, or bool false on failure
	 */
	private function hash_password($password) {
		
		return password_hash($password, PASSWORD_BCRYPT);
		
	}
	
	/**
	 * verify_password_hash function.
	 * 
	 * @access private
	 * @param mixed $password
	 * @param mixed $hash
	 * @return bool
	 */
	private function verify_password_hash($password, $hash) {
		
		return password_verify($password, $hash);
		
	}
    
    public function show_users(){
        return $this->db->get('users');
        
    }
    public function edit_user($id,$username,$group){
        $data = array(
        'username' => trim($username),
        'group' => $group
        
        );
        
        $this->db->where('id', $id);
        $this->db->limit(1);
        $this->db->update('users', $data);
        if ($this->db->affected_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }
    
    public function english_q_requests($user_id){
        $this->db->where('user_id',$user_id);
        $this->db->where('type','English Question');
        $query = $this->db->get('sentence_correct');
        return $query;
    }
    
    public function user_requests($user_id,$limit, $start){
         $this->db->limit($limit, $start);
        $this->db->order_by('request_date', 'DESC');
        $this->db->where('user_id',$user_id);
        //$this->db->where('type','Sentence Correction');
        $query = $this->db->get('sentence_correct');
        return $query;
    }
    
    public function upload_file($user_id, $link){
        date_default_timezone_set("America/New_York");
        if (!empty($_POST['comment'])){
            $a=$_POST['comment'];
        }
        else{$a='';}
        $data = array(
			'user_id'   => $user_id,
            'text'      => $link,
            'request_date'  => time(),
            'type'      => 'Proofread',
            'additional'=> $a,
            'req_points'=> $_POST['points']
		);
        

		return $this->db->insert('sentence_correct', $data);
        
    }
    
     public function upload_pronunciation($user_id, $link){
        date_default_timezone_set("America/New_York");
        $data = array(
			'user_id'   => $user_id,
            'text'      => $link,
            'request_date'  => time(),
            'type'      => 'Pronunciation',
            'req_points'      => 120,
		);
		
		return $this->db->insert('sentence_correct', $data);
    }
    
    public function upload_proofread_answer($request_id, $uploaded_file){
        $this->db->set('tutor_revision', $uploaded_file);
        $this->db->where('request_id',$request_id);
        $this->db->update('sentence_correct');
    }
    
    public function upload_pronunciation_answer($request_id, $uploaded_file){
        $this->db->set('tutor_revision', $uploaded_file);
        $this->db->where('request_id', $request_id);
        $this->db->update('sentence_correct');
    }
    
    function proof_requests($user_id){
        $this->db->where('user_id',$user_id);
        $this->db->where('type','Proofread');
        $query = $this->db->get('sentence_correct');
        return $query;
    }
    
    function pronoun_requests($user_id){
        $this->db->where('user_id',$user_id);
        $this->db->where('type','Pronunciation');
        $query = $this->db->get('sentence_correct');
        return $query;
    }
    
    function paging(){
        $config['num_links'] = 3;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul><!--pagination-->';
        $config['first_link'] = '&laquo; First';
        $config['first_tag_open'] = '<li class="prev page">';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last &raquo;';
        $config['last_tag_open'] = '<li class="next page">';
        $config['last_tag_close'] = '</li>';
        $config['next_link'] = 'Next &rarr;';
        $config['next_tag_open'] = '<li class="next page">';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = '&larr; Previous';
        $config['prev_tag_open'] = '<li class="prev page">';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page">';
        $config['num_tag_close'] = '</li>';
// $config['display_pages'] = FALSE;
// 
$config['anchor_class'] = 'follow_link';
        
        return $config;
    }
    
    function user_record_count($user_id){
        $this->db->where('user_id', $user_id);
        //$this->db->where('tutor_revision IS NOT', NULL);
        $query = $this->db->get('sentence_correct');
        return $query->num_rows();
    }
    
    function tip($tip_id){
        $this->db->where('post_id',$tip_id);
        $query= $this->db->get('posts');
        return $query;
    }
    
    function search($keyword)
    {
        $this->db->select('*');
        $this->db->get('posts');
        $this->db->like('content', $keyword);
        $query = $this->db->get();
        
        if($query->num_rows() > 0){
            return $query->result(); 
        }
        else{
            return $query->result();
        }
    }
    
    function proofread_language($user_id, $link, $type){
        $data = array(
			'user_id'   => $user_id,
            'text'      => $link,
            'request_date'  => time(),
            'type'      => $type
            
            
		);
		return $this->db->insert('sentence_correct', $data);  
    }
    
    
	
}
