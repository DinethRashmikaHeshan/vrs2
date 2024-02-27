<?php
$conn = new mysqli("localhost:3307","root","","vrs");
if($conn->connect_error){
    die("connection Failed".$conn->connect_error);
}
?>