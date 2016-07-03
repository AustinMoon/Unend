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
        
        $this->db->where('is_assigned', 'false');
        $query = $this->db->get('sentence_correct');
        return $query;
    }
    
    public function list_of_requests($id){
        
        $this->db->where('is_assigned', 'true');
        $this->db->where('tutor_id',$id);
        $query = $this->db->get('sentence_correct');
        return $query;
        
    }
        
    
}
	