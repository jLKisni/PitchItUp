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
	}


?>