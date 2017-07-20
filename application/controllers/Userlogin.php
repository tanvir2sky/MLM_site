<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class userlogin extends CI_Controller {
   
    function __construct() {
        parent::__construct();
        if($this->session->userdata('useremail')){
            redirect('user');
        }
    }
    
    var $no = 2;
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
      
	}
        
    public function register(){
        $this->load->view('register');
    }
    
    public function checkLogin(){
         $data = array(
            
            'useremail' => $this->input->post('useremail',true),
            'userpassword' => $this->input->post('userpassword',true),
             'isActivated'=>1,
             'emailVerified'=>1
           
            
        );
         $this->load->model('loginModel');
        if($this->loginModel->getData($data)){
            $data1 = array(
                
                'useremail' => $data['useremail']
                
            );
            $email = $data['useremail'];
            $this->session->set_userdata($data1);
          
            $this->loginModel->addLastLogin($email);
            redirect('user');
        }
        else{
            $this->session->set_userdata('loginFail','LOGIN FAILD');
            redirect('userlogin');
           
        }
        
        
    }
     public function addMoneyToDirectReferral($id){
         $this->load->model('loginModel');
         $useremail = $id;
        $currentBalance = $this->loginModel->getReferralAcountBalance($useremail);
        $paidOrUnpaid = $this->loginModel->getReferralAcountPaid($useremail);
        if($paidOrUnpaid == 1){
             $level1 = $this->loginModel->getLevel1AmountPaid();
        }
        else {
             $level1 = $this->loginModel->getLevel1Amount();
        }
       
        $totalBalance = $currentBalance + $level1;
        $this->loginModel->updateUserBalance($useremail,$totalBalance);
        $this->doHaveIndirectReferral($useremail);
    }
    //Adding money to the indirect referrals//
    
    public function doHaveIndirectReferral($useremail){
        
        $email = $useremail;
        $haveEmail = $this->loginModel->checkIndirectReferral($email);
        if($haveEmail == ""){
            return;
        }
        else{
             $this->addMoneyToIndirectReferrral($haveEmail);
        }
    }
    public function addMoneyToIndirectReferrral($email){
       
        $level = 'level'.$this->no;
        
        $this->load->model('loginModel');
         $useremail = $email;
        $currentBalance = $this->loginModel->getReferralAcountBalance($useremail);
        $paidOrUnpaid = $this->loginModel->getReferralAcountPaid($useremail);
        if($paidOrUnpaid == 1){
             $level1 = $this->loginModel->getLevelAmountPaidByLevel($level);
        }
        else {
             $level1 = $this->loginModel->getLevel1AmountByLevel($level);
        }
       
        $totalBalance = $currentBalance + $level1;
        $this->loginModel->updateUserBalance($useremail,$totalBalance);
        $no++;
        $this->doHaveIndirectReferral($useremail);
       
       
    }






//Add money to the indirect referral end

    public function  confirmRegister(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('userpassword', 'Password', 'required');
        if($this->input->post('referralemail') != ''){
        $this->form_validation->set_rules('referralemail', 'Refferal Email', 'callback_referral_check');
        }
        $this->form_validation->set_rules('useremail', 'Email', 'required|valid_email|is_unique[user.useremail]');
        if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_userdata('errorLogin',"Something Error with ther form!!Correct Your Input");
                        redirect('userlogin/register');
                        die();
		}
                else{
                    $randomUrl = time();
        $data = array(
            'username' => $this->input->post('username',true),
            'useremail' => trim($this->input->post('useremail',true)),
            'userpassword' => $this->input->post('userpassword',true),
            'referralemail' => trim($this->input->post('referralemail',true)),
            'verificationUrl'=>$randomUrl,
            
        );
        $this->load->model('loginModel');
        $this->loginModel->insertUser($data);
        $this->load->library('email');

        $this->email->from('noreply@jobslogon.com', 'Job LogOn');
        $this->email->to($data['useremail']); 
       

        $this->email->subject('Verification Email');
        $this->email->message('Please click in the follwing url to confirm your registration:  '.base_url().'userlogin/verifyEmail/'.$randomUrl);	
        $this->email->send();
        
        
        
        $this->session->set_userdata(array('registeSuccess'=>"Successfully Registered Now Confim Via Email To login"));
        redirect('userlogin');
        
               }
    }
    
    public function verifyEmail($url){
        $link = $url;
        $this->load->model('loginModel');
        if($this->loginModel->verifyEmailDb($link)){
           $row = $this->loginModel->getReferralEmail($link);
           $referralEmail = $row->referralemail;
           
           if($referralEmail!=""){
            $this->addMoneyToDirectReferral($referralEmail);}
              $this->session->set_userdata(array('registeSuccess'=>"Successfully Confirmed Now Login By your Credentials"));
                redirect('userlogin');
        
        } 
        
       
    }

    public function referral_check($str)
	{
		$referralEmail = $str;
                $this->load->model('loginModel');
                $data = array(
                        'useremail'=>$referralEmail,
                        );
                if($this->loginModel->getData($data)){
                    return true;
                }
                else{
                    return false;
                }
	}
        
        
        public function urlRegister($url){
            $id = $url;
            $this->load->model('loginModel');
            
            $email = $this->loginModel->getUserEmailByUrl($id);
            $data  = array(
                
              'refemail' => $email  
            );
                    
            $this->load->view('register',$data);
            
        }
}