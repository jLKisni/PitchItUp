<?php

class M_auth extends CI_Model{

  function __construct(){
    parent::__construct();
  }


  function signup($data){


    $sql1 = "select * from startup_founder where username = ?";
    $query1 = $this->db->query($sql1,$data['username']);

    if($query1->num_rows()>0){
        return false;
    }
    else{

      $sql = 'insert into startup_founder (FirstName,LastName,username,password)values(?,?,?,?)';
    $query = $this->db->query($sql,array($data['firstname'],$data['lastname'],$data['username'],$data['password']));

    if($query){
      return true;
    }

    }

    
  }


  function login($data){
      $sql = "select * from startup_founder where username = ? and password = ?";
      $query = $this->db->query($sql,array($data['username'],$data['password']));
      if($query->num_rows()>0){
          $row = $query->row();
          $session = array(
            'userid'=>$row->sf_id,
            'username'=>$row->username,
            'logged_in'=>1
          );
          $this->session->set_userdata($session);

          return true;

      }
      else{
           return false;

       }

  }

  function loginSalonStaff($data){

    $sql = "select * from staff_users where userName = ? and password = ?";
    $query = $this->db->query($sql,array($data['username'],$data['password']));
    if($query->num_rows()>0){
        $row = $query->row();
        $session = array(
          'userid'=>$row->suID,
          'username'=>$row->userName,
          'salonid'=>$row->salonID
        );
        $this->session->set_userdata($session);

        return 'Login';

    }
    else{
         return 'false';

     }

  }

  function deactivate(){
    $this->db->set('user_status',0);
    $this->db->where('userid',$this->session->userdata('userid'));
    $query = $this->db->update('users');

    if($query){
      return 'True';
    }else{
      return 'False';
    }
  }

}




 ?>
