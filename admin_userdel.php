<?php

include('dbconnections.php');

if(isset($_GET['id']))
  {
    $idd=$_GET['id'];
    $sql="delete from `user` where ui='$idd'";
    $result=$con->query($sql);
    header("Location:admin_viewusers.php");

  }

  ?>
  