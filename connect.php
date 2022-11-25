<?php
    $dv_ip = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_db = 'register_db';

    $con = new mysqli($dv_ip,$db_user,$db_pass,$db_db);
    if($con->connect_errno)
    {
        echo "erro";
    }
    else{
    }



?>