<?php
#connction details
$username="root";
$password="";
$dbname="fitness";
$hostname="localhost:3309";

//creating conncetion
$con = new mysqli($hostname,$username,$password,$dbname);

//checking errors
if($con->connect_error){
	die("connection failed".$db->connect_error);
}

?>