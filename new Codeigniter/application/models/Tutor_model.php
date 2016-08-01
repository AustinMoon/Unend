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
    
    public function assigned_requests ($id,$limit, $start){
        $this->db->limit($limit, $start);
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
    if ($query->num_rows() > 0)
    {
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
        $subject='QuickCorrections: You have receive a new request!';
        $message='
        You have received a new request! 
        Please Click http://quickcorrections.com/qc/login3/tutor/
        Thank you so much!';
        $headers = 'Bcc: ' .$email. "\r\n";
        mail('', $subject, $message, $headers);
    }
    
    function get_tutor_history($tutor_id,$limit, $start){
        $this->db->limit($limit, $start);
        $this->db->order_by('request_date', 'DESC');
        $this->db->where('tutor_id', $tutor_id);
        $this->db->where('tutor_revision IS NOT', NULL);
        //$this->db->where('tutor_id', $tutor_id);
        $query = $this->db->get('sentence_correct');
        return $query;
    }
    
    function record_count($tutor_id){

        $this->db->where('tutor_id', $tutor_id);
        $this->db->where('tutor_revision IS NOT', NULL);
        //$this->db->where('tutor_id', $tutor_id);
        $query = $this->db->get('sentence_correct');
        return $query->num_rows();
    }
    
    function tutor_list($limit, $start){
        $this->db->limit($limit, $start);
        $this->db->select('*');
        $this->db->from('users_groups');
        $this->db->where('group_id',4); 
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
        
<<<<<<< HEAD
=======
        $subject = 'New Proofread Request!';
        $message = ' You have received a new request! 
        Please Click http://quickcorrections.com/qc/login3/tutor/
        Thank you so much!';
        $user = $this->ion_auth->user($tutor_id)->row();
        $to = $user->email;
        mail($to, $subject, $message);
        
>>>>>>> 557e7531865bc405a8e32fbfdbca5a59fcdeb5bd
    }
    
    function tutor_open_requests_count($tutor_id){
        $this->db->where('tutor_id', $tutor_id);
        $this->db->where('is_assigned', 1);
        $this->db->where('tutor_revision', NULL);
        $query = $this->db->get('sentence_correct');
        return $query->num_rows();
    }
    
    function add_rating($req_id,$stars,$feedback){
        $this->db->where('request_id',$req_id);
        $this->db->set('rating_stars',$stars);
        $this->db->set('additional',$feedback);
        $this->db->update('sentence_correct');
    }
    
    function number_of_tutors(){
        $this->db->where('group_id',4);
        $query = $this->db->get('users_groups');
        return $query->num_rows();
    }
    
     function calculate_rate_average($tutor_id){
         $query = $this->db->select('AVG(rating_stars) as rating_stars')->from('sentence_correct')->where('tutor_id',$tutor_id)->get();
         return $query->row()->rating_stars;
     }
    
    function tutor_points_in_period($tutor_id,$from,$to){
        
        $this->db->where('revision_finish_date >=', $from);
        $this->db->where('revision_finish_date <=', $to);
        $this->db->where('tutor_id',$tutor_id);
        $this->db->where('tutor_revision IS NOT', NULL);
        $this->db->select_sum('req_points');
        $query = $this->db->get('sentence_correct');
        return $query;
    }
    
    function get_tutor_history1($tutor_id,$from,$to){
        $this->db->where('revision_finish_date >=', $from);
        $this->db->where('revision_finish_date <=', $to);
        $this->db->order_by('revision_finish_date', 'DESC');
        $this->db->where('tutor_id', $tutor_id);
        $this->db->where('tutor_revision IS NOT', NULL);
        //$this->db->where('tutor_id', $tutor_id);
        $query = $this->db->get('sentence_correct');
        return $query;
    }
    function add_post($title,$content){
        
        $this->load->helper('date');
        date_default_timezone_set("America/New_York");
		$data = array(
			'title'   => $title,
			'content'      => $content,
			'request_date' => date('Y-m-d H:i:s')
		);
		
		return $this->db->insert('posts', $data);
    }
    function list_of_posts(){
        $query = $this->db->get('posts');
        return $query;
    }
}