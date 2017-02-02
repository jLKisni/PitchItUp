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

	}

?>