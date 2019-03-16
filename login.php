<?php
// this file will save my pup to the users table (save register)
include("functions/globalFunction.php");

session_start();

// this function goes and selects data from databases, your function may be called something else
$arrUser = outputData("SELECT * FROM users WHERE strEmail='".$_POST["strEmail"]."' AND strPassword='".$_POST["strPassword"]."'");

if ($arrUser)
{
	// should let them in

  $_SESSION["userID"] = $arrUser[0]["id"];
  header("location: listing.php");
} else {
  // error
  header("location: index.php?error=true");
}

// save our user to the database from a sql statement
/*insertData("INSERT INTO users (strNickName, strEmail, strPassword, strPhoto, strBio) 
	VALUES (
	'".$_POST["strNickName"]."',
	'".$_POST["strEmail"]."', 
	'".$_POST["strPassword"]."',
	'".$photo."', 
	'".$_POST["strBio"]."'
	)");*/

// this redirects the browser automatically to the location below
//header("location: listing.php");


?>