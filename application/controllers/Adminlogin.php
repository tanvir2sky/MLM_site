<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adminlogin extends CI_Controller {

	
	public function index()
	{
            $data =array(
                
                'name' => 'Admin ',
                'uri'=>'adminlogin'
                
            );
		$this->load->view('login',$data);
      
	}
   
    
    public function checkLogin(){
         $data = array(
            
            'adminemail' => $this->input->post('useremail',true),
            'adminpassword' => $this->input->post('userpassword',true)
           
            
        );
         $this->load->model('loginModel');
        if($this->loginModel->getDataFromAdmin($data)){
            $data1 = array(
                
                'adminemail' => $data['adminemail']
                
            );
            $this->session->set_userdata($data1);
            redirect('admin');
        }
        else{
            $this->session->set_userdata('loginFail','LOGIN FAILD');
            redirect('adminlogin');
           
        }
        
        
    }
    
  
}
