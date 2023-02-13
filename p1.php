<?php

    session_start();
    $_SESSION['username'] = "bteera";
    $_SESSION['depname'] = "Information Technology";

?>
<form action="p2.php" method="post">
    <input type="submit" value="Send P2">
</form>