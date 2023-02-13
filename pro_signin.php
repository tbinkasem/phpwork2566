<?php

    session_start();
    include "config.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM account
            WHERE username='$username' and password='$password'";

    $com_query = mysqli_query($conn, $sql);
    $com_result = mysqli_fetch_assoc($com_query);

    if(!$com_query){
        echo "Uncomplete Signin";
    }else{
        echo "Complete Signin";
        $_SESSION['fullname'] = $com_result['fullname'];
        header("refresh:3 url=drink.php");
    }

?>