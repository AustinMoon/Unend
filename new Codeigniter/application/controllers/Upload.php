<?php
  
   class Upload extends CI_Controller {
	
      public function __construct() { 
         parent::__construct(); 
         $this->load->helper(array('form', 'url')); 
          $this->load->library(array('ion_auth','form_validation'));
      }
		
      public function index() { 
         $this->load->view('proofread/proofread', array('error' => ' ' )); 
      } 
		
      public function do_upload() { 
         $config['upload_path']   = './uploads/'; 
         $config['allowed_types'] = 'gif|jpg|png|pdf|wav|docx|doc|mp3|ogg|flac'; 
         $config['max_size']      = 5000; 
         $config['max_width']     = 11024; 
         $config['max_height']    = 1768;  
         $this->load->library('upload', $config);
			
         if (!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors()); 
            $this->load->view('user/upload/upload_form', $error); 
         }
			
         else 
         { 
            {
                $data = new stdClass();
                $user = $this->ion_auth->user()->row();
                $data->points= $user->points;
                $this->load->view('html/header',$data);
            }
             
             $data = array('upload_data' => $this->upload->data()); 
             $this->load->model('user_model');
             $user = $this->ion_auth->user()->row();
             $this->user_model->upload_file($user->id,$this->upload->data('file_name'));
             $this->load->view('sen_correct/sen_correct_success',$data);
             $this->load->view('html/footer.html');
             
             $subject = 'New Proofread Request!';
             $message = ' You have received a new request! 
             Please Click http://quickcorrections.com/qc/login3/admin/proofreading_orders 
             Thank you so much!';
             mail('quickcorrectinos@gmail.com', $subject, $message);
                
         } 
      } 
       
       public function do_pronunciation() { 
         $config['upload_path']   = './uploads/'; 
         $config['allowed_types'] = 'wav|mp3|ogg|flac'; 
         $config['max_size']      = 5000; 
         $config['max_width']     = 11024; 
         $config['max_height']    = 1768;  
         $this->load->library('upload', $config);
			
         if (!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors()); 
            $this->load->view('user/upload/upload_form', $error); 
         }
			
         else { 
            {
                $data = new stdClass();
                $user = $this->ion_auth->user()->row();
                $data->points= $user->points;
                $this->load->view('html/header',$data);
            }
             $data = array('upload_data' => $this->upload->data()); 
             $this->load->model('user_model');
             $user = $this->ion_auth->user()->row();
             $this->user_model->upload_pronunciation($user->id,$this->upload->data('file_name'));
             
             $this->load->view('sen_correct/sen_correct_success',$data);
             $this->load->view('html/footer.html');
         } 
       } 
       
       public function do_proofread_answer($request_id)
       {
           $config['upload_path']   = './uploads/'; 
           $config['allowed_types'] = 'doc|docx|pdf|txt'; 
           $config['max_size']      = 5000; 
           $config['max_width']     = 11024; 
           $config['max_height']    = 1768;  
           $this->load->library('upload', $config);
			
           if (!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors()); 
            $this->load->view('user/upload/upload_form', $error); 
           }
			
         else 
         {
             $user = $this->ion_auth->user()->row();
             $this->load->model('tutor_model');
             $data = new stdClass();
             $req = $this->tutor_model->get_request_info($request_id)->row();
             $new_points = $user->points - $req->req_points;
             $this->db->where('id', $req->user_id);
             $this->db->set('points', $new_points);
             $this->db->update('users');
             
             $tutor_points =$user->points + $req->req_points/2;
             $this->db->where('id', $req->tutor_id);
             $this->db->set('points', $tutor_points);
             $this->db->update('users');
             
             $data->points= $user->points;
             $this->load->view('html/header',$data);
             $data = array('upload_data' => $this->upload->data()); 
             $this->load->model('user_model');
             $user = $this->ion_auth->user()->row();
             $this->user_model->upload_proofread_answer($request_id,$this->upload->data('file_name'));
             $this->load->view('sen_correct/sen_correct_success',$data);
             $this->load->view('html/footer.html');
             
             $subject = 'Proofread Finished!';
             $message = 'Your request for Proofreading has been finished! Please check your answers: http://quickcorrections.com/qc/login3/user/userpage
             Thank you so much!';
             $user = $this->ion_auth->user()->row();
             $to = $user->email;
             mail($to, $subject, $message);
         } 
       }
       
       public function do_pronunciation_answer($request_id)
       {
           $config['upload_path']   = './uploads/'; 
           $config['allowed_types'] = 'mp3|wav|ogg|flacc'; 
           $config['max_size']      = 5000; 
           $config['max_width']     = 11024; 
           $config['max_height']    = 1768;  
           $this->load->library('upload', $config);
			
           if (!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors()); 
            $this->load->view('user/upload/upload_form', $error); 
           }
			
         else 
         {
          
              $data = new stdClass();
              $user = $this->ion_auth->user()->row();
              $data->points= $user->points;
              $this->load->view('html/header',$data);
             $data = array('upload_data' => $this->upload->data()); 
             $this->load->model('user_model');
             $this->load->model('tutor_model');
             $user = $this->ion_auth->user()->row();
             $new_points=$user->points;
             $new_points-=120;
             $this->user_model->upload_pronunciation_answer($request_id,$this->upload->data('file_name'));
             $req=$this->tutor_model->get_request_info($request_id)->row();
             $this->db->where('id',$req->user_id);
             $this->db->set('points', $new_points);
             $this->db->update('users');
             $this->load->view('sen_correct/sen_correct_success',$data);
             $this->load->view('html/footer.html');
         } 
       }
   } 


?>