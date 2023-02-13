<?php

    $grade = array(3.33,2.22,1.11,0.00);
    echo $grade[0]."<br>";
    echo $grade[1]."<br>";
    echo $grade[2]."<br>";
    echo $grade[3]."<br>";

    echo "<hr color='red'>";    

    $a = count($grade) - 1;
    //echo sizeof($grade);

    while($a >= 0){
        echo $grade[$a]."<br>";
        $a--;
        //$a = $a -1;
    }

    echo "<hr color='red'>";  
    
    $c = count($grade) - 1;
    $b = 0;

    while($b <= $c){
        echo $grade[$b]."<br>";
        $b++;
    }

    echo "<hr color='red'>"; 

    $d = count($grade) - 1;

    for($e = 0; $e <= $d; $e++){
        echo $grade[$e]."<br>";
    }



?>