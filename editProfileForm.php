<?php
include("functions/globalFunction.php");
include("checkedLoggedUser.php");
include("partials/header.php");
?>

  <div class="container">
    <div class="row edits">
      <div class="currentPic">
        <h2>Current Picture</h2>
        <img src="assets/<?=$arrThisPup['strPhoto']?>" />
        <form method="post" action="updateProfile.php" enctype="multipart/form-data">
          <input id="upload" type="file" name="myImage">
        </form>
      </div>
      <div class="updateFrm">
        <h2>Edit Profile</h2>
        <form id="edtFrm" method="post" action="updateProfile.php" enctype="multipart/form-data">

          <label>Name:</label>
          <input type="text" name="strNickName" value="<?=$arrThisPup["strNickName"]?>"><br/>

          <label>Email Address:</label>
          <input type="text" name="strEmail" value="<?=$arrThisPup["strEmail"]?>" readonly><br/>

          <label>Password:</label>
          <input type="password" name="strPassword" value="<?=$arrThisPup["strPassword"]?>"><br/>

          <label>Bio:</label>
          <textarea name="strBio" cols=30 rows=4><?=$arrThisPup["strBio"]?></textarea><br/>
          
          <input id="save" type="submit" value="Update Profile">
        </form>
      </div>
    </div>
  </div>

</body>
</html>