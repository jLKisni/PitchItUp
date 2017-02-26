<?php 


	class updatePitchDeck_m extends CI_Model{

		function __construct(){

			parent::__construct();

		}


		function updateIdeaGen($data){


			$sql = "update idea_genboard set problem = ? , people = ? , behavior = ? , solution = ? where idea_id = ?";
			$query = $this->db->query($sql,array($data['problem'],$data['people'],$data['behavior'],$data['solution'],$data['idea_id']));

			if($query){


				 $session = array(
            		'ideaid'=>$data['idea_id']
          		);
				 
          		$this->session->set_tempdata($session);
				return true;
			}
			
			
		}


		function updateBMC($data){


			$sql = "update bmc set cust_segment = ? , cust_relationship = ? , channels = ? , value_proposition = ? , key_activities = ? , key_sources = ? , key_partners = ? , cost_structures = ? , revenue_streams = ? where bmc_id = ? ";
			$query = $this->db->query($sql,array($data['segment'],$data['relationship'],$data['channels'],$data['proposition'],$data['activities'],$data['resources'],$data['partners'],$data['structure'],$data['streams'],$data['bmc_id']));

			
			if($query){
				 $session = array(
            		'bmcid'=>$data['bmc_id']
          		);
				 
          		$this->session->set_tempdata($session);

				return true;
			}

		}


		function updateValueProp($data){

			$sql = "update value_prop set wants = ? , needs = ? , fears = ? , benefits = ? , experience = ? , features = ? , company = ? , product = ? , ideal_cust = ? , substitutes = ? where valueprop_id = ? ";
			$query = $this->db->query($sql,array($data['wants'],$data['needs'],$data['fears'],$data['benefits'],$data['experience'],$data['features'],$data['company'],$data['product'],$data['ideal_cust'],$data['substitutes'],$data['valueprop_id']));

			if($query){

				 $session = array(
            		'valuepropid'=>$data['valueprop_id']
          		);
				 
          		$this->session->set_tempdata($session);
				return true;
			}
		}


		function updateValidationBoard($data){

			$sql = "update validation_board set customer = ? , problem = ? , solution = ? , risk_assumpt = ? , solution_criteria = ? , results = ? , learnings = ? , customer2 = ? , problem2 = ? , solution2 = ? , risk_assumpt2 = ? , solution_criteria2 = ? , results2 = ? , learnings2 = ? , customer3 = ? , problem3 = ? , solution3 = ? , risk_assumpt3 = ? , solution_criteria3 = ? , results3 = ? , learnings3 = ? where valid_id = ?";
			$query = $this->db->query($sql,array($data['customer'],$data['problem'],$data['solution'],$data['risk_assumpt'],$data['solution_criteria'],$data['results'],$data['learnings'],$data['customer2'],$data['problem2'],$data['solution2'],$data['risk_assumpt2'],$data['solution_criteria2'],$data['results2'],$data['learnings2'],$data['customer3'],$data['problem3'],$data['solution3'],$data['risk_assumpt3'],$data['solution_criteria3'],$data['results3'],$data['learnings3'],$data['valid_id']));

			if($query){

				 $session = array(
            		'validid'=>$data['valid_id']
          		);
				 
          		$this->session->set_tempdata($session);
				return true;
			}
		}	



	}

?>