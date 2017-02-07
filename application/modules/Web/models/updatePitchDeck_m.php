<?php 


	class updatePitchDeck_m extends CI_Model{

		function __construct(){

			parent::__construct();

		}


		function updateIdeaGen($data){


			$sql = "update idea_genboard set problem = ? , people = ? , behavior = ? , solution = ? where idea_id = ?";
			$query = $this->db->query($sql,array($data['problem'],$data['people'],$data['behavior'],$data['solution'],$data['idea_id']));

			if($query){
				return true;
			}
			
			
		}


		function updateBMC($data){


			$sql = "update bmc set cust_segment = ? , cust_relationship = ? , channels = ? , value_proposition = ? , key_activities = ? , key_sources = ? , key_partners = ? , cost_structures = ? , revenue_streams = ? where bmc_id = ? ";
			$query = $this->db->query($sql,array($data['segment'],$data['relationship'],$data['channels'],$data['proposition'],$data['activities'],$data['resources'],$data['partners'],$data['structure'],$data['streams'],$data['bmc_id']));

			
			if($query){
				return true;
			}

		}

	}

?>