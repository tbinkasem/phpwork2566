<?php

    $name_ck = "pass";
    $value_ck = "1234";

    setcookie($name_ck,$value_ck,time()+(86400*7),"data_cookie/");

    echo "Name's Cookie is set : ".$name_ck;
    echo "<br>";
    echo "Value's Cookie is set : ".$value_ck;
    echo "<br>";
    echo $_COOKIE['username'];
    echo "<br>";
    echo $_COOKIE['pass'];


?>