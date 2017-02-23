<?php


	class PitchDeck_m extends CI_Model{

		function __construct(){
			parent::__construct();
		}


		function addIdeaGen($data){


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

		function addBMC($data){

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


		function addValidationBoard($data){


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

		function addValueProp($data){
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






?>