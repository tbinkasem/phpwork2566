<?php

    //$folderup = "uploads/"; กรณีที่จะกำหนดในตัวแปร
    if(move_uploaded_file($_FILES["fileup"]["tmp_name"],"uploads/".$_FILES["fileup"]["name"])){
        echo "ส่งไฟล์ เรียบร้อยแล้ว";
    }else{
        echo "ส่งไฟล์ไม่สำเร็จ!!!";
    }

    // $folderup = "teera";
    // if(move_uploaded_file($_FILES["fileup"]["tmp_name"],$folderup."/".$_FILES["fileup"]["name"])){
    //     echo "ส่งไฟล์ เรียบร้อยแล้ว";
    // }else{
    //     echo "ส่งไฟล์ไม่สำเร็จ!!!";
    // }
    

?>