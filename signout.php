<?php

    session_start();
    session_unset();
    session_destroy();
    echo "Complete Signout..."; 
    header("refresh:3 url=signin.html");

?>