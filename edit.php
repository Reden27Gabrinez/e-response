



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

    header('location:index.php?page=hotlines');
