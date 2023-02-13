<?php

    session_start();

?>
<h2>
    <?php 
        echo "Hello, ".$_SESSION['username']; 
        echo "<br>";
        echo "Department : ".$_SESSION['depname'];
        $_SESSION['username'] = "PEERA";
    ?>
    <form action="p3.php" method="post">
        <input type="submit" value="Send P3">
    </form>
</h2>