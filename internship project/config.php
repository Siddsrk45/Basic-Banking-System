<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bank_system";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("could not connect to database".mysqli_connect_error());
}