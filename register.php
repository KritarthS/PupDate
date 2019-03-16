<?php
// this file will save my pups to the users table (save register)
include("functions/globalFunction.php");

// this will save the image to the assets folder
$imageLocation ="assets/".$_FILES["myImage"]["name"];
move_uploaded_file($_FILES["myImage"]["tmp_name"], $imageLocation);
$photo = $_FILES["myImage"]["name"]; // save the image name to the variable photo

// save our user to the database from a sql statement
insertData("INSERT INTO users (strNickName, strEmail, strPassword, strPhoto, strBio) 
	VALUES (
	'".$_POST["strNickName"]."',
	'".$_POST["strEmail"]."', 
	'".$_POST["strPassword"]."',
	'".$photo."', 
	'".$_POST["strBio"]."'
	)");

// this redirects the browser automatically to the location below
header("location: listing.php");
?>