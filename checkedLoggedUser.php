<?php
session_start();

// get our pup based on the ID we have in our session
// BELOW IS A TERNIARY OPERATOR
$_SESSION["userID"] = (isset($_SESSION["userID"]))?$_SESSION["userID"]:"";

// this function goes and selects data from databases, your function may be called something else
$arrThisPup = outputData("SELECT * FROM users WHERE id='".$_SESSION["userID"]."'");

// if no pup was found (! means NOT)
if (!$arrThisPup)
{
  header("location: index.php?error=true");
}
  $arrThisPup = $arrThisPup[0];

?>