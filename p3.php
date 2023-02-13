<?php

    session_start();

?>
<h2>
    <?php 
        echo "Hello, ".$_SESSION['username']; 
    ?>
    <form action="p4.php" method="post">
        <input type="submit" value="Send P4">
    </form>
</h2>