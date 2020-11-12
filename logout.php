<?php
session_start();
$_SESSION['login']=NULL;
unset($_SESSION['login']);

header("location:index.php");

?>