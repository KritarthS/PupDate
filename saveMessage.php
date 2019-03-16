<?php
// this file will save my pup to the users table (save register)
include("functions/globalFunction.php");
include("checkedLoggedUser.php");

// save our user to the database from a sql statement
insertData("INSERT INTO messages (nUsersID, nToUsersID, strMessage, bRead) 
	VALUES (
	'".$arrThisPup["id"]."',
	'".$_POST["nToUsersID"]."',
	'".$_POST["strMessage"]."', 
	'1'
	)");

// this redirects the browser automatically to the location below
header("location: messages.php?success=true&usersID=".$_POST["nToUsersID"]);


?>