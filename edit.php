



<?php
    include("configuration/config.php");
    include("configuration/firebaseRDB.php");

    $db = new firebaseRDB($databaseURL);
    $id = $_POST['id'];
    $update = $db->update("hotlines", $id, [
    "hotLine"     => $_POST['number'],
    "lat" => $_POST['lat'],
    "lng"      => $_POST['long'],
    "team"    => $_POST['responder']
    ]);
    $_SESSION['response']="Successfully Updated!";
	$_SESSION['res_type']="warning";
    header('location:index.php?page=hotlines');
