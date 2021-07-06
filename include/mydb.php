<?php
$host="127.0.0.1";
$user="root";
$db_pass="";
$dbName="";

$connect = mysqli_connect("localhost", "root","", "online_exam_sys");
    if ($connect) 
    {
        //echo"conected";
    } 
    else 
    {
        echo "connection failed";
        exit();
    }

?>