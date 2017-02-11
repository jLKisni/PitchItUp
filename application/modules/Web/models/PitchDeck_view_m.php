<?php


	class Pitchdeck_view_m extends CI_Model{

		function __construct(){
			parent::__construct();
		}


		function viewIdeaGen($userid){

			$sql = 'select * from idea_genboard where sf_id = ?';
			$query = $this->db->query($sql,array($userid));

			if($query->num_rows()>0){
				$row = $query->row();
				return $row;
			}
			else{
				return false;
			}
		}


		function viewBMC($userid){
			$sql = 'select * from bmc where sf_id = ?';
			$query = $this->db->query($sql,array($userid));

			if($query->num_rows()>0){

				$row = $query->row();
				return $row;
			}
			else{
				return false;
			}
		}



		function viewValidationBoard($userid){
			$sql = 'select * from validation_board where sf_id = ?';
			$pivot = $this->db->query($sql,array($userid));

			if($pivot->num_rows()>0){
				$row = $pivot->row();

				return $row;
			}

		}


		function viewValueProp($userid){


			$sql = "select * from value_prop where sf_id = ? ";
			$query = $this->db->query($sql,array($userid));

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