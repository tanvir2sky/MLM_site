<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	function __construct() {
            parent::__construct();
            if(!$this->session->userdata('adminemail')){
                redirect('adminlogin');
                die();
            }
            $this->load->model('adminModel');
        }
        
        var $no = 2;
	public function index()
                
	{  
            $data2 = array(
                
                'totalUser'=>$this->adminModel->getTotalUser(),
                'paidUser' =>$this->adminModel->getAllPaidUser()
            );
            $data =array(
                'admin' =>$this->adminModel->getDataFromAdmin(),
                'inner' =>$this->load->view('admin/dashboard',$data2,true)
            ); 
		$this->load->view('admin/main',$data);
      
	}
        
        public function viewAllUser(){
            
             $data2 = array(
                
                'alluser'=>$this->adminModel->getAllUser()
                
            );
            $data =array(
                'admin' =>$this->adminModel->getDataFromAdmin(),
                'inner' =>$this->load->view('admin/user',$data2,true)
            ); 
		$this->load->view('admin/main',$data);
            
        }
        
        public function activeUser($id){
            $uid = $id;
             $this->adminModel->activeUser($uid);
             redirect('admin/viewAllUser');
            
        }
        
        public function deactiveUser($id){
             
             $uid = $id;
             $this->adminModel->deactiveUser($uid);
             redirect('admin/viewAllUser');
        }
        
        
        public function editLevelAmount(){
            
            $data2= array(
                'amount'=>$this->adminModel->getRefferalAmount()
                
            );
            $data =array(
                'admin' =>$this->adminModel->getDataFromAdmin(),
                'inner' =>$this->load->view('admin/referralAmount',$data2,true)
            ); 
            
            $this->load->view('admin/main',$data);
        }
        public function updateReferralTable(){
            
            $data = array(
                'level1' =>$this->input->post('level1'),
                'level2' =>$this->input->post('level2'),
                'level3' =>$this->input->post('level3'),
                'level4' =>$this->input->post('level4'),
                'level5' =>$this->input->post('level5'),
                'level6' =>$this->input->post('level6'),
                'level7' =>$this->input->post('level7'),
                'level8' =>$this->input->post('level8'),
                'level9' =>$this->input->post('level9'),
                'level10' =>$this->input->post('level10'),
                
                
            );
            $this->adminModel->updateReferralTable($data);
            redirect('admin/editLevelAmount');
        }
        //Level amount paid
        
        public function editLevelAmountPaid(){
            
              $data2= array(
                'amount'=>$this->adminModel->getRefferalAmountPaid()
                
            );
            $data =array(
                'admin' =>$this->adminModel->getDataFromAdmin(),
                'inner' =>$this->load->view('admin/referralAmountPaid',$data2,true)
            ); 
            
            $this->load->view('admin/main',$data);
            
        }
        
         public function updateReferralTablePaid(){
            
            $data = array(
                'level1' =>$this->input->post('level1'),
                'level2' =>$this->input->post('level2'),
                'level3' =>$this->input->post('level3'),
                'level4' =>$this->input->post('level4'),
                'level5' =>$this->input->post('level5'),
                'level6' =>$this->input->post('level6'),
                'level7' =>$this->input->post('level7'),
                'level8' =>$this->input->post('level8'),
                'level9' =>$this->input->post('level9'),
                'level10' =>$this->input->post('level10'),
                
                
            );
            $this->adminModel->updateReferralTablePaid($data);
            redirect('admin/editLevelAmountPaid');
        }
        
        public function addFacebookPage(){
            
              $data2= array(
               
                
            );
            $data =array(
                'admin' =>$this->adminModel->getDataFromAdmin(),
                'inner' =>$this->load->view('admin/addFacebookPage',$data2,true)
            ); 
            
            $this->load->view('admin/main',$data);
            
            
        }
        public function addFacebookPageToDb(){
            $data = array(
                'pageurl' =>$this->input->post('pageurl'),
                'moneypaid' =>$this->input->post('moneypaid'),
                'moneynormal' =>$this->input->post('moneynormal'),
                'likelimit' =>$this->input->post('likelimit'),
                 'name' =>$this->input->post('name')
               
                
                
                
            );
            $this->adminModel->addFacebookPageToDb($data);
            redirect('admin/addFacebookPage');
            
        }
        
        public function viewEditFacebook(){
            
              $data2 = array(
                
                'facebook'=>$this->adminModel->getAllFacebook()
                
            );
            $data =array(
                'admin' =>$this->adminModel->getDataFromAdmin(),
                'inner' =>$this->load->view('admin/viewEditFacebookPage',$data2,true)
            ); 
		$this->load->view('admin/main',$data);
        }
        
        public function deletePage($id){
            $this->adminModel->deletePage($id);
            redirect('admin/viewEditFacebook');
            
        }
        public function logout(){
            $this->session->unset_userdata('adminemail');
            redirect('adminlogin');
            
        }
        public function viewAllUserTrans(){
             $data2 = array(
                
                'payment'=>$this->adminModel->getAllPayment()
                
            );
            $data =array(
                'admin' =>$this->adminModel->getDataFromAdmin(),
                'inner' =>$this->load->view('admin/buyerPayment',$data2,true)
            ); 
		$this->load->view('admin/main',$data);
        }
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        public function addMoneyToDirectReferral($id){
        
         $useremail = $id;
        $currentBalance = $this->adminModel->getReferralAcountBalance($useremail);
        $paidOrUnpaid = $this->adminModel->getReferralAcountPaid($useremail);
        if($paidOrUnpaid == 1){
             $level1 = $this->adminModel->getLevel1AmountPaid();
        }
        else {
            
        }
       
        $totalBalance = $currentBalance + $level1;
        $this->adminModel->updateUserBalance($useremail,$totalBalance);
        $this->doHaveIndirectReferral($useremail);
    }
    //Adding money to the indirect referrals//
    
    public function doHaveIndirectReferral($useremail){
        
        $email = $useremail;
        $haveEmail = $this->adminModel->checkIndirectReferral($email);
        if($haveEmail == ""){
            return;
        }
        else{
             $this->addMoneyToIndirectReferrral($haveEmail);
        }
    }
    public function addMoneyToIndirectReferrral($email){
       
        $level = 'level'.$this->no;
        
       
         $useremail = $email;
        $currentBalance = $this->adminModel->getReferralAcountBalance($useremail);
        $paidOrUnpaid = $this->adminModel->getReferralAcountPaid($useremail);
        if($paidOrUnpaid == 1){
             $level1 = $this->adminModel->getLevelAmountPaidByLevel($level);
        }
        
        $totalBalance = $currentBalance + $level1;
        $this->adminModel->updateUserBalance($useremail,$totalBalance);
        $no++;
        $this->doHaveIndirectReferral($useremail);
       
       
    }
        
        
        
        
        
        
        
        
        
        
        
         public function paidUser($id){
             
             $this->adminModel->makeUserPaid($id);
            
            
            $email = $this->adminModel->getEmailOfUser($id);
            $referralEmail = $this->adminModel->getReferralEmail($email);
            $this->addMoneyToDirectReferral($referralEmail);
            
            $this->adminModel->updatePaymentTable($id);
             redirect('admin/viewAllUser');
        }
        
        
        
        
        
        
        
        
        
        public function makeUserPaid($id){
            
            
            
            $this->adminModel->makeUserPaid($id);
            
            
            $email = $this->adminModel->getEmailOfUser($id);
            $referralEmail = $this->adminModel->getReferralEmail($email);
            $this->addMoneyToDirectReferral($referralEmail);
            
            $this->adminModel->updatePaymentTable($id);
            redirect('admin/viewAllUserTrans');
            
        }
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        public function manualPaymentRequest(){
            
             $data2 = array(
                
                'payment'=>$this->adminModel->getAllManualRequest()
                
            );
            $data =array(
                'admin' =>$this->adminModel->getDataFromAdmin(),
                'inner' =>$this->load->view('admin/manualPaymentRequest',$data2,true)
            ); 
		$this->load->view('admin/main',$data);
        }
        
        public function makeUserPaidNow($id){
            $email = $this->adminModel->getEmailFromPayment($id);
            
            
            $this->adminModel->makeUserPaidNow($email);
            redirect('admin/manualPaymentRequest');
        }
        
        public function clearPayment($id){
        
        	$userid = $id;
        	$this->adminModel->clearPayment($userid);
        	redirect('admin/viewAllUser');
        
        }
          public function unpaidUser($id){
            $uid = $id;
             $this->adminModel->unpaidUser($uid);
             redirect('admin/viewAllUser');
            
        }
        
      
        
        
         public function addYoutubePage(){
            
              $data2= array(
               
                
            );
            $data =array(
                'admin' =>$this->adminModel->getDataFromAdmin(),
                'inner' =>$this->load->view('admin/addYoutubePage',$data2,true)
            ); 
            
            $this->load->view('admin/main',$data);
            
            
        }
        
         public function addYoutubePageToDb(){
            $data = array(
                'pageurl' =>$this->input->post('pageurl'),
                'moneypaid' =>$this->input->post('moneypaid'),
                'moneynormal' =>$this->input->post('moneynormal'),
                'likelimit' =>$this->input->post('likelimit'),
                 'name' =>$this->input->post('name')
               
                
                
                
            );
            $this->adminModel->addYoutubePageToDb($data);
            redirect('admin/addYoutubePage');
            
        }
        
         public function viewEditYoutube(){
            
              $data2 = array(
                
                'facebook'=>$this->adminModel->getAllYoutube()
                
            );
            $data =array(
                'admin' =>$this->adminModel->getDataFromAdmin(),
                'inner' =>$this->load->view('admin/viewEditYoutubePage',$data2,true)
            ); 
		$this->load->view('admin/main',$data);
        }
        
         public function deleteYoutubePage($id){
            $this->adminModel->deleteYoutubePage($id);
            redirect('admin/viewEditYoutube');
            
        }
        
        
        
        
        
        
        
        
        
         public function addTwitterPage(){
            
              $data2= array(
               
                
            );
            $data =array(
                'admin' =>$this->adminModel->getDataFromAdmin(),
                'inner' =>$this->load->view('admin/addTwitterPage',$data2,true)
            ); 
            
            $this->load->view('admin/main',$data);
            
            
        }
        
         public function addTwitterPageToDb(){
            $data = array(
                'pageurl' =>$this->input->post('pageurl'),
                'moneypaid' =>$this->input->post('moneypaid'),
                'moneynormal' =>$this->input->post('moneynormal'),
                'likelimit' =>$this->input->post('likelimit'),
                 'name' =>$this->input->post('name')
               
                
                
                
            );
            $this->adminModel->addTwitterPageToDb($data);
            redirect('admin/addTwitterPage');
            
        }
        
         public function viewEditTwitter(){
            
              $data2 = array(
                
                'facebook'=>$this->adminModel->getAllTwitter()
                
            );
            $data =array(
                'admin' =>$this->adminModel->getDataFromAdmin(),
                'inner' =>$this->load->view('admin/viewEditTwitterPage',$data2,true)
            ); 
		$this->load->view('admin/main',$data);
        }
        
         public function deleteTwitterPage($id){
            $this->adminModel->deleteTwitterPage($id);
            redirect('admin/viewEditTwitter');
            
        }
        
        //post for paid users 
        
        
         public function addPostPage(){
            
              $data2= array(
               
                
            );
            $data =array(
                'admin' =>$this->adminModel->getDataFromAdmin(),
                'inner' =>$this->load->view('admin/addPostPage',$data2,true)
            ); 
            
            $this->load->view('admin/main',$data);
            
            
        }
        
        
           public function addPostPageToDb(){
            $data = array(
                'posttopic' =>$this->input->post('posttopic'),
                'minimumwords' =>$this->input->post('minimumwords'),
                'maximumwords' =>$this->input->post('maximumwords'),
                'likelimit' =>$this->input->post('likelimit'),
                 'money' =>$this->input->post('money'),
              
               
                
                
                
            );
            $this->adminModel->addPostPageToDb($data);
            redirect('admin/addPostPage');
            
        }
        
        
         public function viewEditPost(){
            
              $data2 = array(
                
                'facebook'=>$this->adminModel->getAllPost()
                
            );
            $data =array(
                'admin' =>$this->adminModel->getDataFromAdmin(),
                'inner' =>$this->load->view('admin/viewEditPostPage',$data2,true)
            ); 
		$this->load->view('admin/main',$data);
        }
        
          public function deletePostPage($id){
            $this->adminModel->deletePostPage($id);
            redirect('admin/viewEditPost');
            
        }
        
        public function viewAllSubmittedPost(){
            
             $data2 = array(
                
                'facebook'=>$this->adminModel->getAllSubmittedPost()
                
            );
            $data =array(
                'admin' =>$this->adminModel->getDataFromAdmin(),
                'inner' =>$this->load->view('admin/viewAllSubmittedPost',$data2,true)
            ); 
		$this->load->view('admin/main',$data);
            
        }
        
        public function approvePost($id){
            
            $this->adminModel->approvePost($id);
            $this->adminModel->addMoneyToUserForPost($id);
            redirect('admin/viewAllSubmittedPost');
        }
        
        public function viewFullPost($id){
            
              $data2 = array(
                
                'facebook'=>$this->adminModel->getPostById($id)
                
            );
            $data =array(
                'admin' =>$this->adminModel->getDataFromAdmin(),
                'inner' =>$this->load->view('admin/viewFullPost',$data2,true)
            ); 
		$this->load->view('admin/main',$data);
            
        }
        public function deletePostOfUser($id){
        
        	$this->adminModel->deletePostOfUser($id);
        	redirect('admin/viewAllSubmittedPost');
        
        }
        
        public function viewPaymentRequest(){
             $data2 = array(
                
                'request'=>$this->adminModel->getPaymentRequest()
                
            );
            $data =array(
                'admin' =>$this->adminModel->getDataFromAdmin(),
                'inner' =>$this->load->view('admin/viewPaymentRequest',$data2,true)
            ); 
		$this->load->view('admin/main',$data);
            
        }
        
        public function deletepaymentrequest($id){
        
        
        	$this->adminModel->deletepaymentrequest($id);
        	redirect('admin/viewPaymentRequest');
        
        
        }
        public function deleteUsers($id){
        
        
        	$this->adminModel->deleteUsers($id);
        	redirect('admin/viewAllUser');
        
        
        }
        
        
        //Update works here //
        
        public function messageForUser(){
            
            $data2 = array(
                
                'message'=>$this->adminModel->getMessage(),
             
            );
            $data =array(
                'admin' =>$this->adminModel->getDataFromAdmin(),
                'inner' =>$this->load->view('admin/messageForUser',$data2,true)
            ); 
		$this->load->view('admin/main',$data);
            
        }
        
        public function addMessageToDb(){
            
            $data = array(
                'body' =>$this->input->post('mytext'),
                
                
            );
            
            $this->adminModel->addMessageToDb($data);
            redirect('admin/messageForUser');
        }
        
        
        public function addNewBlogPost(){
            
            $data2 = array(
                
               // 'message'=>$this->adminModel->getMessage(),
             
            );
            $data =array(
                'admin' =>$this->adminModel->getDataFromAdmin(),
                'inner' =>$this->load->view('admin/addNewBlogPost',$data2,true)
            ); 
		$this->load->view('admin/main',$data);
            
        }
        public function viewOrEditBlogPost(){
            
             
            $data2 = array(
                
                'blog'=>$this->adminModel->getAllBlog(),
             
            );
            $data =array(
                'admin' =>$this->adminModel->getDataFromAdmin(),
                'inner' =>$this->load->view('admin/viewOrEditBlogPost',$data2,true)
            ); 
		$this->load->view('admin/main',$data);
        }
        
        
        
        
        
       public function addBlogPostToDb(){
           
                 $config['upload_path'] = './images/';
		$config['allowed_types'] = 'gif|jpg|png';
                $config['file_name'] = 'blogimage'.time();
		$this->load->library('upload', $config);
           
                if ($this->upload->do_upload('blogimage'))
		{
			echo "Successfully Upladed";
		}
                $imagedata = $this->upload->data();
                
                $data = array(
                  
                    'blogtitle'=>$this->input->post('blogtitle',true),
                     'blogbody'=>$this->input->post('blogbody',true),
                    'blogimage'=>$imagedata['file_name'],
                    
                );
                $this->adminModel->addBlogPostToDb($data);
                redirect('admin/viewOrEditBlogPost');
                
                
           
           
           
           
       }
       
        public function unpublishBlog($id){
             
             $uid = $id;
             $this->adminModel->unpublishBlog($uid);
             redirect('admin/viewOrEditBlogPost');
        }
       
        
         public function publishBlog($id){
             
             $uid = $id;
             $this->adminModel->publishBlog($uid);
             redirect('admin/viewOrEditBlogPost');
        }
        
         public function deleteBlog($id){
             
             $uid = $id;
             $this->adminModel->deleteBlog($uid);
             redirect('admin/viewOrEditBlogPost');
        }
             
        public function editBlog($id){
            
             $data2 = array(
                
                'blog'=>$this->adminModel->getSpecificBlog($id),
             
            );
            $data =array(
                'admin' =>$this->adminModel->getDataFromAdmin(),
                'inner' =>$this->load->view('admin/editBlogPost',$data2,true)
            ); 
		$this->load->view('admin/main',$data);
            
            
        }
        
        
        public function editBlogPostToDb(){
            $id = $this->input->post('id');
            
             $data = array(
                  
                    'blogtitle'=>$this->input->post('blogtitle',title),
                     'blogbody'=>$this->input->post('blogbody',title),
                   
                    
                );
                $this->adminModel->editBlogPostToDb($data,$id);
                redirect('admin/viewOrEditBlogPost');
                
        }
        //blog ends here
        
        public function deleteMultipleUser(){
        	$list = $this->input->post('check_list');
        	print_r($list);
        	foreach($list as $id) {
        
        
        $this->adminModel->deleteUsers($id);
        }
        redirect('admin/viewAllUser');
        
        }
        
        //New task
        
       public function  managePaidReferral(){
           
            $data2= array(
                'amount'=>$this->adminModel->getPaidReferralAMount()
                
            );
            $data =array(
                'admin' =>$this->adminModel->getDataFromAdmin(),
                'inner' =>$this->load->view('admin/paidReferralAmountManage',$data2,true)
            ); 
            
            $this->load->view('admin/main',$data);
           
       }
       
       public function updatePaidMoney(){
           
           $data = array(
                'level1' =>$this->input->post('level1'),
                'level2' =>$this->input->post('level2'),
                'level3' =>$this->input->post('level3'),
                'level4' =>$this->input->post('level4'),
                'level5' =>$this->input->post('level5'),
                'level6' =>$this->input->post('level6'),
                'level7' =>$this->input->post('level7'),
                'level8' =>$this->input->post('level8'),
                'level9' =>$this->input->post('level9'),
                'level10' =>$this->input->post('level10'),
                
                
            );
            $this->adminModel->updatePaidMoney($data);
            redirect('admin/managePaidReferral');
           
           
       }
        
        
}