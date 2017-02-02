<?php


	class PitchDeck_m extends CI_Model{

		function __construct(){
			parent::__construct();
		}


		function addIdeaGen($data){


			$sql = "insert into idea_genboard (problem,people,behavior,solution,sf_id)values(?,?,?,?,?)";
			$query = $this->db->query($sql,array($data['problem'],$data['people'],$data['behavior'],$data['solution'],$this->session->userdata('userid')));

			if($query){
				return true;
			}
			
			
		}

		function addBMC($data){

			$sql = "insert into bmc (cust_segment,cust_relationship,channels,value_proposition,key_activities,key_sources,key_partners,cost_structures,revenue_streams,sf_id)values(?,?,?,?,?,?,?,?,?,?)";
			$query = $this->db->query($sql,array($data['segment'],$data['relationship'],$data['channels'],$data['proposition'],$data['activities'],$data['resources'],$data['partners'],$data['structure'],$data['streams'],$this->session->userdata('userid')));

			if($query){
				return true;
			}
		}


		function addValidationBoard($data){

			$query = $this->db->insert_batch('validation_board',$data);

			if($query){
				return true;
			}
		}

		function addValueProp($data){
			$query = $this->db->insert('value_prop',$data);

			if($query){
				return true;
			}
		}

	}






?>