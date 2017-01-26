<?php

class Auth extends MY_Controller{

  function __construct(){
    parent::__construct();
    $this->load->model('M_auth');
    $this->load->helper('url');
  }



  function signup(){

    $registerdata = $this->input->post();

      $data = array(
        'title'=>'Register Account'
      );

    $details = array(
      'firstname'=>$registerdata['firstname'],
      'lastname'=>$registerdata['lastname'],
      'username'=>$registerdata['username'],
      'password'=>md5($registerdata['password'])
      );

    if($registerdata['password'] == $registerdata['repassword']){
      $error_msg = array(
        'error_msg'=>'<div class="alert alert-success" role="alert">Account Succefully Registered !</div>');
      
      $exist_msg = array(
        'exist_msg'=>'<div class="alert alert-success" role="alert">Username is already exists !</div>');
      

      $success = $this->M_auth->signup($details);

      if($success){

      $this->load->view('Default/main_header',$data);
      $this->load->view('Default/main_nav');
      $this->load->view('Web/signup',$error_msg);
      }
      else{
      $this->load->view('Default/main_header',$data);
      $this->load->view('Default/main_nav');
      $this->load->view('Web/signup',$exist_msg);
      }
      
    }
    else{

      $data = array(
        'title'=>'Register Account'
      );

      $success = $this->M_auth->signup($details);
      $error_msg = array('error_msg'=>'<div class="alert alert-danger" role="alert">Password Mismatched !</div>');
      
      if($success){
        $this->load->view('Default/main_header',$data);
        $this->load->view('Default/main_nav');
        $this->load->view('Web/signup',$error_msg);
      }
    }

  }


  function login(){
    $usersdata = $this->input->post();
    $data = array(
        'title'=>'Login'
      );
    $userdetails = array(
      'username'=>$usersdata['username'],
      'password'=>md5($usersdata['password'])
    );
    $error_msg = array(
        'error_msg'=>'<div class="alert alert-danger" role="alert">Incorrect Password !</div>');
      
    $success = $this->M_auth->login($userdetails);
    if($success){
       redirect('Web/wlcome_msg');
      
    }else{
    
      $this->load->view('Default/main_header',$data);
      $this->load->view('Default/login_nav');
      $this->load->view('Web/login',$error_msg);
  
    }
  }

  

  function logout(){
        $this->session->sess_destroy();
        redirect('Web');
  }

  function deactivate(){
    $success = $this->M_auth->deactivate();

    if($success == 'True'){
      $this->session->sess_destroy();
      redirect('Web');
      echo $success;
    }
  }

}

 ?>
