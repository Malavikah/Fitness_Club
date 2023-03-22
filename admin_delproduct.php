<?php

include('dbconnections.php');

if(isset($_GET['id']))
  {
    $idd=$_GET['id'];
    $sql="delete from `product` where prid='$idd'";
    $result=$con->query($sql);
    header("Location:admin_productall.php");

  }

  ?>
  