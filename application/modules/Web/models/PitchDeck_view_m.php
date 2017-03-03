<?php


	class Pitchdeck_view_m extends CI_Model{

		function __construct(){
			parent::__construct();
		}



		function viewHistory($team_id){

		
		   $this->db->select('*');
		   $this->db->from('history');
		   $this->db->join('gen_pitchdeck','gen_pitchdeck.pitchdeck_id = history.pitchdeck_id');
		   $this->db->join('idea_genboard','idea_genboard.idea_id = gen_pitchdeck.idea_id');
		   $this->db->join('members','members.mem_id = history.hist_memid');
		   $this->db->where('gen_pitchdeck.team_id',$team_id);
		   $query = $this->db->get();
		  if($query->num_rows()>0){

		      $row = $query->result_array();

		      return $row;
		  }

		}


		function viewIdeaGenTemp($idea_id){

			$this->db->select('*');
			$this->db->from('idea_genboard');
			$this->db->where('idea_id',$idea_id);
			$query = $this->db->get();

			if($query->num_rows()>0){

		      $row = $query->row();

		      return $row;
			}

		}
		function viewIdeaGenTemplate($pitchdeckid){

			$this->db->select('*');
			$this->db->from('gen_pitchdeck');
			$this->db->join('idea_genboard','idea_genboard.idea_id = gen_pitchdeck.idea_id');
			$this->db->where('gen_pitchdeck.pitchdeck_id',$pitchdeckid);
			$query = $this->db->get();
			
			  if($query->num_rows()>0){

			      $row = $query->row();

			      return $row;
			  }


		}

		function viewIdeaGen($team_id){


			$this->db->select('*');
			$this->db->from('ungen_pitchdeck');
			$this->db->join('idea_genboard','idea_genboard.idea_id = ungen_pitchdeck.idea_id');
			$this->db->where('ungen_pitchdeck.team_id',$team_id);
			$query = $this->db->get();
			if($query->num_rows()>0){

			      $row = $query->row();

			      return $row;
			}
			else{
				return false;
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


		function viewBMC($team_id){

			$this->db->select('*');
			$this->db->from('ungen_pitchdeck');
			$this->db->join('bmc','bmc.bmc_id = ungen_pitchdeck.bmc_id');
			$this->db->where('ungen_pitchdeck.team_id',$team_id);
			$query = $this->db->get();
			if($query->num_rows()>0){

			      $row = $query->row();

			      return $row;
			}
			else{
				return false;
			}


			// $sql = 'select * from bmc where team_id = ?';
			// $query = $this->db->query($sql,array($team_id));

			// if($query->num_rows()>0){

			// 	$row = $query->row();
			// 	return $row;
			// }
			// else{
			// 	return false;
			// }
		}



		function viewValidationBoard($team_id){
			$this->db->select('*');
			$this->db->from('ungen_pitchdeck');
			$this->db->join('validation_board','validation_board.valid_id = ungen_pitchdeck.valid_id');
			$this->db->where('ungen_pitchdeck.team_id',$team_id);
			$query = $this->db->get();
			if($query->num_rows()>0){

			      $row = $query->row();

			      return $row;
			}
			else{
				return false;
			}

		}


		function viewValueProp($team_id){


			$this->db->select('*');
			$this->db->from('ungen_pitchdeck');
			$this->db->join('value_prop','value_prop.valueprop_id = ungen_pitchdeck.valueprop_id');
			$this->db->where('ungen_pitchdeck.team_id',$team_id);
			$query = $this->db->get();
			if($query->num_rows()>0){

			      $row = $query->row();

			      return $row;
			}
			else{
				return false;
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