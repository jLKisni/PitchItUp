<?php


	class Pitchdeck_view_m extends CI_Model{

		function __construct(){
			parent::__construct();
		}


		function viewIdeaGen($pitchdeck_id){


			$sql1 = "select * from gen_pitchdeck where pitchdeck_id = ? ";
			$query1 = $this->db->query($sql1,array($pitchdeck_id));

			if($query1->num_rows()>0){

				$ideaid =$query1->row(); 
				$sql = 'select * from idea_genboard where idea_id = ?';
				$query = $this->db->query($sql,array($ideaid->idea_id));

				if($query->num_rows()>0){
					$row = $query->row();
					return $row;
				}
				else{
					return false;
				}
			}


			
		}

		function viewTeam($team_id){
			$sql = 'select * from team where team_id = ?';
			$query = $this->db->query($sql,array($team_id));

			if($query->num_rows()>0){

				$row = $query->row();
				return $row;
			}
			else{
				return false;
			}
		}


		function viewBMC($pitchdeck_id){

			$sql1 = "select * from gen_pitchdeck where pitchdeck_id = ? ";
			$query1 = $this->db->query($sql1,array($pitchdeck_id));

			if($query1->num_rows()>0){

					$bmcid =$query1->row(); 
					$sql = 'select * from bmc where bmc_id = ?';
					$query = $this->db->query($sql,array($bmcid->bmc_id));

					if($query->num_rows()>0){

						$row = $query->row();
						return $row;
					}
					else{
						return false;
					}

			}
		}



		function viewValidationBoard($pitchdeck_id){

			$sql1 = "select * from gen_pitchdeck where pitchdeck_id = ? ";
			$query1 = $this->db->query($sql1,array($pitchdeck_id));

			if($query1->num_rows()>0){

					$validid =$query1->row(); 
					$sql = 'select * from validation_board where valid_id = ?';
					$pivot = $this->db->query($sql,array($validid->valid_id));

					if($pivot->num_rows()>0){
						$row = $pivot->row();

						return $row;
					}

			}

		}


		function viewValueProp($pitchdeck_id){
			$sql1 = "select * from gen_pitchdeck where pitchdeck_id = ? ";
			$query1 = $this->db->query($sql1,array($pitchdeck_id));

			if($query1->num_rows()>0){

					$valuepropid =$query1->row(); 

					$sql = "select * from value_prop where valueprop_id = ? ";
					$query = $this->db->query($sql,array($valuepropid->valueprop_id));

					if($query->num_rows()>0)
					{
						$row = $query->row();
		 
						return $row;
					}
					else{
						return false;
					}


			}
		}


		function viewPitchDeck($team_id){


		   $this->db->select('*');
		   $this->db->from('gen_pitchdeck');
		   $this->db->join('idea_genboard','idea_genboard.idea_id = gen_pitchdeck.idea_id');
		   $this->db->where('gen_pitchdeck.team_id',$team_id);
		   $query = $this->db->get();
		  if($query->num_rows()>0){

		      $row = $query->result_array();

		      return $row;
		  }

			
		}



	}


?>