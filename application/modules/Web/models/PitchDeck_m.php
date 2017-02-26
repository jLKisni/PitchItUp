<?php


	class PitchDeck_m extends CI_Model{

		function __construct(){
			parent::__construct();
		}


		function addIdeaGen($data){
			$sql1 = "select * from idea_genboard where problem = ? and people = ? and behavior = ? and solution = ? and team_id = ?";
			$query1 = $this->db->query($sql1,array($data['problem'],$data['people'],$data['behavior'],$data['solution'],$this->session->userdata('team_id')));
			
			if($query1->num_rows()>0){
				$sql2 = "update idea_genboard set problem = ? , people = ? , behavior = ? , solution = ? where idea_id = ?";
				$query2 = $this->db->query($sql2,array($data['problem'],$data['people'],$data['behavior'],$data['solution'],$this->session->tempdata('ideaid')));

				
			}
			else{

				 $session = array(
	            		'ideaid'=>$data['idea_id']
	          		);
					 
	          		$this->session->set_tempdata($session);
				$sql = "insert into idea_genboard (problem,people,behavior,solution,team_id)values(?,?,?,?,?)";
				$query = $this->db->query($sql,array($data['problem'],$data['people'],$data['behavior'],$data['solution'],$this->session->userdata('team_id')));

				if($query){


					 $session = array(
	            		'ideaid'=>$this->db->insert_id()
	          		);

	          		$this->session->set_tempdata($session);
					return true;
				}
			}
			
			
			
		}

		function addBMC($data){

			$sql1 = "select * from bmc where cust_segment = ? and cust_relationship = ? and channels = ? and value_proposition = ? and key_activities = ? and key_sources = ? and key_partners = ? and cost_structures = ? and revenue_streams = ? and bmc_id = ?";
			$query1 = $this->db->query($sql1,array($data['segment'],$data['relationship'],$data['channels'],$data['proposition'],$data['activities'],$data['resources'],$data['partners'],$data['structure'],$data['streams'],$this->session->tempdata('bmcid')));
			if($query1->num_rows()>0){
				$sql2 = "update bmc set cust_segment = ? , cust_relationship = ? , channels = ? , value_proposition = ? , key_activities = ? , key_sources = ? , key_partners = ? , cost_structures = ? , revenue_streams = ? where bmc_id = ? ";
				$query2 = $this->db->query($sql2,array($data['segment'],$data['relationship'],$data['channels'],$data['proposition'],$data['activities'],$data['resources'],$data['partners'],$data['structure'],$data['streams'],$this->session->tempdata('bmcid')));

			
			

			}
			else{
				$sql = "insert into bmc (cust_segment,cust_relationship,channels,value_proposition,key_activities,key_sources,key_partners,cost_structures,revenue_streams,team_id)values(?,?,?,?,?,?,?,?,?,?)";
				$query = $this->db->query($sql,array($data['segment'],$data['relationship'],$data['channels'],$data['proposition'],$data['activities'],$data['resources'],$data['partners'],$data['structure'],$data['streams'],$this->session->userdata('team_id')));

				if($query){
					 $session = array(
	            		'bmcid'=>$this->db->insert_id()
	          		);
					 
	          		$this->session->set_tempdata($session);

					return true;
				}


			}
			
		}


		function addValidationBoard($data){
			$sql1 = "select * from validation_board where customer = ? and problem = ? and solution = ? and risk_assumpt = ? and solution_criteria = ? and results = ? and learnings = ? and customer2 = ? and problem2 = ? and solution2 = ? and risk_assumpt2 = ? and solution_criteria2 = ? and results2 = ? and learnings2 = ? and customer3 = ? and problem3 = ? and solution3 = ? and risk_assumpt3 = ? and solution_criteria3 = ? and results3 = ? and learnings3 = ? and team_id = ?";
			$query1 = $this->db->query($sql1,array($data['customer'],$data['problem'],$data['solution'],$data['risk_assumpt'],$data['solution_criteria'],$data['results'],$data['learnings'],$data['customer2'],$data['problem2'],$data['solution2'],$data['risk_assumpt2'],$data['solution_criteria2'],$data['results2'],$data['learnings2'],$data['customer3'],$data['problem3'],$data['solution3'],$data['risk_assumpt3'],$data['solution_criteria3'],$data['results3'],$data['learnings3'],$this->session->userdata('team_id')));
			if($query1->num_rows()>0){

				$sql2 = "update validation_board set customer = ? , problem = ? , solution = ? , risk_assumpt = ? , solution_criteria = ? , results = ? , learnings = ? , customer2 = ? , problem2 = ? , solution2 = ? , risk_assumpt2 = ? , solution_criteria2 = ? , results2 = ? , learnings2 = ? , customer3 = ? , problem3 = ? , solution3 = ? , risk_assumpt3 = ? , solution_criteria3 = ? , results3 = ? , learnings3 = ? where valid_id = ?";
				$query2 = $this->db->query($sql2,array($data['customer'],$data['problem'],$data['solution'],$data['risk_assumpt'],$data['solution_criteria'],$data['results'],$data['learnings'],$data['customer2'],$data['problem2'],$data['solution2'],$data['risk_assumpt2'],$data['solution_criteria2'],$data['results2'],$data['learnings2'],$data['customer3'],$data['problem3'],$data['solution3'],$data['risk_assumpt3'],$data['solution_criteria3'],$data['results3'],$data['learnings3'],$this->session->tempdata('validid')));

				
			}
			else{
				$sql = "insert into validation_board (customer,problem,solution,risk_assumpt,solution_criteria,results,learnings,customer2,problem2,solution2,risk_assumpt2,solution_criteria2,results2,learnings2,customer3,problem3,solution3,risk_assumpt3,solution_criteria3,results3,learnings3,team_id) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
				$query = $this->db->query($sql,array($data['customer'],$data['problem'],$data['solution'],$data['risk_assumpt'],$data['solution_criteria'],$data['results'],$data['learnings'],$data['customer2'],$data['problem2'],$data['solution2'],$data['risk_assumpt2'],$data['solution_criteria2'],$data['results2'],$data['learnings2'],$data['customer3'],$data['problem3'],$data['solution3'],$data['risk_assumpt3'],$data['solution_criteria3'],$data['results3'],$data['learnings3'],$this->session->userdata('team_id')));

				if($query){


					 $session = array(
	            		'validid'=>$this->db->insert_id()
	          		);
					 
	          		$this->session->set_tempdata($session);
					return true;
				}
			}
			
		}

		function addValueProp($data){

			$sql1 = "select * from value_prop where  wants = ? and needs = ? and fears = ? and benefits = ? and experience = ? and features = ? and company = ? and product = ? and ideal_cust = ? and substitutes = ? and team_id = ? ";
			$query1 = $this->db->query($sql1,array($data['wants'],$data['needs'],$data['fears'],$data['benefits'],$data['experience'],$data['features'],$data['company'],$data['product'],$data['ideal_cust'],$data['substitutes'],$this->session->userdata('team_id')));
			if($query1->num_rows()>0){


				$sql2 = "update value_prop set wants = ? , needs = ? , fears = ? , benefits = ? , experience = ? , features = ? , company = ? , product = ? , ideal_cust = ? , substitutes = ? where valueprop_id = ? ";
				$query2 = $this->db->query($sql2,array($data['wants'],$data['needs'],$data['fears'],$data['benefits'],$data['experience'],$data['features'],$data['company'],$data['product'],$data['ideal_cust'],$data['substitutes'],$data['valueprop_id']));

				
			}
			else{

					$query = $this->db->insert('value_prop',$data);

					if($query){

						$session = array(
		            		'valuepropid'=>$this->db->insert_id()
		          		);
						 
		          		$this->session->set_tempdata($session);
						return true;
					}
			}
			
		}

	}






?>