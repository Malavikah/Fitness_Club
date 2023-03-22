<?php

include('dbconnections.php');

if(isset($_GET['id']))
  {
    $idd=$_GET['id'];
    $sql="delete from `trainigplan` where pid='$idd'";
    $result=$con->query($sql);
    header("Location:admin_trainingplanall.php");

  }

  ?>
  