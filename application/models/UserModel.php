<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class userModel extends CI_Model {

    public function getDataFromUser(){
        
        $query = $this->db->get_where('user', array('useremail'=>$this->session->userdata('useremail')));
        if($query->num_rows() == 1) {
            return $query->row();
        }
        
    }
    public function getTotalReferral(){
        $query = $this->db->get_where('user', array('referralemail'=>$this->session->userdata('useremail')));
        if($query){
            return $query->num_rows();
        }
        
    }
    public function getFacebookPage(){
        $email = $this->session->userdata('useremail');
        $query = $this->db->query("select * from facebook where id not in (select pageid from facebooklikes where useremail='$email') and present<likelimit limit 1");
       
        if($query->num_rows()>0){
        return $query; }
        else {
            
            return 0;
        }
        
    }
   public function increaseLikeNumber($id){
       $query = $this->db->query('select present from facebook where id='.$id.'');
       $query = $query->row();
       $present = $query->present;
       $present++;
       $data = array(
               'present' => $present
              
            );

    $this->db->where('id', $id);
    $this->db->update('facebook', $data); 

   }
   
     public function increaseYoutubeLikeNumber($id){
       $query = $this->db->query('select present from youtube where id='.$id.'');
       $query = $query->row();
       $present = $query->present;
       $present++;
       $data = array(
               'present' => $present
              
            );

    $this->db->where('id', $id);
    $this->db->update('youtube', $data); 

   }
   
    public function increaseTwitterLikeNumber($id){
       $query = $this->db->query('select present from twitter where id='.$id.'');
       $query = $query->row();
       $present = $query->present;
       $present++;
       $data = array(
               'present' => $present
              
            );

    $this->db->where('id', $id);
    $this->db->update('twitter', $data); 

   }
   
   public function addToFacebookLike($data)
   {
       $this->db->insert('facebooklikes',$data);
   }
   public function addToYoutubeLike($data)
   {
       $this->db->insert('youtubelikes',$data);
   }
   
   public function addToTwitterLike($data)
   {
       $this->db->insert('twitterlikes',$data);
   }
   
   
   public function addMoneyForFacebookLike($id){
       $email = $this->session->userdata('useremail');
       $query = $this->db->query("select isPaid from user where useremail='$email' limit 1");
       $result = $query->row();
       $isPaid = $result->isPaid;
       if(isPaid == 0){
           
           $query = $this->db->query("select moneynormal from facebook where id='$id' limit 1");
           $result= $query->row();
            $money = $result->moneynormal;
       }
       if(isPaid == 1){
           $query = $this->db->query("select moneypaid from facebook where id='$id' limit 1");
           $result= $query->row();
           $money = $result->moneypaid;
       }
       
       $query2= $this->db->query("select userbalance from user where useremail='$email' limit 1");
       $result2 = $query2->row();
       $userBalance = $result2->userbalance;
       $userBalance = $userBalance+$money;
        $data = array(
               'userbalance' => $userBalance,
              
            );

        $this->db->where('useremail', $email);
        $this->db->update('user', $data); 
        return true;
       
       
   }
   
   
    public function addMoneyForYoutubeLike($id){
       $email = $this->session->userdata('useremail');
       $query = $this->db->query("select isPaid from user where useremail='$email' limit 1");
       $result = $query->row();
       $isPaid = $result->isPaid;
       if(isPaid == 0){
           
           $query = $this->db->query("select moneynormal from youtube where id='$id' limit 1");
           $result= $query->row();
            $money = $result->moneynormal;
       }
       if(isPaid == 1){
           $query = $this->db->query("select moneypaid from youtube where id='$id' limit 1");
           $result= $query->row();
           $money = $result->moneypaid;
       }
       
       $query2= $this->db->query("select userbalance from user where useremail='$email' limit 1");
       $result2 = $query2->row();
       $userBalance = $result2->userbalance;
       $userBalance = $userBalance+$money;
        $data = array(
               'userbalance' => $userBalance,
              
            );

        $this->db->where('useremail', $email);
        $this->db->update('user', $data); 
        return true;
       
       
   }
   
    public function addMoneyForTwitterLike($id){
       $email = $this->session->userdata('useremail');
       $query = $this->db->query("select isPaid from user where useremail='$email' limit 1");
       $result = $query->row();
       $isPaid = $result->isPaid;
       if(isPaid == 0){
           
           $query = $this->db->query("select moneynormal from twitter where id='$id' limit 1");
           $result= $query->row();
            $money = $result->moneynormal;
       }
       if(isPaid == 1){
           $query = $this->db->query("select moneypaid from twitter where id='$id' limit 1");
           $result= $query->row();
           $money = $result->moneypaid;
       }
       
       $query2= $this->db->query("select userbalance from user where useremail='$email' limit 1");
       $result2 = $query2->row();
       $userBalance = $result2->userbalance;
       $userBalance = $userBalance+$money;
        $data = array(
               'userbalance' => $userBalance,
              
            );

        $this->db->where('useremail', $email);
        $this->db->update('user', $data); 
        return true;
       
       
   }
   
   
   public function getUserId(){
       $useremail = $this->session->userdata('useremail');
       $query = $this->db->query("select userid from user where useremail='$useremail'");
       $result = $query->row();
       return $result->userid;
   }
   
   public function insertTransaction($data){
       $this->db->insert('payments',$data);
   }
   
   public function changePassword($presentPassword ,$newPassword ){
   
   	$data = array(
               'userpassword' => $newPassword
             
            );

	$this->db->where('userpassword', $presentPassword );
		$query = $this->db->update('user', $data); 
		if($this->db->affected_rows()>0) {return true;}
		else {return false;}
   		
   		
   }
   
   
  
    public function addToManualPayment($data){
        $this->db->insert('manualpayment',$data);
        
        
    }
    
     public function getYoutubePage(){
        $email = $this->session->userdata('useremail');
        $query = $this->db->query("select * from youtube where id not in (select pageid from youtubelikes where useremail='$email') and present<likelimit limit 1");
       
        if($query->num_rows()>0){
        return $query; }
        else {
            
            return 0;
        }
        
    }
    
     public function getTwitterPage(){
        $email = $this->session->userdata('useremail');
        $query = $this->db->query("select * from twitter where id not in (select pageid from twitterlikes where useremail='$email') and present<likelimit limit 1");
       
        if($query->num_rows()>0){
        return $query; }
        else {
            
            return 0;
        }
        
    }
    
    
     public function getPostPage(){
        $email = $this->session->userdata('useremail');
        $query = $this->db->query("select * from post where id not in (select postid from postlikes where useremail='$email') and present<likelimit limit 1");
       
        if($query->num_rows()>0){
        return $query; }
        else {
            
            return 0;
        }
        
    }
    public function insertIntoPostDb($data){
        $this->db->insert('postlikes',$data);
       
        
    }
    
     public function increasePostLikeNumber($id){
       $query = $this->db->query('select present from post where id='.$id.'');
       $query = $query->row();
       $present = $query->present;
       $present++;
       $data = array(
               'present' => $present
              
            );

    $this->db->where('id', $id);
    $this->db->update('post', $data); 

   }
    public function paypalInsertDb($data){
        
        $this->db->insert('paymentrequest',$data);
    }
    
     public function manualInsertDb($data){
        
        $this->db->insert('paymentrequest',$data);
    }
    
    //updated works
    
         
    public function getMessage(){
          $query =  $this->db->query("select body from message");
        
          if($query->num_rows()>0){
              
              $result = $query->row();
          }
       return $result->body;
        
    }
    
    
}