<?php

$serverName="localhost:3307";
$dbUsername="root";
$dbPassword="";
$dbName="vrs";

$conn=mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);

if(!$conn){
    die("Connection failed : " .mysqli_connect_error());
}