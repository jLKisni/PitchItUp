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


		function updateBMC(){

			$bmc = $this->input->post('data');

			
			$details = array(
				'partners'=>$bmc['partners'],
				'activities'=>$bmc['activities'],
				'proposition'=>$bmc['proposition'],
				'relationship'=>$bmc['relationship'],
				'segment'=>$bmc['segment'],
				'resources'=>$bmc['resources'],
				'channels'=>$bmc['channels'],
				'structure'=>$bmc['structure'],
				'streams'=>$bmc['streams'],
				'bmc_id'=>$bmc['bmc_id']
				);

			$success = $this->updatePitchDeck_m->updateBMC($details);
			//echo json_encode($success);
			if($success){
				redirect('Web/validationboard');
			}

		}
		


	}


?>