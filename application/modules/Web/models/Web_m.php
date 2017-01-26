<?php

class Web_m extends CI_Model{

  function __construct(){
    parent::__construct();
  }



function getAccount($userid){


  $sql = "select * from startup_founder where sf_id = $userid"; 
  $query = $this->db->query($sql);

  if($query->num_rows()>0){

      $row = $query->row();

      return $row;
  }
}




  function getManicure(){

    $this->db->select('*');
    $this->db->from('users');
    $this->db->join('salon','salon.userid = users.userid');
    $this->db->join('salon_services','salon_services.salonID = salon.SalonID');
    $this->db->where('salon_services.service_type','Manicure');
    $query = $this->db->get();
    if($query->num_rows()>0){
      $row = $query->result();
      return $row;
    }
  }

  function getHair(){

    $this->db->select('*');
    $this->db->from('users');
    $this->db->join('salon','salon.userid = users.userid');
    $this->db->join('salon_services','salon_services.salonID = salon.SalonID');
    $this->db->where('salon_services.service_type','Hair');
    $query = $this->db->get();
    if($query->num_rows()>0){
      $row = $query->result();
      return $row;
    }
  }

  function getPedicure(){

    $this->db->select('*');
    $this->db->from('users');
    $this->db->join('salon','salon.userid = users.userid');
    $this->db->join('salon_services','salon_services.salonID = salon.SalonID');
    $this->db->where('salon_services.service_type','Pedicure');
    $query = $this->db->get();
    if($query->num_rows()>0){
      $row = $query->result();
      return $row;
    }
  }

  function getMakeup(){

    $this->db->select('*');
    $this->db->from('users');
    $this->db->join('salon','salon.userid = users.userid');
    $this->db->join('salon_services','salon_services.salonID = salon.SalonID');
    $this->db->where('salon_services.service_type','Makeup');
    $query = $this->db->get();
    if($query->num_rows()>0){
      $row = $query->result();
      return $row;
    }
  }


  function getMassage(){

    $this->db->select('*');
    $this->db->from('users');
    $this->db->join('salon','salon.userid = users.userid');
    $this->db->join('salon_services','salon_services.salonID = salon.SalonID');
    $this->db->where('salon_services.service_type','Massage');
    $query = $this->db->get();
    if($query->num_rows()>0){
      $row = $query->result();
      return $row;
    }
  }


  function getFacial(){

    $this->db->select('*');
    $this->db->from('users');
    $this->db->join('salon','salon.userid = users.userid');
    $this->db->join('salon_services','salon_services.salonID = salon.SalonID');
    $this->db->where('salon_services.service_type','Facial');
    $query = $this->db->get();
    if($query->num_rows()>0){
      $row = $query->result();
      return $row;
    }
  }

  function getCalendars($id){


      $sql2= "select * from calendar where SalonID = $id ORDER BY cal_date ASC";
      $query2 = $this->db->query($sql2);

      if($query2->num_rows()>0){
          $result = $query2->result();
          return $result;
      }

  }


}
