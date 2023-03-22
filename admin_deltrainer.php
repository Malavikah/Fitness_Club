<?php
session_start();
include('check_login.php');
    check_login();
include('dbconnections.php');

if(isset($_GET['id']))
  {
    $idd=$_GET['id'];
    $sql="delete from `trainers` where tid='$idd'";
    $result=$con->query($sql);
    header("Location:admin_trainersall.php");

  }

  ?>
  