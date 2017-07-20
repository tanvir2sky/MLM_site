<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adminModel extends CI_Model {

      public function getDataFromAdmin(){
        
        $query = $this->db->get_where('admin', array('adminemail'=>$this->session->userdata('adminemail')));
        if($query->num_rows() == 1) {
            return $query->row();
        }
        
    }
    public function getTotalUser(){
        
        $query = $this->db->query('SELECT * FROM user');

        return $query->num_rows();
    }
    public function getAllPaidUser(){
         $query = $this->db->query('SELECT * FROM user where `isPaid`=1');
          return $query->num_rows();
        
    }
    public function getAllUser(){
        $query = $this->db->query('SELECT * FROM user where emailVerified=1 ORDER BY userid desc');

        return $query;
        
    }
    
    public function activeUser($id){
          $data = array(
               'isActivated' => 1,
              
            );

$this->db->where('userid', $id);
$this->db->update('user', $data); 
            
        }
        
        
        //Inactive User
        
        
        public function deactiveUser($id){
              $data = array(
               'isActivated' => 0,
              
            );

$this->db->where('userid', $id);
$this->db->update('user', $data); 
            
       }
        public function updateReferralTable($data){
           $this->db->where('id', 1);
            $this->db->update('referralamount', $data); 
           
       }
       public function getRefferalAmount(){
           
            $query = $this->db->query( "SELECT * FROM `referralamount` WHERE id=1");

            return $query->row();
       }
       
        public function getRefferalAmountPaid(){
           
            $query = $this->db->query( "SELECT * FROM `referralamount` WHERE id=2");

            return $query->row();
       }
       public function updateReferralTablePaid($data){
           $this->db->where('id', 2);
            $this->db->update('referralamount', $data); 
           
       }
	
       
       public function addFacebookPageToDb($data){
           $query = $this->db->insert('facebook',$data);
           if($query){return true;}
           else {die();}
       }
       
        public function addTwitterPageToDb($data){
           $query = $this->db->insert('twitter',$data);
           if($query){return true;}
           else {die();}
       }
       
      public function getAllFacebook(){
           $query = $this->db->query('SELECT * FROM facebook');

            return $query;
       }
        public function getAllTwitter(){
           $query = $this->db->query('SELECT * FROM twitter');

            return $query;
       }
       
       public function deletePage($id){
           
           $this->db->delete('facebook', array('id' => $id)); 
       }
       public function deleteTwitterPage($id){
           
           $this->db->delete('twitter', array('id' => $id)); 
       }
       
       public function deleteYoutubePage($id){
           
           $this->db->delete('youtube', array('id' => $id)); 
       }
       
        public function deletePostPage($id){
           
           $this->db->delete('post', array('id' => $id)); 
       }
       
       public function getAllPayment(){
           $query = $this->db->query('SELECT * FROM payments');

            return $query;
       }
       public function makeUserPaid($id){
             $data = array(
               'isPaid' => 1,
              
            );

        $this->db->where('userid', $id);
        $this->db->update('user', $data); 
           
       }
      public function updatePaymentTable($id){
          $data = array(
               'verified' => 1,
              
            );

        $this->db->where('user_id', $id);
        $this->db->update('payments', $data); 
      }
      
      public function getAllManualRequest(){
          $query = $this->db->query('SELECT * FROM manualpayment');

          return $query;
          
      }
     public function makeUserPaidNow($id){
         
          $data = array(
               'isPaid' => 1,
              
            );

        $this->db->where('useremail', $id);
        $this->db->update('user', $data); 
        
        $data = array(
               'isconfirmed' => 1,
              
            );

        $this->db->where('email', $id);
        $this->db->update('manualpayment', $data); 
        
     }
     
    public function getEmailFromPayment($id){
        $query = $this->db->query("select email from manualpayment where id='$id'");
        $result = $query->row();
        return $result->email;
    }
     
  public function clearPayment($userid){
        
        	   $data = array(
               'userbalance' => 0,
              
            );

        $this->db->where('userid', $userid);
        $this->db->update('user', $data); 
        
        }
        
          public function unpaidUser($id){
          $data = array(
               'isPaid' => 0,
              
            );

		$this->db->where('userid', $id);
		$this->db->update('user', $data); 
            
        }
        
        
      
        
        
        public function paidUser($id){
              $data = array(
               'isPaid' => 1,
              
           	 );
    			$this->db->where('userid', $id);
		$this->db->update('user', $data);
		 }
                 
                 
                 public function addYoutubePageToDb($data){
            $query = $this->db->insert('youtube',$data);
            if($query){return true;}
             else {die();}
       }
      public function getAllYoutube(){
           $query = $this->db->query('SELECT * FROM youtube');

            return $query;
       }
       
       
       //post for paid user model
       
         public function addPostPageToDb($data){
           $query = $this->db->insert('post',$data);
           if($query){return true;}
           else {die();}
       }
       
        public function getAllPost(){
           $query = $this->db->query('SELECT * FROM post');

            return $query;
       }
       
       public function getAllSubmittedPost(){
            $query = $this->db->query('SELECT * FROM postlikes');

            return $query;
           
       }
      public function approvePost($id){
          $data = array(
               'isApproved' => 1,
              
           	 );
    			$this->db->where('id', $id);
		$this->db->update('postlikes', $data);
		 
          
      }
      
     public function getPostById($id){
         
         $query = $this->db->query("select * from postlikes where id='$id' limit 1");
         if($query->num_rows()>0){
             return $query->row();
         }
 else {return 0;}
     }
     
     //ading money for post
     public function addMoneyToUserForPost($id){
         
         
       $query = $this->db->query("select useremail from postlikes where id='$id' limit 1");
       $result = $query->row();
       $email = $result->useremail;
       $query3 = $this->db->query("select postid from postlikes where id='$id' limit 1");
       $result3 = $query3->row();
       $postid = $result3->postid;
      
           
           
       
           $query = $this->db->query("select money from post where id='$postid' limit 1");
           $result= $query->row();
           $money = $result->money;
       
       
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
    public function deletePostOfUser($id){
    
    	$this->db->delete('postlikes', array('id' => $id)); 
    
    }
    public function getPaymentRequest(){
        
       $query =  $this->db->query("select * from paymentrequest");
       return $query;
    }
    
    public function deletepaymentrequest($id){
    	$this->db->delete('paymentrequest', array('id' => $id)); 
    	
    }
    
    public function deleteUsers($id){
    	$this->db->delete('user', array('userid' => $id)); 
    	
    }
    
    
    //Updated Work//
    
    
    
    
    public function getMessage(){
          $query =  $this->db->query("select body from message");
          if($query->num_rows()>0){
              
              $result = $query->row();
          }
       return $result->body;
        
    }
    
    
      public function addMessageToDb($data){
            
          $this->db->where('id', 1);
		$this->db->update('message', $data);
        }
        
        
       public function addBlogPostToDb($data){
            $query = $this->db->insert('blog',$data);
           if($query){return true;}
           else {die();}
           
       }
       public function getAllBlog(){
            $query =  $this->db->query("select * from blog");
            return $query;
           
       }
       
       
         public function unpublishBlog($id){
              $data = array(
               'isPublished' => 0,
              
            );

            $this->db->where('id', $id);
            $this->db->update('blog', $data); 
            
       }
       
       public function publishBlog($id){
              $data = array(
               'isPublished' => 1,
              
            );

            $this->db->where('id', $id);
            $this->db->update('blog', $data); 
            
       }
       
          public function deleteBlog($id){
              $this->db->delete('blog', array('id' => $id)); 
            
       }
       
     public function  getSpecificBlog($id){
         $query = $this->db->query("select * from blog where id='$id'");
         if($query->num_rows()>0){
             return $query->row();
         }
         
     }
     
     public function editBlogPostToDb($data,$id){
           $this->db->where('id', $id);
            $this->db->update('blog', $data); 
            
         
         
     }
     public function getAllPublishedBlog(){
          $query = $this->db->query("select * from blog where isPublished=1 ORDER BY id DESC limit 20");
          return $query;
         
     }
     
       public function getAllPublishedBlogById($id){
          $query = $this->db->query("select * from blog where id='$id' limit 1");
          return $query->row();
         
     }
     public function getRecentPost(){
         
          $query = $this->db->query("select blogtitle from blog where isPublished=1 ORDER BY id DESC limit 5");
          return $query;
     }
     
     public function getPaidReferralAMount(){
           $query = $this->db->query( "SELECT * FROM `paidmoney` WHERE id=1");

            return $query->row();
         
     }
     public function updatePaidMoney($data){
         
         $this->db->where('id', 1);
            $this->db->update('paidmoney', $data); 
         
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
   
    public function getLevel1AmountPaid(){
       $query = $this->db->get_where('paidmoney', array('id' => 1), 1);
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
   
     public function checkIndirectReferral($useremail){
        
       
      $query = $this->db->get_where('user', array('useremail' => $useremail), 1);
      $result = $query->row();
      return  $result->referralemail;
     
      
        
        
        
    }
      public function getLevelAmountPaidByLevel($level){
       $query = $this->db->get_where('paidmoney', array('id' => 1,), 1);
       $result= $query->row();
       return $result->$level;
   }
   
   
   public function getEmailOfUser($id){
       
        $query = $this->db->get_where('user', array('userid' => $id), 1);
      $result = $query->row();
      return  $result->useremail;
       
       
   }
   
   
   public function getReferralEmail($email){
       
        $query = $this->db->get_where('user', array('useremail' => $email), 1);
      $result = $query->row();
      return  $result->referralemail;
       
       
   }
     
     
     
     
     
       
}