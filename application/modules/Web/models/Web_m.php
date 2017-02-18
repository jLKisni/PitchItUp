<?php

class Web_m extends CI_Model{

  function __construct(){
    parent::__construct();
  }



function getAccount($userid){


  // $sql = "select * from members where mem_id = $userid"; 
  // $query = $this->db->query($sql);

   $this->db->select('*');
   $this->db->from('members');
   $this->db->join('team','team.team_id = members.team_id');
   $this->db->where('members.mem_id',$userid);
   $query = $this->db->get();
  if($query->num_rows()>0){

      $row = $query->row();

      return $row;
  }
}

function getAccounts(){


  // $sql = "select * from members where mem_id = $userid"; 
  // $query = $this->db->query($sql);

   $this->db->select('*');
   $this->db->from('members');
   $this->db->join('team','team.team_id = members.team_id');
   $query = $this->db->get();
  if($query->num_rows()>0){

      $row = $query->result();

      return $row;
  }
}



function deactivateAccount($id){

  $sql = "update members set member_status = ? where mem_id = ?";
  $query = $this->db->query($sql,array(1,$id));

  if($query){
    return true;
  }
  else{
    return false;
  }

}



 


}
