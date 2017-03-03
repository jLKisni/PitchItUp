<?php

class Presentation extends MY_Controller{

    function __construct(){
      parent::__construct();

      // $session = array(
      //   'valuepropid'=>$this->session->tempdata('valuepropid'),
      //   'ideaid'=>$this->session->tempdata('ideaid'),
      //   'validid'=>$this->session->tempdata('validid'),
      //   'bmcid'=>$this->session->tempdata('bmcid'),
      //   'pitchdeckid'=>$this->session->tempdata('pitchdeckid')
      //   );

      // $this->session->unset_tempdata($session);
      $this->load->model('Presentation/PitchDeck_view_m');
      $this->load->model('Presentation/Web_m');
      $this->load->helper('url'); 
      
    }

    function index(){
      if($this->session->userdata('userid')){
            redirect('Web/wlcome_msg');
      } 
      $data = array(
        'title'=>'Main page'
      );
      $this->load->view('Default/main_header',$data);
      $this->load->view('Default/indexnav');
      $this->load->view('index');
      $this->load->view('Default/main_footer');
    }


    function signup(){

      $data = array(
        'title'=>'Register Account'
      );
      $this->load->view('Default/main_header',$data);
      $this->load->view('Default/main_nav');
      $this->load->view('signup');
   
    }

    function signupmember(){

      $data = array(
        'title'=>'Register Member Account'
      );
      $this->load->view('Default/main_header',$data);
      $this->load->view('Default/main_nav');
      $this->load->view('signupmember');
   
    }


    function login(){

      $data = array(
        'title'=>'Login'
      );
      $this->load->view('Default/main_header',$data);
      $this->load->view('Default/login_nav');
      $this->load->view('login');
   
    }

    function wlcome_msg(){

      $data = array(
        'title'=>'Welcome Aboard'
      );
      $this->load->view('Default/main_header',$data);
      $this->load->view('Default/login_nav');
      $this->load->view('wlcome_msg');
      $this->load->view('Default/templatefooter'); 
    }

    function Interface_m(){
        $pitchdeck = $this->PitchDeck_view_m->viewPitchDeck($this->session->userdata('team_id'));

       $data = array(
        'title'=>'Select Presentation',
        'pitchdeck'=>$pitchdeck
      );
       
   
      $this->load->view('Default/main_header',$data);
      $this->load->view('Default/create_nav');
      $this->load->view('interface',$data);
      $this->load->view('Default/templatefooter');
    }

    function create($pitchdeckid){

      
         $ideadetails = $this->PitchDeck_view_m->viewIdeaGen($pitchdeckid);

          $data = array(
          'title'=>'Create idea Generation Board',
          'ideagen'=>$ideadetails,
          'pitchdeckid'=>$pitchdeckid
          );


          $this->load->view('Default/main_header',$data);
          $this->load->view('Default/create_nav');
          $this->load->view('create');
          $this->load->view('presentationfooter');

      
    }

   

    function BMC($pitchdeckid){

      $bmcdetails = $this->PitchDeck_view_m->viewBMC($pitchdeckid);
      $ideadetails = $this->PitchDeck_view_m->viewIdeaGen($pitchdeckid);
     
        $data = array(
        'title'=>'Create Business Model Canvass',
        'bmc'=>$bmcdetails,
        'ideagen'=>$ideadetails,
        'pitchdeckid'=>$pitchdeckid
        );

        $this->load->view('Default/main_header',$data);
        $this->load->view('Default/create_nav');
        $this->load->view('BMC');
        $this->load->view('presentationfooter');

      
    }


    function validationboard($pitchdeckid){
      $ideadetails = $this->PitchDeck_view_m->viewIdeaGen($pitchdeckid);
      $validationboard = $this->PitchDeck_view_m->viewValidationBoard($pitchdeckid);
      
     
          $data = array(
            'title'=>'Create Validation Board',
            'validation'=>$validationboard,
            'ideagen'=>$ideadetails,
            'pitchdeckid'=>$pitchdeckid
          );
          $this->load->view('Default/main_header',$data);
          $this->load->view('Default/create_nav');
          $this->load->view('validationboard');
          $this->load->view('presentationfooter');  
    

    }

     function valueprop($pitchdeckid){

      $valuepropdetails = $this->PitchDeck_view_m->viewValueProp($pitchdeckid);
      $ideadetails = $this->PitchDeck_view_m->viewIdeaGen($pitchdeckid);
      $team = $this->PitchDeck_view_m->viewTeam($this->session->userdata('team_id'));
      //print_r($valuepropdetails);

         $data = array(
        'title'=>'Update Value Proposition',
        'valueprop'=>$valuepropdetails,
        'ideagen'=>$ideadetails,
        'team'=>$team,
        'pitchdeckid'=>$pitchdeckid
          );
          $this->load->view('Default/main_header',$data);
          $this->load->view('Default/create_nav');
          $this->load->view('valueprop');
          $this->load->view('presentationfooter');
     
    }

    function template($pitchdeckid){

      $data = array(
        'title'=>'Select Template',
        'pitchdeckid'=>$pitchdeckid
      );
      $this->load->view('Default/templateheader',$data);
      $this->load->view('Default/create_nav');
      $this->load->view('template');
      $this->load->view('presentationfooter');
    }

    function loading($pitchdeckid){

      $data = array(
        'title'=>'Just wait for a while !',
        'pitchdeckid'=>$pitchdeckid
      );
      $this->load->view('Default/main_header',$data);
      $this->load->view('Default/create_nav');
      $this->load->view('loading');
      $this->load->view('presentationfooter');
   
    }


    function myPresentation(){

      $pitchdeck = $this->PitchDeck_view_m->viewPitchDeck($this->session->userdata('team_id'));

       $data = array(
        'title'=>'Select Template',
        'pitchdeck'=>$pitchdeck
      );

      $this->load->view('Default/main_header',$data);
      $this->load->view('Default/create_nav');
      $this->load->view('myPresentation',$data);
      $this->load->view('Default/templatefooter');
    }


    function history(){
       $data = array(
        'title'=>'My History'
      );
      $this->load->view('Default/main_header',$data);
      $this->load->view('Default/create_nav');
      $this->load->view('history');
      $this->load->view('Default/templatefooter');
    }


    function documents(){
       $data = array(
        'title'=>'My Documents'
      );
      $this->load->view('Default/main_header',$data);
      $this->load->view('Default/create_nav');
      $this->load->view('documents');
      $this->load->view('Default/templatefooter');
    }


    function AccountSettings(){
      
       $userdetails = $this->Web_m->getAccount($this->session->userdata('userid'));
        $data = array(
        'title'=>'My Accounts',
        'userdetails'=>$userdetails
      );

      $this->load->view('Default/main_header',$data);
      $this->load->view('Default/create_nav');
      $this->load->view('account');
      $this->load->view('Default/templatefooter');
    }



    function pitchdeck($pitchdeckid){
           $success = $this->Web_m->addHistory($pitchdeckid);
           header("Location: http://localhost/PitchItUp/powerpoint/Tests/mypresentation.php?id=".$pitchdeckid);
           exit;

    }

    function Download(){
          $ideadetails = $this->PitchDeck_view_m->viewIdeaGen($this->session->userdata('team_id'));
            $word1 = $ideadetails->solution;$arr1 = explode(' -',trim($word1)); if((sizeof($arr1)-1)>=0){ $solution = ucfirst($arr1[0]); }

            $this->load->helper('download');
            $name = $solution.".pptx";

            
           $data = file_get_contents(base_url().'powerpoint/Tests/'.$name);
        
          //use this function to force the session/browser to download the created file
          force_download($name, $data);
      
    }

    function DownloadProduct(){
          $ideadetails = $this->PitchDeck_view_m->viewIdeaGen($this->session->userdata('team_id'));
            $word1 = $ideadetails->solution;$arr1 = explode(' -',trim($word1)); if((sizeof($arr1)-1)>=0){ $solution = ucfirst($arr1[0]); }

            $this->load->helper('download');
            $name = $solution."product.pptx";

            
           $data = file_get_contents(base_url().'powerpoint/Tests/'.$name);
        
          //use this function to force the session/browser to download the created file
          force_download($name, $data);
      
    }





}

?>
