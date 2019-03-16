<?php
// this file will save my pup to the users table (save register)

include("functions/globalFunction.php");
include("checkedLoggedUser.php");

// upload an image here.... 
$imageLocation ="assets/".$_FILES["myImage"]["name"];
move_uploaded_file($_FILES["myImage"]["tmp_name"], $imageLocation); // this does the upload
$photo = $_FILES["myImage"]["name"]; // this gives me the filename of the photo

// we need to check if the user uploaded a photo, if not we need to set photo to be the old/current photo
if (!$photo)
{
  $photo = $arrThisPup["strPhoto"];
}

insertData("UPDATE users 
  SET strNickName='".$_POST["strNickName"]."',
      strPassword='".$_POST["strPassword"]."',
      strBio='".$_POST["strBio"]."',
      strPhoto='".$photo."'
  WHERE id='".$arrThisPup["id"]."'");


// this will save the image to the assets folder
/* */// save the image name to the variable photo

// redirect to listing php
header("location: listing.php");


?>