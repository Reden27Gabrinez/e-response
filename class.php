<?php

include("configuration/config.php");
include("configuration/firebaseRDB.php");

$db = new firebaseRDB($databaseURL);


if(isset($_GET['id']))
{
    $id = $_GET['id'];
    if($id != ""){
    $delete = $db->delete("users", $id);
    $_SESSION['response']="Successfully Deleted!";
	$_SESSION['res_type']="danger";
    header('location:index.php?page=user-list');
    }
}

if(isset($_GET['id2']))
{
    $id = $_GET['id2'];
    if($id != ""){
    $delete = $db->delete("hotlines", $id);
    $_SESSION['response']="Successfully Deleted!";
	$_SESSION['res_type']="danger";
    header('location:index.php?page=hotlines');
    }
}

if(isset($_GET['id3']))
{
    $id = $_GET['id3'];
    if($id != ""){
    $delete = $db->delete("admin", $id);
    $_SESSION['response']="Successfully Deleted!";
	$_SESSION['res_type']="danger";
    header('location:index.php?page=admin');
    }
}

if(isset($_POST['add']))
{
    $insert = $db->insert("hotlines", [
        "team"     => $_POST['responder'],
        "hotLine"  => $_POST['number'],
        "lat"      => $_POST['lat'],
        "lng"      => $_POST['long']
     ]);
     $_SESSION['response']="Successfully Added!";
	 $_SESSION['res_type']="info";
     header('location:index.php?page=hotlines');
}


?>