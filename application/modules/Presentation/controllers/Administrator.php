<?php



class Administrator extends MY_Controller{

	function __construct(){
			
			parent::__construct();
			$this->load->model('Web_m');

		}


	function index(){

		$userdetails = $this->Web_m->getAccounts();
		//print_r($userdetails);
		$data = array(
        'title'=>'Administrator',
        'userdetails'=>$userdetails
       
      );
      $this->load->view('Default/adminheader',$data);
      $this->load->view('Default/adminsidebar',$data);
      $this->load->view('Web/dashboard',$data);
      $this->load->view('Default/adminfooter');

	}


	function deactivateAccount($id){

		$success = $this->Web_m->deactivateAccount($id);
		echo $success;
	}

}



?>