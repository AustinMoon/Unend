<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 * 
 * @extends CI_Model
 */
class Tutor_model extends CI_Model {

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
    
    public function open_requests(){
        
        $this->db->where('is_assigned', 0);
        $this->db->order_by('request_date', 'DESC');
        $query = $this->db->get('sentence_correct');
        return $query;
    }
    public function open_proofread(){
        $this->db->where('is_assigned', 0);
        $this->db->order_by('request_date', 'DESC');
        $query = $this->db->get('sentence_correct');
        return $query;
    }
    
    public function assigned_requests ($id){
        
        $this->db->where('is_assigned', 1);
        $this->db->order_by('request_date', 'DESC');
        $this->db->where('tutor_id',$id);
        $this->db->where('tutor_revision',NULL);
        $query = $this->db->get('sentence_correct');
        return $query;
    }
    
    public function all_requests(){
        $query = $this->db->get('sentence_correct');
        return $query;
    }
    
    public function get_request_info($request_id){
        $this->db->where('request_id', $request_id);
        $query = $this->db->get('sentence_correct');
        return $query;
        
    }
        
    public  function role_exists($key)
{
    $this->db->where('request_id',$key);
    $query = $this->db->get('sentence_correct');
    if ($query->num_rows() > 0){
        return true;
    }
    else{
        return false;
    }
}
    public function send_email_to_tutors(){
        $email='';
        $this->db->where('group_id', '4');
        $query = $this->db->get('users_groups');
        foreach ($query->result() as $row){
            $tutor  = $this->ion_auth->user($row->user_id)->row();
            $email  .=$tutor->email;
            $email  .=',';
             
            
        }
       substr($email, 0, -1);
        $subject='QuickCorrections: Test email';
        $message='This is test email, sorry.';
        mail($email, $subject, $message);
    }
    
}
	