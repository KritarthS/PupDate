<!DOCTYPE html>
<html>
<head>
  <title>PupDate</title>
  <link rel="shortcut icon" href="imgs/faviconx.ico" type="image/x-icon">
	<link rel="icon" href="imgs/faviconx.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,500i,600,600i,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>
<body id="headd">

<?php
// this checks to make sure the array has a key by the name strNickName before we try to use it, if just use it and it does not exist, then it would give an error. isset() is a method which checks to see if a variable exists 
if (isset($arrThisPup["strNickName"]))
{
  ?>
  <div class="container-fluid">
    <div class="row">
      <div class="header">
        <div class="welcome">
          <img id="logo" src="imgs/logo.png" alt="PupDate Logo">
          <h1>Welcome Back, <?=$arrThisPup["strNickName"]?></h1>
        </div>
        <div class="nav">
          <a href="listing.php"><i class="fas fa-home"></i>Listing</a>
          <a href="editProfileForm.php"><i class="fas fa-user-edit"></i>Edit Profile</a>
          <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
        </div>
      </div>
    </div>
  </div>
  <?php
}
?>