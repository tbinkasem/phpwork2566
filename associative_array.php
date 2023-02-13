<?php


    $name = array("Teera" => "3.33",
                    "Peera" => "2.22",
                        "Weera" => "1.11",
                            "Seera" => "0.00");
    
    echo $name["Peera"]."<br>";
    echo $name["Seera"]."<br>";

    echo "<hr color='red'>";    

    foreach($name as $k_nm => $v_nm){
        echo "KEY: ".$k_nm;
        echo " ";
        echo "VALUE: ".$v_nm;
        echo "<br>";
    }

?>