<?php

	class updatePitchDeck extends MY_Controller{

		function __construct(){
			parent::__construct();
		
			$this->load->model('updatePitchDeck_m');
		}




		function updateIdeaGen(){

			$ideagen = $this->input->post('data');

			$details = array(
				'problem'=>$ideagen['problem'],
				'people'=>$ideagen['people'],
				'behavior'=>$ideagen['behavior'],
				'solution'=>$ideagen['solution'],
				'idea_id'=>$ideagen['idea_id']
				);

			//echo json_encode($details);
			$success = $this->updatePitchDeck_m->updateIdeaGen($details);

			if($success){
				redirect('Web/BMC');
			}
		}
		


	}


?>