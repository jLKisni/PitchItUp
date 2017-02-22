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

function contact_add($name, $number, $type, $address)
{
	$db = contact_db();
	$sql = "insert into contacts(name, number, type, address) values(?, ?, ?, ?)";
	$cmd = $db->prepare($sql);
	$cmd->execute(array($name, $number, $type, $address));
	$db = null;
	
	return 'New contact has been added.';
}

function contact_update($id, $name, $number, $type, $address)
{
	$db = contact_db();
	$sql = "update contacts set name=?, number=?, type=?, address=? where id=?";
	$cmd = $db->prepare($sql);
	$cmd->execute(array($name, $number, $type, $address, $id));
	$db = null;
	
	return 'Contact has been updated.';
}


function contact_delete($id)
{
	$db = contact_db();
	$sql = "delete from contacts where id=?";
	$cmd = $db->prepare($sql);
	$cmd->execute(array($id));
	$db = null;
	
	return 'Contact has been deleted.';	
}


function contact_find($id)
{
	$db = contact_db();
	$sql = "select * from contacts where id=?";
	$cmd = $db->prepare($sql);
	$cmd->execute(array($id));
	$row = $cmd->fetch();
	$db = null;
	
	return $row;
}

function contact_list()
{
	$db = contact_db();
	$sql = "select * from contacts";
	$cmd = $db->prepare($sql);
	$cmd->execute();
	$rows = $cmd->fetchAll();
	$db = null;
	
	return $rows;
}




