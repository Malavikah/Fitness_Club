<?php

include('dbconnections.php');

if(isset($_GET['id']))
  {
    $idd=$_GET['id'];
    $sql="delete from `packages` where pi='$idd'";
    $result=$con->query($sql);
    header("Location:admin_packagemain.php");

  }

  ?>
  