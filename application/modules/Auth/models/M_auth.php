<?php

class M_auth extends CI_Model{

  function __construct(){
    parent::__construct();
  }

  function register($usertype,$data){


    if($usertype == 1 || $usertype== '1'){

      $sql = "select * from users where username = ? or email = ?";
      $query = $this->db->query($sql,array($data['uname'],$data['email']));

      if($query->num_rows()>0){
          return 'Username or email address exist ! Please Create Another One';
      }
      else{
           $sql1 = "insert into users (username,password,email,user_image,firstname,lastname,address,usertype,created_at,user_status)values(?,?,?,?,?,?,?,?,?,?)";
           $query1 = $this->db->query($sql1,array($data['uname'],$data['pass'],$data['email'],$data['user_image'],$data['fname'],$data['lname'],$data['address'],$data['utype'],date('Y-m-d'),1));

           if($query1){

             $sql2 = "select * from users where username = ? and password = ?";
             $query2 = $this->db->query($sql2,array($data['uname'],$data['pass']));

             if($query2->num_rows()>0){
               $row = $query2->row();
               $session = array(
                 'userid'=>$row->userid,
                 'username'=>$row->username,
                 'usertype'=>$row->usertype,
                 'logged_in'=>1
               );
               $this->session->set_userdata($session);
               return 'Login';
             }

           }

       }

    }
    else{
        $sql5 = "Select * from users where username = ? or email = ?";
        $query = $this->db->query($sql5,array($data['uname'],$data['email']));

        if($query->num_rows()>0){
          return 'Username or email address exist ! Please Create Another One';
        }
        else{

          $sql1 = "insert into users (username,password,email,address,user_image,usertype,created_at,user_status)values(?,?,?,?,?,?,?,?)";
          $query1 = $this->db->query($sql1,array($data['uname'],$data['pass'],$data['email'],$data['salonaddress'],$data['user_image'],$data['utype'],date('Y-m-d'),1));

          if($query1){

                $sql2 = "select * from users where username = ? and password = ?";
                $query2 = $this->db->query($sql2,array($data['uname'],$data['pass']));

                if($query2->num_rows()>0){
                  $row = $query2->row();

                    $sql3 = "insert into salon(SalonName,ContactNum,SalonDetails,Latitude,Longitude,Address,Status,OwnerName,userid)values(?,?,?,?,?,?,?,?,?)";
                    $query3 = $this->db->query($sql3,array($data['salonname'],$data['contactnumber'],$data['salondetails'],$data['lat'],$data['long'],$data['salonaddress'],'1',$data['salonowner'],$row->userid));

                  $session = array(
                    'userid'=>$row->userid,
                    'username'=>$row->username,
                    'usertype'=>$row->usertype,
                    'logged_in'=>1
                  );

                  $this->session->set_userdata($session);
                  return 'Login';
               }



          }

      }

    }

  }

  function login($data){
      $sql = "select * from users where username = ? and password = ? and user_status = ?";
      $query = $this->db->query($sql,array($data['username'],$data['password'],1));
      if($query->num_rows()>0){
          $row = $query->row();
          $session = array(
            'userid'=>$row->userid,
            'username'=>$row->username,
            'usertype'=>$row->usertype,
            'logged_in'=>1
          );
          $this->session->set_userdata($session);

          return 'Login';

      }
      else{
           return 'false';

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
