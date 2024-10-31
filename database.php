<?php

$servername ="localhost";
$username ="root";
$password ="";
$database ="hotel booking";

$mysqli = new mysqli($servername,$username,$password,$database);
if($mysqli->connect_error){

    exit("connection not succefully connected");
}
else
{
}


?>