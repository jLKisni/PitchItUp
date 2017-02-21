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
          $sql = "insert into members (FirstName,LastName,role,username,password,team_id,timestamp) values (?,?,?,?,?,?,?)";
          $query = $this->db->query($sql,array($data['firstname'],$data['lastname'],$data['role'],$data['username'],md5($data['password']),$this->db->insert_id(),date('Y-m-d h:i:s')));

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
                                  return 'Successfully Registered';
                                 }
                                 else{
                                  return 'Error in insertbatch ';
                                 }

          }
         

        }
      

    
  }


  function login($data){
      $sql = "select * from members where username = ? and password = ? and member_status = ?";
      $query = $this->db->query($sql,array($data['username'],$data['password'],0));
      if($query->num_rows()>0){
          $row = $query->row();

          if($row->role == 'Admin'){
            $session = array(
            'userid'=>$row->mem_id,
            'logged_in'=>1
          );
          $this->session->set_userdata($session);
            return 'Admin';

          }
          else{
             $session = array(
            'userid'=>$row->mem_id,
            'team_id'=>$row->team_id,
            'username'=>$row->username,
            'logged_in'=>1
          );
          $this->session->set_userdata($session);

          $sql1 = "update members set timestamp = ? where mem_id = ? ";
          $query1 = $this->db->query($sql1,array(date('Y-m-d h:i:s'),$row->mem_id));

          return 'Users';
          }

         

      }
      else{
           return false;

       }

  }

  
  function signupmember($members){

      $sql = "select * from team where team_name = ? and status = ?";
      $query = $this->db->query($sql,array($members['teamname'],0));
      

      if($query->num_rows()>0){

          $row = $query->row(); 

              
              $sql1 = "select * from member_registration where team_id = ? and mem_firstname = ? and mem_lastname = ? and mem_status = ?";
              $query1 = $this->db->query($sql1,array($row->team_id,$members['firstname'],$members['lastname'],0));
              

              if($query1->num_rows()>0){
                  
                $mem_id = $query1->row();

                $sql5 = "select * from members where username = ?";
                $query5 = $this->db->query($sql5,array($members['username']));

                if($query5->num_rows()>0){
                  return 'Username exist. Please try again another one.';
              

                }else{
                  
                $sql4 = "update member_registration set mem_status = ? where memreg_id = ?";
                $query4 = $this->db->query($sql4,array(1,$mem_id->memreg_id));

                    $sql2 = "insert into members (FirstName,LastName,role,username,password,team_id,timestamp) values (?,?,?,?,?,?,?)";
                    $query2 = $this->db->query($sql2,array($members['firstname'],$members['lastname'],$members['role'],$members['username'],md5($members['password']),$row->team_id,date('Y-m-d h:i:s')));

                    if($query2){
                      return 'Member Successfully Registered!';
                    }
                    else{
                      return 'Error Registering . Contact pinakagwapo nga developer';
                    }
                }

              }
              else
              {
                return 'Your name has no permission to join on this team or Member is already registered';
              }

        

      }
      else{
        return false;
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


  function getRole($teamname){

    $sql = "select * from team where team_name = ? and status = ?";
    $query = $this->db->query($sql,array($teamname,0));

    if($query->num_rows()>0){

        $row = $query->row();

        $sql1 = "select * from members where team_id = ? and role = ? ";
        $query1 = $this->db->query($sql1,array($row->team_id,'Hustler'));

        if($query1->num_rows()>0){

          return true;
        }
        else{
          return false;
        }
    }
    else{
      return false;
    }

  }


  function getTeam($teamname){

     $sql = "select * from team where team_name = ?";
     $query = $this->db->query($sql,array($teamname));

     if($query->num_rows()>0){
        return true;
     }
     else{
        return 'false';
     }


  }



}




 ?>
