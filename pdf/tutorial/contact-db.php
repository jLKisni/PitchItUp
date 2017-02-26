<?php

function contact_db()
{
	$user = "root";
	$pass = "";
	return new PDO("mysql:/host=localhost;dbname=pitchitup",$user, $pass);	
}

function ideagen($id){

	$db = contact_db();
	$sql1 = "select * from gen_pitchdeck where pitchdeck_id = ?";
	$cmd1 = $db->prepare($sql1);
	$cmd1->execute(array($id));
	$rows = $cmd1->fetch();
	

	if($rows){

	
		$sql = "select * from idea_genboard where idea_id = ?";
		$cmd = $db->prepare($sql);
		$cmd->execute(array($rows['idea_id']));
		$row = $cmd->fetch();
		$db = null;

		return $row;

	}

}

function getteam($id){

	$db = contact_db();
	$sql = "select * from team where team_id = ?";
	$cmd = $db->prepare($sql);
	$cmd->execute(array($id));
	$row = $cmd->fetch();
	$db = null;

	return $row;

}

function getteampitchdeck($id){

	$db = contact_db();
	$sql = "select * from gen_pitchdeck where pitchdeck_id = ?";
	$cmd = $db->prepare($sql);
	$cmd->execute(array($id));
	$row = $cmd->fetch();
	

	if($row){
		$sql1 = "select * from team where team_id = ? ";
		$cmd1 = $db->prepare($sql1);
		$cmd1 ->execute(array($row['team_id']));
		$rows = $cmd1->fetch();
		$db = null;

		return $rows;
	}

}

function valueprop($id){

	$db = contact_db();
	$sql1 = "select * from gen_pitchdeck where pitchdeck_id = ?";
	$cmd1 = $db->prepare($sql1);
	$cmd1->execute(array($id));
	$rows = $cmd1->fetch();
	

	if($rows){

	
		$sql = "select * from value_prop where valueprop_id = ?";
		$cmd = $db->prepare($sql);
		$cmd->execute(array($rows['valueprop_id']));
		$row = $cmd->fetch();
		$db = null;

		return $row;

	}

}

function bmc($id){

	$db = contact_db();
	$sql1 = "select * from gen_pitchdeck where pitchdeck_id = ?";
	$cmd1 = $db->prepare($sql1);
	$cmd1->execute(array($id));
	$rows = $cmd1->fetch();
	

	if($rows){

	
		$sql = "select * from bmc where bmc_id = ?";
		$cmd = $db->prepare($sql);
		$cmd->execute(array($rows['bmc_id']));
		$row = $cmd->fetch();
		$db = null;

		return $row;

	}

}






?>




