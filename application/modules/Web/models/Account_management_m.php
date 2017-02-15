<?php

	class Account_management_m extends CI_Model{

		function __construct(){
			parent::__construct();
		}


		function updateAccount($data){

			$this->db->set('FirstName',$data['firstname']);
			$this->db->set('LastName',$data['lastname']);
			$this->db->set('username',$data['username']);
			$this->db->set('password',$data['password']);
		    $this->db->where('mem_id',$this->session->userdata('userid'));
		    $query = $this->db->update('members');


		    if($query){
		      $this->db->set('team_name',$data['teamname']);
		      $this->db->where('team_id',$this->session->userdata('team_id'));
		      $query1 = $this->db->update('team');

		      if($query1){
		      	return true;
		      }
		      else{
		      	return false;
		      }

		    }else{
		      return false;
		    }
		}

	}
?>