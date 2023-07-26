<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "cbe_hackathon";

$conn = mysqli_connect($serverName,  $dbUsername, $dbPassword, $dbName);

if(!$conn){
    die ("Connection failed".mysqli_connect_error());
}