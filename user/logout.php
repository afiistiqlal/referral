<?php 
session_destroy($_SESSION['username']);
header('location:../login.php');
 ?>