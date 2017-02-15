<?php



class Account_management extends MY_Controller{

		function __construct(){
			
			parent::__construct();
			$this->load->model('Web/Web_m');
			$this->load->model('Web/Account_management_m');

		}

		function updateAccount(){

			$userinput = $this->input->post();

			$userdata = array(
				'teamname'=> $userinput['teamname'],
				'firstname'=>$userinput['firstname'],
			      'lastname'=>$userinput['lastname'],
			      'username'=>$userinput['username'],
			      'password'=>md5($userinput['password'])
				);

			$userdetails = $this->Web_m->getAccount($this->session->userdata('userid'));
		    $error_msg = array(
        	'error_msg'=>'<div class="alert alert-danger" role="alert">Incorrect Password !</div>');
      		$exist_msg = array(
        	'exist_msg'=>'<div class="alert alert-success" role="alert">Successfully Updated !</div>');
      
		        $data = array(
		        'title'=>'My Documents',
		        'userdetails'=>$userdetails
		      );

		     if($userinput['password'] == $userinput['repassword']){

			  $success = $this->Account_management_m->updateAccount($userdata);		     	
			  $userdetails = $this->Web_m->getAccount($this->session->userdata('userid'));
			   $data = array(
		        'title'=>'My Documents',
		        'userdetails'=>$userdetails
		      );

			  if($success){
			  $this->load->view('Default/main_header',$data);
		      $this->load->view('Default/create_nav');
		      $this->load->view('account',$exist_msg);
		      $this->load->view('Default/templatefooter');
			  }
		      
		     
		     }else{

		      $this->load->view('Default/main_header',$data);
		      $this->load->view('Default/create_nav');
		      $this->load->view('account',$error_msg);
		      $this->load->view('Default/templatefooter');
		     }

		     


		}

}


?>