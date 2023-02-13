<?php

    //ชื่อเครื่อง (Host Name) หรือ (IP Addess)
    $server = "localhost"; //192.168.10.24
    //DB User ชื่อผู้ใช้งานฐานข้อมูล
    $user = "root";
    //รหัสผ่านของ DB User
    $pass = "";
    //ชื่อฐานข้อมูล
    $db = "drink";

    $conn  = mysqli_connect($server,$user,$pass,$db);

    if(!$conn){
        echo "Not Connect DB";
    }

?>