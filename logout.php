<?php
include 'connection.php';
session_start();

$_SESSION['u_em']="";

header('location:index.php');

?>