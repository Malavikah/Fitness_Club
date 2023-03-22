<?php
    if (!isset($_SESSION)) { session_start(); }
    unset($_SESSION['id']);
    $_SESSION = array(); 
    session_destroy(); 
    header("Location: index.php"); 
    exit();
    // session_start();
    // unset($_SESSION['id']);
    // session_destroy();
    // header('Location:../index.php');
?>