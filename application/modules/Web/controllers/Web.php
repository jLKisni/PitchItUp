<?php

class Web extends MY_Controller{

    function __construct(){
      parent::__construct();

      $this->load->model('Web/PitchDeck_view_m');
      $this->load->model('Web/Web_m');
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
        // print_r($pitchdeck);  
       $data = array(
        'title'=>'Select Presentation',
        'pitchdeck'=>$pitchdeck
      );
       
   
      $this->load->view('Default/main_header',$data);
      $this->load->view('Default/create_nav');
      $this->load->view('interface',$data);
      $this->load->view('Default/templatefooter');
    }

    function create(){

       $ideadetails = $this->PitchDeck_view_m->viewIdeaGen($this->session->userdata('team_id'));

      if($ideadetails!=false){
        $data = array(
        'title'=>'Create idea Generation Board',
        'ideagen'=>$ideadetails
        );


        $this->load->view('Default/main_header',$data);
        $this->load->view('Default/create_nav');
        $this->load->view('create');
        $this->load->view('Default/templatefooter');

      }
      else{
        $data2 = array(
        'title'=>'Create idea Generation Board'
        );
        $this->load->view('Default/main_header',$data2);
        $this->load->view('Default/create_nav');
        $this->load->view('create');
        $this->load->view('Default/templatefooter');
        
      }
      
    }

    function BMC(){
      $bmcdetails = $this->PitchDeck_view_m->viewBMC($this->session->userdata('team_id'));
      $ideadetails = $this->PitchDeck_view_m->viewIdeaGen($this->session->userdata('team_id'));
      

      if($bmcdetails!=false){

        $data = array(
        'title'=>'Create Business Model Canvass',
        'bmc'=>$bmcdetails,
        'ideagen'=>$ideadetails
        );

        $this->load->view('Default/main_header',$data);
        $this->load->view('Default/create_nav');
        $this->load->view('BMC');
        $this->load->view('Default/templatefooter');

      }
      else{

        $data2 = array(
        'title'=>'Create Business Model Canvass',
        'ideagen'=>$ideadetails
        );

        $this->load->view('Default/main_header',$data2);
        $this->load->view('Default/create_nav');
        $this->load->view('BMC');
        $this->load->view('Default/templatefooter');
      }
      
      
      
    }


    function validationboard(){
      $ideadetails = $this->PitchDeck_view_m->viewIdeaGen($this->session->userdata('team_id'));
      $validationboard = $this->PitchDeck_view_m->viewValidationBoard($this->session->userdata('team_id'));
      
      if($validationboard!=false){
          $data = array(
            'title'=>'Create Validation Board',
            'validation'=>$validationboard,
            'ideagen'=>$ideadetails
          );
          $this->load->view('Default/main_header',$data);
          $this->load->view('Default/create_nav');
          $this->load->view('validationboard');
          $this->load->view('Default/templatefooter');  
      }
      else{
         $data = array(
            'title'=>'Create Validation Board',
            'ideagen'=>$ideadetails
          );
          $this->load->view('Default/main_header',$data);
          $this->load->view('Default/create_nav');
          $this->load->view('validationboard');
          $this->load->view('Default/templatefooter');  
      }

    }

     function valueprop(){
      $valuepropdetails = $this->PitchDeck_view_m->viewValueProp($this->session->userdata('team_id'));
      $ideadetails = $this->PitchDeck_view_m->viewIdeaGen($this->session->userdata('team_id'));
      $team = $this->PitchDeck_view_m->viewTeam($this->session->userdata('team_id'));
      //print_r($valuepropdetails);


      if($valuepropdetails != false){

         $data = array(
        'title'=>'Update Value Proposition',
        'valueprop'=>$valuepropdetails,
        'ideagen'=>$ideadetails,
        'team'=>$team
          );
          $this->load->view('Default/main_header',$data);
          $this->load->view('Default/create_nav');
          $this->load->view('valueprop');
          $this->load->view('Default/templatefooter');

      }else{

         $data2 = array(
        'title'=>'Create Value Proposition',
        'ideagen'=>$ideadetails,
        'team'=>$team
          );

          $this->load->view('Default/main_header',$data2);
          $this->load->view('Default/create_nav');
          $this->load->view('valueprop');
          $this->load->view('Default/templatefooter');


      }
     
    }

    function template(){

      $data = array(
        'title'=>'Select Template'
      );
      $this->load->view('Default/templateheader',$data);
      $this->load->view('Default/create_nav');
      $this->load->view('template');
      $this->load->view('Default/templatefooter');
    }

    function templatepresentation($pitchdeck){

      $data = array(
        'title'=>'Select Template',
        'pitchdeckid'=>$pitchdeck
      );
      $this->load->view('Default/templateheader',$data);
      $this->load->view('Default/create_nav');
      $this->load->view('templatepresentation');
      $this->load->view('Default/downloadfooter');
    }

    function loading(){

      $data = array(
        'title'=>'Just wait for a while !',
      );
      $this->load->view('Default/main_header',$data);
      $this->load->view('Default/create_nav');
      $this->load->view('loading');
      $this->load->view('Default/templatefooter');
   
    }

    // function howto(){

    //    $data = array(
    //     'title'=>'How To !',
    //   );
    //   $this->load->view('Default/main_header',$data);
    //   $this->load->view('Default/create_nav');
    //   $this->load->view('howto');
    //   $this->load->view('Default/templatefooter');
   
    // }


    function myPresentation(){

      $pitchdeck = $this->PitchDeck_view_m->viewPitchDeck($this->session->userdata('team_id'));
        // print_r($pitchdeck);  
       $data = array(
        'title'=>'Select Presentation',
        'pitchdeck'=>$pitchdeck
      );

      $this->load->view('Default/main_header',$data);
      $this->load->view('Default/create_nav');
      $this->load->view('myPresentation',$data);
      $this->load->view('downloadfooter');
    }


    function history(){
      $historydetails = $this->PitchDeck_view_m->viewHistory($this->session->userdata('team_id'));

      //print_r($historydetails);
       $data = array(
        'title'=>'My History',
        'historydetails'=>$historydetails
      );
      $this->load->view('Default/main_header',$data);
      $this->load->view('Default/create_nav');
      $this->load->view('history',$data);
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



    function pitchdeck(){

        $success = $this->Web_m->addPitchdeck();

        if($success){
           header("Location: http://localhost/PitchItUp/powerpoint/Tests/02presentation.php?id=".$this->session->userdata['pitchdeckid']);
           exit;
        }

       
         //  //load the download helper
         //  $this->load->helper('download');
         //  //set the textfile's content 
         // $data = file_get_contents(base_url('02presentation.pptx'));
         //  //set the textfile's name
         //  $name = 'samplesir.pptx';
         //  //use this function to force the session/browser to download the created file
         //  force_download($name, $data);
      
        //$this->load->view('pitchdeck');

    }

    function Download(){

        // echo $this->session->userdata('idea_id');
            $ideadetails = $this->PitchDeck_view_m->viewIdeaGenTemp($this->session->userdata('idea_id'));

            $word1 = $ideadetails->solution;$arr1 = explode(' -',trim($word1)); if((sizeof($arr1)-1)>=0){ $solution = ucfirst($arr1[0]); }

            $this->load->helper('download');
            $name = $solution.".pptx";

            echo $name;
           $data = file_get_contents(base_url().'powerpoint/Tests/'.$name);
        
          //use this function to force the session/browser to download the created file
          force_download($name, $data);
      
    }

    function DownloadProduct(){
            $ideadetails = $this->PitchDeck_view_m->viewIdeaGenTemp($this->session->userdata('idea_id'));
            $word1 = $ideadetails->solution;$arr1 = explode(' -',trim($word1)); if((sizeof($arr1)-1)>=0){ $solution = ucfirst($arr1[0]); }

            $this->load->helper('download');
            $name = $solution."product.pptx";

            
           $data = file_get_contents(base_url().'powerpoint/Tests/'.$name);
        
          //use this function to force the session/browser to download the created file
          force_download($name, $data);
      
    }


     function Download1($pitchdeckid){
            $ideadetails = $this->PitchDeck_view_m->viewIdeaGenTemplate($pitchdeckid);
            $word1 = $ideadetails->solution;$arr1 = explode(' -',trim($word1)); if((sizeof($arr1)-1)>=0){ $solution = ucfirst($arr1[0]); }

            $this->load->helper('download');
            $name = $solution.".pptx";

            
           $data = file_get_contents(base_url().'powerpoint/Tests/'.$name);
        
          //use this function to force the session/browser to download the created file
          force_download($name, $data);
      
    }

    function DownloadProduct1($pitchdeckid){
          $ideadetails = $this->PitchDeck_view_m->viewIdeaGenTemplate($pitchdeckid);
            $word1 = $ideadetails->solution;$arr1 = explode(' -',trim($word1)); if((sizeof($arr1)-1)>=0){ $solution = ucfirst($arr1[0]); }

            $this->load->helper('download');
            $name = $solution."product.pptx"; 

            
           $data = file_get_contents(base_url().'powerpoint/Tests/'.$name);
        
          //use this function to force the session/browser to download the created file
          force_download($name, $data);
      
    }

    function deleteDocument($pitchdeckid){

      $success = $this->Web_m->deleteDocument($pitchdeckid);

      if($success){
        echo $success;
      }


    }





}

?>
