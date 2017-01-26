<?php

class Auth extends MY_Controller{

  function __construct(){
    parent::__construct();
    $this->load->model('M_auth');
    $this->load->helper('url');
  }

  function register(){

    $usertype = $this->input->post('usertype');

    if($usertype == 1){

      $customer = array(
        'uname'=>$this->input->post('username'),
        'pass'=>md5($this->input->post('password')),
        'utype'=>$this->input->post('usertype'),
        'email'=>$this->input->post('email'),
        'fname'=>$this->input->post('fname'),
        'lname'=>$this->input->post('lname'),
        'address'=>$this->input->post('address'),
        'user_image'=>'user.png'
      );


      $success = $this->M_auth->register($usertype,$customer);

      if($success == 'Username or email address exist ! Please Create Another One'){
        $data = array(
          'title'=>'Registration Form',
          'notsuccess'=> $success
        );

        $this->load->view('Default/header',$data);
        $this->load->view('Web/register',$data);
        $this->load->view('Default/footer');
      }
      else if($success == 'Login'){
        redirect('Functions');
      }
    }
    else if($usertype == 2){
      $salonadmin = array(
        'uname'=>$this->input->post('username'),
        'pass'=>md5($this->input->post('password')),
        'utype'=>$this->input->post('usertype'),
        'email'=>$this->input->post('salonemail'),
        'salonname'=>$this->input->post('salonname'),
        'contactnumber'=>$this->input->post('contactnumber'),
        'salonaddress'=>$this->input->post('salonaddress'),
        'salonowner'=>$this->input->post('salonowner'),
        'salondetails'=>$this->input->post('salondetails'),
        'long'=>$this->input->post('long'),
        'lat'=>$this->input->post('lat'),
        'user_image'=>'user.png'
      );


      $success = $this->M_auth->register($usertype,$salonadmin);

      if($success == 'Username or email address exist ! Please Create Another One'){
        $data = array(
          'title'=>'Registration Form',
          'notsuccess'=> $success
        );

        $this->load->view('Default/header',$data);
        $this->load->view('Web/register',$data);
        $this->load->view('Default/footer');
      }
      else if($success == 'Login'){
        redirect('Functions');
      }

    }

  }

  function login(){
    $data = $this->input->post('data');

    $userdetails = array(
      'username'=>$data['username'],
      'password'=>md5($data['password'])
    );
    $success = $this->M_auth->login($userdetails);
    if($success == 'Login'){
      echo $success;
    }else{
      echo $success;
    }
  }

  function loginStaff(){

    $data = $this->input->post('data');

    $userdetails = array(
      'username'=>$data['username'],
      'password'=>md5($data['password'])
    );
    $success = $this->M_auth->loginSalonStaff($userdetails);

    if($success == 'Login'){
      echo $success;
    }else{
      echo $success;
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
