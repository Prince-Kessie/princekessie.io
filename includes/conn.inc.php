<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'trust';

$conn = new MYSQLI($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die('Database connection error: '. $conn->connect_error);
}



$conn = new PDO("mysql:host=$host; dbname=$db_name", $user, $pass,);

if($conn == true) {
    //echo "Connection successful";
}else{
    echo "Connection error";
}


//$host = 'localhost';
//$user = 'root';
//$pass = '';
//$db_name = 'trust';

//$conn = new MYSQLI($host, $user, $pass, $db_name);

//if ($conn->connect_error) {
   // die('Database connection error: '. $conn->connect_error);
//}



