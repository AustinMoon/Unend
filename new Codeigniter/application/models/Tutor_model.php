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
        $query = $this->db->get('sentence_correct');
        return $query;
    }
    
    public function assigned_requests ($id){
        
        $this->db->where('is_assigned', 1);
        $this->db->where('tutor_id',$id);
        $query = $this->db->get('sentence_correct');
        return $query;
    }
    
    public function all_requests(){
        $query = $this->db->get('sentence_correct');
        return $query;
    }
        
    
}
	