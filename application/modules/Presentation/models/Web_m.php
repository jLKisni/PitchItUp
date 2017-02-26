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

function addPitchdeck(){

  $sql1 = "select * from gen_pitchdeck where valueprop_id = ? and idea_id = ? and valid_id = ? and bmc_id = ? and team_id = ? ";
  $query1 = $this->db->query($sql1,array($this->session->tempdata('valuepropid'),$this->session->tempdata('ideaid'),$this->session->tempdata('validid'),$this->session->tempdata('bmcid'),$this->session->userdata('team_id')));

  if($query1->num_rows()>0){
    return true;
  }
  else{
     $sql = "insert into gen_pitchdeck (valueprop_id,idea_id,valid_id,bmc_id,team_id) values(?,?,?,?,?)";
      $query = $this->db->query($sql,array($this->session->tempdata('valuepropid'),$this->session->tempdata('ideaid'),$this->session->tempdata('validid'),$this->session->tempdata('bmcid'),$this->session->userdata('team_id')));

      if($query){

        $sql2 = "insert into history (pitchdeck_id) values (?)";
        $query2 = $this->db->query($sql2,array($this->db->insert_id()));
        return true;
      }
      else{
        return false;
      }
  }
 
}


function addHistory($pitchdeckid){

   $sql = "insert into history (pitchdeck_id,hist_memid) values (?,?)";
   $query = $this->db->query($sql,array($pitchdeckid,$this->session->userdata('userid')));

   if($query){

    return true;

   }
   else{
    return false;
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
