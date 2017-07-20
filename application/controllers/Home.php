<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function index()
	{
		$this->load->view('home/main');
      
	}
	 public function contact(){
			
			$this->load->view('home/contact');
			
	}
	 public function terms(){
			
			$this->load->view('home/terms');
			
	}
	 public function privacy(){
			
			$this->load->view('home/privacy');
			
	}
	 public function disclaimer(){
			
			$this->load->view('home/disclaimer');
			
	}
        public function about(){
			
			$this->load->view('home/about');
			
	}
        public function errorPage(){
    $this->load->view('home/error');
        }
        public function sendContactEmail(){
        	
        	$from = $this->input->post('email');
        	$name =  $this->input->post('name');
        	$subject =  $this->input->post('subject');
        	$message = $this->input->post('message');
        
        	$this->load->library('email');

		$this->email->from($from, $name);
		$this->email->to('contact@jobslogon.com'); 
		

		$this->email->subject($subject);
		$this->email->message($message);	

		$this->email->send();
		redirect('home/contact');
        }
        
        public function blog(){
            $this->load->model('adminModel');
            
            $data =array(
                'blog' => $this->adminModel->getAllPublishedBlog(),
                'recent' =>$this->adminModel->getRecentPost(),
                
                
            );
            $this->load->view('home/blog',$data);
        }
        
          public function singleblog($id){
            $this->load->model('adminModel');
            
            
            $data =array(
                'blog' => $this->adminModel->getAllPublishedBlogById($id),
                 'recent' =>$this->adminModel->getRecentPost(),
                
                
            );
            $this->load->view('home/single',$data);
        }
        

}