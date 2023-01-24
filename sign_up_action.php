<?php

    include("configuration/config.php");
    include("configuration/firebaseRDB.php");

    $name      = $_POST['name'];
    $email      = $_POST['email'];
    $password   = $_POST['password'];

    if($email == "")
    {
        echo "Email is required";
    }
    else if($password == "")
    {
        echo "Password is required";
    }
    else
    {
        $rdb = new firebaseRDB($databaseURL);
        $retrieve = $rdb->retrieve("/admin", "email", "EQUAL", $email);
        $data = json_decode($retrieve, 1);

        if(count($data) > 0)
        {
            echo "Email already used";
        }
        else
        {
            $insert = $rdb->insert("/admin", [
                "name" => $name,
                "email" => $email,
                "password" => $password
            ]);

            $result = json_decode($insert, 1);
            if(isset($result['name']))
            {
                echo "Signup success, please login";
                header('location:login.php'); 
            }
            else
            {
                echo "Signup failed";
                header('location:sign-up.php'); 
            }  
        }
    }
