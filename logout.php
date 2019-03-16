<?php
// this file will save my pups to the users table (save register)
session_start();
$_SESSION["userID"] = false;
header("location: index.php");
?>