<?php


	class Pitchdeck_view_m extends CI_Model{

		function __construct(){
			parent::__construct();
		}


		function viewIdeaGen(){

			$sql = 'select * from idea_genboard where idea_id = ?';
			$query = $this->db->query($sql,array($this->session->tempdata('ideaid')));

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
			$sql = 'select * from bmc where team_id = ?';
			$query = $this->db->query($sql,array($team_id));

			if($query->num_rows()>0){

				$row = $query->row();
				return $row;
			}
			else{
				return false;
			}
		}



		function viewValidationBoard(){
			$sql = 'select * from validation_board where valid_id = ?';
			$pivot = $this->db->query($sql,array($this->session->tempdata('valid_id')));

			if($pivot->num_rows()>0){
				$row = $pivot->row();

				return $row;
			}

		}


		function viewValueProp($team_id){


			$sql = "select * from value_prop where team_id = ? ";
			$query = $this->db->query($sql,array($team_id));

			if($query->num_rows()>0)
			{
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
		   $query = $this->db->get();
		  if($query->num_rows()>0){

		      $row = $query->result_array();

		      return $row;
		  }

			
		}



	}


?>