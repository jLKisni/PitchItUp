<?php

class Auth extends MY_Controller{

  function __construct(){
    parent::__construct();
    $this->load->model('M_auth');
    $this->load->helper('url');
  }



  function signup(){

    $registerdata = $this->input->post('data');

    //echo json_encode($registerdata);
   $success = $this->M_auth->signup($registerdata);

    if($success){
      echo $success;
    }

  }


  function signupmember(){
    $members = $this->input->post();

    if($members['password'] == $members['repassword']){

        $success = $this->M_auth->signupmember($members);

        echo $success;
    }
    else{

     
      $data = array(
        'title'=>'Register Member Account'
      );
      $this->load->view('Default/main_header',$data);
      $this->load->view('Default/main_nav');
      $this->load->view('signupmember');
   
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
