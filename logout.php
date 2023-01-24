<?php
    include("configuration/config.php");
    include("configuration/firebaseRDB.php");

    if(isset($_SESSION['admin']))
    {
        unset($_SESSION['admin']);
    }
    header('location:login.php'); 
?>