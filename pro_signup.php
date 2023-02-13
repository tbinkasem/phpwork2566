<?php

    include "config.php";

    $username = $_POST['username'];
    $password = $_POST['password'];
    $fullname = $_POST['fullname'];

    $sql = "INSERT INTO account(username,password,fullname) 
            VALUES('$username','$password','$fullname')";

    $com_query = mysqli_query($conn, $sql);

    if(!$com_query){
        echo "Uncomplete Signup";
    }else{
        echo "Complete Signup";
        header("refresh:3 url=signin.html");
    }

?>