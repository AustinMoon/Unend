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
        $this->db->where('type !=', 'Proofread');
        $this->db->order_by('request_date', 'DESC');
        $query = $this->db->get('sentence_correct');
        return $query;
    }
    public function open_proofread(){
        $this->db->where('is_assigned', 0);
        $this->db->where('type', 'Proofread');
        $this->db->order_by('request_date', 'DESC');
        $query = $this->db->get('sentence_correct');
        return $query;
    }
    
    public function assigned_requests ($id){
        
        $this->db->where('is_assigned', 1);
        //$this->db->where('type !=', 'Proofread');
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
        $subject='QuickCorrections: You got new request';
        $message='
        You have received a new request! 
        Please Click http://quickcorrections.com/qc/login3/tutor/

        Thank you so much!';
        $headers = 'Bcc: ' .$email. "\r\n";
        mail('', $subject, $message, $headers);
    }
    function get_tutor_history($tutor_id){
        $this->db->where('tutor_id', $tutor_id);
        $this->db->where('tutor_revision IS NOT', NULL);
        //$this->db->where('tutor_id', $tutor_id);
        $query = $this->db->get('sentence_correct');
        return $query;
    }
    function tutor_list(){
        $this->db->select('*');
        $this->db->from('users_groups');
        $this->db->join('sentence_correct','users_groups.user_id=sentence_correct.tutor_id');
        $this->db->where('users_groups.group_id',4);
        
        $query=$this->db->get();
        return $query;
    }
    function tutor_points($tutor_id){
        $this->db->select_sum('req_points');
        $this->db->where('tutor_id',$tutor_id);
        $this->db->where('tutor_revision IS NOT', NULL);
        $query = $this->db->get('sentence_correct');
        return $query;
    }
    function list_of_tutors(){
        $this->db->select('*');
        $this->db->where('group_id',4);
        $query=$this->db->get('users_groups');
        return $query;
    }
    
    function assign_to_tutor($req_id,$tutor_id,$points){
        date_default_timezone_set("America/New_York");
        $this->db->where('request_id',$req_id);
        $this->db->set('is_assigned',1);
        $this->db->set('assign_date',time());
        $this->db->set('tutor_id',$tutor_id);
        $this->db->set('req_points',$points);
        $this->db->update('sentence_correct');
    }
}
	