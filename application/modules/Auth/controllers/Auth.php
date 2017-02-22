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

        if($success == 'Member Successfully Registered!'){
              $error_msg = array(
                'error_msg'=>'<div class="alert alert-success" role="alert">Member Successfully Registered!</div>');
      
              $data = array(
                'title'=>'Register Member Account'
              );
              $this->load->view('Default/main_header',$data);
              $this->load->view('Default/main_nav');
              $this->load->view('Web/signupmember',$error_msg);

        }
        else if($success == 'Your name has no permission to join on this team or Member is already registered'){
              $error_msg = array(
                'error_msg'=>'<div class="alert alert-danger" role="alert">Your name has no permission to join on this team or Member is already registered ! </div>');
      
              $data = array(
                'title'=>'Register Member Account'
              );
              $this->load->view('Default/main_header',$data);
              $this->load->view('Default/main_nav');
              $this->load->view('Web/signupmember',$error_msg);


        }
        else if($success == 'Username exist. Please try again another one.'){
          $error_msg = array(
                'error_msg'=>'<div class="alert alert-danger" role="alert">Username exist. Please try again another one.</div>');
      
              $data = array(
                'title'=>'Register Member Account'
              );
              $this->load->view('Default/main_header',$data);
              $this->load->view('Default/main_nav');
              $this->load->view('Web/signupmember',$error_msg);
        }
    }
    else{
      $error_msg = array(
                'error_msg'=>'<div class="alert alert-danger" role="alert">Password didn\'t matched.</div>');
      
     
      $data = array(
        'title'=>'Register Member Account'
      );
      $this->load->view('Default/main_header',$data);
      $this->load->view('Default/main_nav');
      $this->load->view('Web/signupmember',$error_msg);
   
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
   
    $success = $this->M_auth->login($userdetails);
    if($success == 'Users'){
       redirect('Web/wlcome_msg');
      
    }
    else if($success == 'Admin'){
      redirect('Web/Administrator/');
    }
    else{
     $error_msg = array(
        'error_msg'=>'<div class="alert alert-danger" role="alert">Incorrect Password or Username . Try Again !</div>');
      
      $this->load->view('Default/main_header',$data);
      $this->load->view('Default/login_nav');
      $this->load->view('Web/login',$error_msg);
  
    }
  }


  function getRole($teamname){

    $success = $this->M_auth->getRole($teamname);

    echo $success;
  }

  function getTeam($teamname){

    $success = $this->M_auth->getTeam($teamname);

    echo $success;
  }


  

  function logout(){
        $this->session->sess_destroy();
        redirect('Web/');
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
