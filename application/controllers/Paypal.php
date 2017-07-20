<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Paypal extends CI_Controller 
{
     function  __construct(){
        parent::__construct();
        $this->load->library('paypal_lib');
        $this->load->model('userModel');
     }
     
     function success(){
        //get the transaction data
        $paypalInfo = $this->input->get();
          
        $data['item_number'] = $paypalInfo['item_number']; 
        $data['txn_id'] = $paypalInfo["tx"];
        $data['payment_amt'] = $paypalInfo["amt"];
        $data['currency_code'] = $paypalInfo["cc"];
        $data['status'] = $paypalInfo["st"];
        
         $data = array(
                
                'inner' => $this->load->view('user/success','',true),
                'user'=>$this->userModel->getDataFromUser()
            );
            $this->load->view('user/main',$data);
     }
     
     function cancel(){
         
       
            $data = array(
                
                'inner' => $this->load->view('user/cancel','',true),
                'user'=>$this->userModel->getDataFromUser()
            );
            $this->load->view('user/main',$data);
     }
     
     function ipn(){
        //paypal return transaction details array
        $paypalInfo    = $this->input->post();

        $data['user_id'] = $paypalInfo['custom'];
        $data['product_id']    = $paypalInfo["item_number"];
        $data['txn_id']    = $paypalInfo["txn_id"];
        $data['payment_gross'] = $paypalInfo["payment_gross"];
        $data['currency_code'] = $paypalInfo["mc_currency"];
        $data['payer_email'] = $paypalInfo["payer_email"];
        $data['payment_status']    = $paypalInfo["payment_status"];

        $paypalURL = $this->paypal_lib->paypal_url;        
        $result    = $this->paypal_lib->curlPost($paypalURL,$paypalInfo);
        
        //check whether the payment is verified
        if(eregi("VERIFIED",$result)){
            //insert the transaction data into the database
            $this->userModel->insertTransaction($data);
        }
    }
}