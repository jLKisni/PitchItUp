<?php


	class Pitchdeck_view_m extends CI_Model{

		function __construct(){
			parent::__construct();
		}


		function viewIdeaGen($team_id){

			$sql = 'select * from idea_genboard where team_id = ?';
			$query = $this->db->query($sql,array($team_id));

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



		function viewValidationBoard($team_id){
			$sql = 'select * from validation_board where team_id = ?';
			$pivot = $this->db->query($sql,array($team_id));

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


	}


?>