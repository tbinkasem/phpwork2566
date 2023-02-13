<?php

    $student = array(
        array("Rashed","3.33","IT"),
        array("Yanida","2.22","BC"),
        array("Sukree","1.11","AC"),
        array("Kasmeen","0.00","FT")
    );

    echo $student[2][0]."<br>";
    echo $student[1][2]."<br>";
    echo $student[3][1]."<br>";

    echo "<hr color='red'>";

    for($a = 0; $a <= count($student)-1; $a++){
        for($c = 0;$c <= 2; $c++){
            echo $student[$a][$c]." ";
        }
        echo "<br>";
    }
?>