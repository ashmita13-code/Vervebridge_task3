<?php
$servername="localhost";
$username="root";
$password="";
$dbname="verve_task";

$con= mysqli_connect($servername,$username,$password,$dbname);

if(!$con)
{
    die("connection failed");
}


?>