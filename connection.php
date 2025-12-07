<?php
$server="localhost";
$user="root";
$password="";
$dbname="hdc";

$conn=mysqli_connect($server,$user,$password,$dbname);
if($conn)
{
    echo "connection established successfully";
}


?>