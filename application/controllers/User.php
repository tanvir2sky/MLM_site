<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	function __construct() {
            parent::__construct();
            if(!$this->session->userdata('useremail')){
                redirect('userlogin');
                die();
            }
            $this->load->model('userModel');
            $this->load->library('paypal_lib');
        }
        public function index(){
            $data2 = array(
                'user'=>$this->userModel->getDataFromUser(),
                'referral'=>$this->userModel->getTotalReferral(),
                'message'=>$this->userModel->getMessage(),
            );
            $data = array(
                
                'inner' => $this->load->view('user/dashboard',$data2,true),
                'user'=>$this->userModel->getDataFromUser()
            );
            $this->load->view('user/main',$data);
        }
        
        public function facebookLike(){
               $data2 = array(
                'facebook'=>$this->userModel->getFacebookPage(),
               
            );
            $data = array(
                
                'inner' => $this->load->view('user/facebookLike',$data2,true),
                'user'=>$this->userModel->getDataFromUser()
            );
            $this->load->view('user/main',$data);
            
        }
        
       
        public function logout(){
            $this->session->unset_userdata('useremail');
            redirect('userlogin');
            
        }
        
        public function confirmLike($id){
            $this->load->model('userModel');
            $this->userModel->increaseLikeNumber($id);
            $userEmail = $this->session->userdata('useremail');
            $data = array(
                'pageid'=>$id,
                'useremail'=>$userEmail,
                
            );
            
            $this->userModel->addMoneyForFacebookLike($id);
            $this->userModel->addToFacebookLike($data);
            redirect('user/facebookLike');
        }
        
        
         function buy(){
        //Set variables for paypal form
        $paypalURL = 'https://www.paypal.com/cgi-bin/webscr'; //Paypal url
        $paypalID = 'zhamer@hotmail.com'; //Please user your paypal business email in this section
        $returnURL = base_url().'paypal/success'; //payment success url
        $cancelURL = base_url().'paypal/cancel'; //payment cancel url
        $notifyURL = base_url().'paypal/ipn'; //ipn url
        
   
        $userID = $this->userModel->getUserId();
        $logo = base_url().'images/error-img.png';
        
        $this->paypal_lib->add_field('business', $paypalID);
        $this->paypal_lib->add_field('return', $returnURL);
        $this->paypal_lib->add_field('cancel_return', $cancelURL);
        $this->paypal_lib->add_field('notify_url', $notifyURL);
        $this->paypal_lib->add_field('item_name',"Buy Premium Membership");
        $this->paypal_lib->add_field('custom',$userID);
        $this->paypal_lib->add_field('item_number',  1);
        $this->paypal_lib->add_field('amount',  10);        
        $this->paypal_lib->image($logo);
        
        $this->paypal_lib->paypal_auto_form();
    }
    
    public function changePassword(){
    		
            $data = array(
                
                'inner' => $this->load->view('user/passwordForm','',true),
                'user'=>$this->userModel->getDataFromUser()
            );
            $this->load->view('user/main',$data);
    	
    
    }
    
    
    
    
    
    
    public function changePasswordOfUser(){
    
    	$presentPassword = $this->input->post('presentPassword');
    	$newPassword =  $this->input->post('newPassword');
    	$conPassword =  $this->input->post('conPassword');
    	if($newPassword != $conPassword){
    	
    		$this->session->set_userdata('mismatch','Password Didnt match');
    		redirect('user/changePassword');
    		die();
    	
    	}
    	
    	if($this->userModel->changePassword($presentPassword ,$newPassword )){
    		$this->logout();
    	
    	}
    	redirect('user/changePassword');
    
    }
    
    
    
    
    
    public function paymentOption(){
       
            $data = array(
                
                'inner' => $this->load->view('user/paymentOption','',true),
                'user'=>$this->userModel->getDataFromUser()
            );
            $this->load->view('user/main',$data);
        
        
    }
    
    public function notifyAdmin(){
        
        $data = array(
            
          'email' =>$this->session->userdata('useremail'),  
        );
        $this->userModel->addToManualPayment($data);
        redirect('user/confirmManualPayment');
    }
    
    public function confirmManualPayment(){
        
         $data = array(
                
                'inner' => $this->load->view('user/confirmManualPayment','',true),
                'user'=>$this->userModel->getDataFromUser()
            );
            $this->load->view('user/main',$data);
    }
    
    
    public function youtubeView(){
               $data2 = array(
                'facebook'=>$this->userModel->getYoutubePage(),
               
            );
            $data = array(
                
                'inner' => $this->load->view('user/youtubeView',$data2,true),
                'user'=>$this->userModel->getDataFromUser()
            );
            $this->load->view('user/main',$data);
            
        }
        
        
         public function confirmYoutubeLike($id){
            $this->load->model('userModel');
            $this->userModel->increaseYoutubeLikeNumber($id);
            $userEmail = $this->session->userdata('useremail');
            $data = array(
                'pageid'=>$id,
                'useremail'=>$userEmail,
                
            );
            
            $this->userModel->addMoneyForYoutubeLike($id);
            $this->userModel->addToYoutubeLike($data);
            redirect('user/youtubeView');
        }
    public function twitterFollow(){
               $data2 = array(
                'facebook'=>$this->userModel->getTwitterPage(),
               
            );
            $data = array(
                
                'inner' => $this->load->view('user/twitterFollow',$data2,true),
                'user'=>$this->userModel->getDataFromUser()
            );
            $this->load->view('user/main',$data);
            
        }
        
           public function confirmTwitterLike($id){
            $this->load->model('userModel');
            $this->userModel->increaseTwitterLikeNumber($id);
            $userEmail = $this->session->userdata('useremail');
            $data = array(
                'pageid'=>$id,
                'useremail'=>$userEmail,
                
            );
            
            $this->userModel->addMoneyForTwitterLike($id);
            $this->userModel->addToTwitterLike($data);
            redirect('user/twitterFollow');
        }
        
          public function writePost(){
               $data2 = array(
                'facebook'=>$this->userModel->getPostPage(),
               
            );
            $data = array(
                
                'inner' => $this->load->view('user/writePost',$data2,true),
                'user'=>$this->userModel->getDataFromUser()
            );
            $this->load->view('user/main',$data);
            
        }
        
        public function writeSpecificPost($id){
            
            $postid= $id;
            
             $data2 = array(
                'id'=>$id
               
            );
            $data = array(
                
                'inner' => $this->load->view('user/writeSpecificPost',$data2,true),
                'user'=>$this->userModel->getDataFromUser()
            );
            $this->load->view('user/main',$data);
            
        }
        public function addPostToDb(){
            
            $data = array(
                
              'postid' => $this->input->post('postid'),
                'useremail' =>$this->session->userdata('useremail'),
                'text' => $this->input->post('text')
                
            );
            $this->userModel->insertIntoPostDb($data);
            $this->userModel->increasePostLikeNumber($data['postid']);
            $this->session->set_userdata('postSubmit','Successfully Submitted Post for admin review. After review you will get money');
             redirect('user/writePost');
        }
        
        public function getPaid(){
            
             $data2 = array(
                'user'=>$this->userModel->getDataFromUser(),
               
            );
            $data = array(
                
                'inner' => $this->load->view('user/getPaid',$data2,true),
                'user'=>$this->userModel->getDataFromUser()
            );
            $this->load->view('user/main',$data);
            
        }
        
        
         public function loadPaypalForm(){
            
             $data2 = array(
              //  'user'=>$this->userModel->getDataFromUser(),
               
            );
            $data = array(
                
                'inner' => $this->load->view('user/loadPaypalForm',$data2,true),
                'user'=>$this->userModel->getDataFromUser()
            );
            $this->load->view('user/main',$data);
            
        }
        
         public function loadManualPalForm(){
            
             $data2 = array(
               // 'user'=>$this->userModel->getDataFromUser(),
               
            );
            $data = array(
                
                'inner' => $this->load->view('user/loadManualForm',$data2,true),
                'user'=>$this->userModel->getDataFromUser()
            );
            $this->load->view('user/main',$data);
            
        }
        public function paypalInsertDb(){
            
            $data = array(
                
                'name' =>$this->input->post('name',true),
                'email' =>'',
                'paypalemail'=>$this->input->post('paypal',true),
            );
             $this->userModel->paypalInsertDb($data);
             redirect('user/confirmManualPayment');
            
        }
        
         public function manualInsertDb(){
            
            $data = array(
                
                'name' =>$this->input->post('name',true),
                'email' =>$this->input->post('email',true),
                'paypalemail'=>'',
            );
            $this->userModel->manualInsertDb($data);
            redirect('user/confirmManualPayment');
        }
        
    /*    public function viewAllReferral(){
            $email = $this->session->userdata('useremail');
            $level1 =array();
            $level2 =array();
            $level3 =array();
            $level4 =array();
            $level5 =array();
            $level6 =array();
            $level7 =array();
            $level8 =array();
            $level9 =array();
            $level10 =array();
            
          $query =  $this->db->query("select useremail from user where referralemail='$email'");
          $result = $query->result_array();
          for($i=0;$i<sizeof($result);$i++){
              array_push($level1,$result[$i]['useremail']);
              
          }
          
                for($i = 0;$i<=sizeof($level1);$i++){
                  
                    $email = $level1[$i];
                    $query =  $this->db->query("select useremail from user where referralemail='$email'");
                         $result = $query->result_array();
                         for($i=0;$i<=sizeof($result);$i++){
                             if(sizeof($result == 0)){
                             continue;}

                     array_push($level1,$result[$i]['useremail']);

                       }


              }
              print_r($level2);
             
              } */
             
            
            
        
        
}