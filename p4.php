<?php

    session_start();
    echo "รอสักครู่...";
    echo "เรากำลังจะทำลาย Session['username'] = ".$_SESSION['username'];
    session_unset();
    echo "Session['username'] = "."-- ".$_SESSION['username']."-- ";
    session_destroy();

?>
