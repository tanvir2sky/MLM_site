<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loginModel extends CI_Model {

	public function insertUser($data){
        
        $this->db->insert('user',$data);
    }
    
    public function getData($data){
        
        $query = $this->db->get_where('user', $data);
        if($query->num_rows() == 1) {
            return true;
        }
        else return false;
    }
   public function getReferralAcountBalance($useremail){
       $query = $this->db->get_where('user', array('useremail' => $useremail), 1);
       $result= $query->row();
       return $result->userbalance;
   }
   
    public function getReferralAcountPaid($useremail){
       $query = $this->db->get_where('user', array('useremail' => $useremail), 1);
       $result= $query->row();
       return $result->isPaid;
   }
    public function getLevel1Amount(){
       $query = $this->db->get_where('referralamount', array('id' => 1), 1);
       $result= $query->row();
      
       return $result->level1;
   }
    public function getLevel1AmountPaid(){
       $query = $this->db->get_where('referralamount', array('id' => 2), 1);
       $result= $query->row();
       return $result->level1;
   }
   public function updateUserBalance($useremail,$amount){
        $data = array(
               'userbalance' => $amount,
              
            );

        $this->db->where('useremail', $useremail);
        $this->db->update('user', $data); 
   }
    public function getDataFromAdmin($data){
        
        $query = $this->db->get_where('admin', $data);
        if($query->num_rows() == 1) {
            return true;
        }
 else {
     return false;
 }
        
    }
    
    
    
    /////////////////////////////////////////////Indirect Referral ////////////
    
    public function checkIndirectReferral($useremail){
        
       
      $query = $this->db->get_where('user', array('useremail' => $useremail), 1);
      $result = $query->row();
      return  $result->referralemail;
     
      
        
        
        
    }
      public function getLevelAmountPaidByLevel($level){
       $query = $this->db->get_where('referralamount', array('id' => 2,), 1);
       $result= $query->row();
       return $result->$level;
   }
     public function getLevel1AmountByLevel($level){
       $query = $this->db->get_where('referralamount', array('id' => 1,), 1);
       $result= $query->row();
       return $result->$level;
   }
    
   
   public function verifyEmailDb($url){
       $query = $this->db->get_where('user', array('verificationUrl' => $url,), 1);
       if($query->num_rows() == 1){
           $data = array(
               'emailVerified' => 1,
              
            );

$this->db->where('verificationUrl', $url);
$this->db->update('user', $data); 
           return true;
       }
       else {
           return false;
           
       }
   }
   
   
   public function getReferralEmail($url){
       $query = $this->db->get_where('user', array('verificationUrl' => $url,), 1);
       return $query->row();
   }
   
   
    public function getUserEmailByUrl($url){
       
       $query = $this->db->query("select useremail from user where verificationUrl='$url' limit 1");
       if($query->num_rows()==1){
           $result = $query->row();
           return $result->useremail;
       }
 else {
        return 0;   
       }
   }
	
   
    //updated works
  public function addLastLogin($email){
      
  $query = $this->db->query("update `user` set lastlogin=now() WHERE useremail='$email'");

      
      
  }
   
   
	
}
