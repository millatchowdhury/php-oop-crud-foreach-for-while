<?php 
$hostname = "localhost";
$user = "root";
$pass = "";
$dbname = "phpcrud";

$conn = new mysqli($hostname, $user, $pass, $dbname);
if(!$conn){
    echo "connect Fail";
}