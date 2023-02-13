<?php

    $name = array("Kasmeen","Chekameen","Sayutee",
                    "Yanida","Nianwa","Muhammadlutfee");
    
    sort($name);
    $a = count($name)-1;

    $b = 0;
    while($b <= $a){
        echo $name[$b]."<br>";
        $b++;
    }

    echo "<hr color='red'>";

    rsort($name);

    for($x = 0; $x <= $a; $x++){
        echo $name[$x]."<br>";
    }

    echo "<hr color='red'>";

    $student = array("Kasmeen" => "4.00","Chekameen" => "3.50",
                        "Sayutee" => "3.00","Yanida" => "2.50",
                            "Nianwa" => "2.00","Muhammadlutfee" => "1.50");

    asort($student);
    foreach($student as $k_std => $v_std){
        echo $k_std." GPA: ".$v_std;
        echo "<br>";
    }
    echo "<hr color='red'>";

    ksort($student);
    foreach($student as $k_std => $v_std){
        echo $k_std." GPA: ".$v_std;
        echo "<br>";
    }
    echo "<hr color='red'>";

    arsort($student);
    foreach($student as $k_std => $v_std){
        echo $k_std." GPA: ".$v_std;
        echo "<br>";
    }
    echo "<hr color='red'>";
    
    krsort($student);
    foreach($student as $k_std => $v_std){
        echo $k_std." GPA: ".$v_std;
        echo "<br>";
    }

?>