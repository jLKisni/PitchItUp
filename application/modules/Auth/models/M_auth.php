<?php

class M_auth extends CI_Model{

  function __construct(){
    parent::__construct();
  }


  function signup($data){


    $sql1 = "select * from team where team_name = ?";
    $query1 = $this->db->query($sql1,array($data['teamname']));

    if($query1->num_rows()>0){
        return 'This Team name '.ucfirst($data['teamname']).' is already exist please create another one.';
    }
    else{

        $sql2 = "select * from members where username = ?";
        $query2 = $this->db->query($sql2,array($data['username']));

        if($query2->num_rows()>0){
          return 'Username '.$data['username'].' is already exist.'; 
        }
        else{

          $sql4 = "insert into team (team_name,status) values (?,?)";
          $query4 = $this->db->query($sql4,array($data['teamname'],0));
          $teamid = $this->db->insert_id();
          $sql = "insert into members (FirstName,LastName,role,username,password,team_id) values (?,?,?,?,?,?)";
          $query = $this->db->query($sql,array($data['firstname'],$data['lastname'],$data['role'],$data['username'],md5($data['password']),$this->db->insert_id()));

                        $teamdetails = array(
                                      array(
                                              'mem_firstname' => $data['tfirstname1'],
                                              'mem_lastname' => $data['tlastname1'],
                                              'mem_role' => $data['trole1'],
                                              'team_id'=> $teamid
                                      ),
                                      array(
                                              'mem_firstname' => $data['tfirstname2'],
                                              'mem_lastname' => $data['tlastname2'],
                                              'mem_role' => $data['trole2'],
                                              'team_id'=> $teamid
                                      ),
                                      array(
                                              'mem_firstname' => $data['tfirstname3'],
                                              'mem_lastname' => $data['tlastname3'],
                                              'mem_role' => $data['trole3'],
                                              'team_id'=> $teamid
                                      )

                                  );

                                  $query5 = $this->db->insert_batch('member_registration', $teamdetails);

                                 if($query5){
                                  return 'Successfully Registered ';
                                 }
                                 else{
                                  return 'Error in insertbatch ';
                                 }

          }
         

        }
      

    
  }


  function login($data){
      $sql = "select * from members where username = ? and password = ?";
      $query = $this->db->query($sql,array($data['username'],$data['password']));
      if($query->num_rows()>0){
          $row = $query->row();


          $session = array(
            'userid'=>$row->mem_id,
            'team_id'=>$row->team_id,
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
