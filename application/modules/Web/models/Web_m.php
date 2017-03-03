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

  $sql1 = "select * from ungen_pitchdeck where  ungen_id = ?";
  $query1 = $this->db->query($sql1,array($this->session->userdata('ungen_id')));

  if($query1->num_rows()>0){
    
    $rows = $query1->row();
       $sql = "insert into gen_pitchdeck (valueprop_id,idea_id,valid_id,bmc_id,team_id) values(?,?,?,?,?)";
      $query = $this->db->query($sql,array($rows->valueprop_id,$rows->idea_id,$rows->valid_id,$rows->bmc_id,$rows->team_id));

      if($query){
           $session = array(
                  'pitchdeckid'=>$this->db->insert_id(),
                  'idea_id'=>$rows->idea_id
                );

        $this->session->set_userdata($session);
        $sql2 = "insert into history (pitchdeck_id,hist_memid) values (?,?)";
        $query2 = $this->db->query($sql2,array($this->db->insert_id(),$this->session->userdata('userid')));

        

        $sql4 = "delete from ungen_pitchdeck where ungen_id = ?";
        $query4 = $this->db->query($sql4,array($this->session->userdata('ungen_id')));

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


function deleteDocument($pitchdeckid){

  $sql = "delete from gen_pitchdeck where pitchdeck_id = $pitchdeckid";
  $query = $this->db->query($sql);

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
