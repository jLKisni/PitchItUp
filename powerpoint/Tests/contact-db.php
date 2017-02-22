<?php

function contact_db()
{
	$user = "root";
	$pass = "";
	return new PDO("mysql:/host=localhost;dbname=pitchitup",$user, $pass);	
}

function ideagen($id){

	$db = contact_db();
	$sql = "select * from idea_genboard where team_id = ?";
	$cmd = $db->prepare($sql);
	$cmd->execute(array($id));
	$row = $cmd->fetch();
	$db = null;

	return $row;

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




?>




