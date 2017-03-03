
<?php


	class PitchDeck extends MY_Controller{

		function __construct(){

			parent::__construct();

			$this->load->model('PitchDeck_m');
		}


		

		function addIdeaGen(){

			$ideagen = $this->input->post('data');

			$details = array(
				'problem'=>$ideagen['problem'],
				'people'=>$ideagen['people'],
				'behavior'=>$ideagen['behavior'],
				'solution'=>$ideagen['solution']
				);

			// echo json_encode($details);
			$success = $this->PitchDeck_m->addIdeaGen($details);

			if($success){
				redirect('Web/BMC');
			}
		}
		

		function addBMC(){

			$ideagen = $this->input->post('data');

			$details = array(
				'partners'=>$ideagen['partners'],
				'activities'=>$ideagen['activities'],
				'proposition'=>$ideagen['proposition'],
				'relationship'=>$ideagen['relationship'],
				'segment'=>$ideagen['segment'],
				'resources'=>$ideagen['resources'],
				'channels'=>$ideagen['channels'],
				'structure'=>$ideagen['structure'],
				'streams'=>$ideagen['streams']
				);

			
			$success = $this->PitchDeck_m->addBMC($details);

			if($success){
				redirect('Web/validationboard');
			}
		}

		function addValueProp(){

			$valueprop = $this->input->post('data');

			$details = array(
				'wants'=>$valueprop['wants'],
				'needs'=>$valueprop['needs'],
				'fears'=>$valueprop['fears'],
				'benefits'=>$valueprop['benefits'],
				'experience'=>$valueprop['experience'],
				'features'=>$valueprop['features'],
				'company'=>$valueprop['company'],
				'product'=>$valueprop['product'],
				'ideal_cust'=>$valueprop['customer'],
				'substitutes'=>$valueprop['substitutes'],
				'team_id'=>$this->session->userdata('team_id')
				);


			
			$success = $this->PitchDeck_m->addValueProp($details);
			echo $success;
			// if($success){
			// 	redirect('Web/template');
			// }
		}

		function addValidationBoard(){

			$validationboard = $this->input->post('data');

			$details = array(
					   		'customer' => $validationboard['cust_pivot1'],
							'problem' => $validationboard['cust_prob1'],
							'solution' => $validationboard['cust_solution1'],
							'risk_assumpt' => $validationboard['risk_assump1'],
							'solution_criteria' => $validationboard['criterion1'],
							'results' => $validationboard['discussion1'],
							'learnings' => $validationboard['learning1'],
					    	'customer2' => $validationboard['cust_pivot2'],
							'problem2' => $validationboard['cust_prob2'],
							'solution2' => $validationboard['cust_solution2'],
							'risk_assumpt2' => $validationboard['risk_assump2'],
							'solution_criteria2' => $validationboard['criterion2'],
							'results2' => $validationboard['discussion2'],
							'learnings2' => $validationboard['learning2'],
					    	'customer3' => $validationboard['cust_pivot3'],
							'problem3' => $validationboard['cust_prob3'],
							'solution3' => $validationboard['cust_solution3'],
							'risk_assumpt3' =>$validationboard['risk_assump3'],
							'solution_criteria3' => $validationboard['criterion3'],
							'results3' => $validationboard['discussion3'],
							'learnings3' => $validationboard['learning3']           
				);

			 //echo json_encode($details);
			$success = $this->PitchDeck_m->addValidationBoard($details);

			echo $success;
		}

	}


?>