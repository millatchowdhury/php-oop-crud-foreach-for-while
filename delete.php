<?php 
include "./config.php";

$id = $_GET['id'];
$sql = "delete from `person` where id = '$id'";
$conn->query($sql);
echo "Deleted";
?>
<a href="./index.php">Home</a>