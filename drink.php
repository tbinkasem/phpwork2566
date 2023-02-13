<?php

    session_start();
    include "config.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
</head>
<body>
    <h1>
        <?php echo "Hello, ".$_SESSION['fullname']; ?>
    </h1>
    <h2>
        HOME | ADD | <a href="signout.php">SIGN-OUT</a>
    </h2>
    <span>
        <?php

            $sql = "SELECT * FROM data";
            $com_query = mysqli_query($conn, $sql);
            while($com_result = mysqli_fetch_assoc($com_query)){
                echo "NAME: ".$com_result['dname']."<br>";
                echo "PRICE: ".$com_result['price']."<br>";
                echo "QTY: ".$com_result['quantity']."<br>";
            }

        ?>
    </span>
    
</body>
</html>