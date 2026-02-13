<?php


$conn = new mysqli("localhost","root","","blooger");

if($conn->connect_error){
 die ("connection failed" . $conn->connect_error);
}

?>