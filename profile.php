<?php
include("functions/globalFunction.php");
include("checkedLoggedUser.php");
include("partials/header.php");

$arrPup = outputData("SELECT * FROM users WHERE id='".$_GET['usersID']."'");
$pup = $arrPup[0];

?>
<div class="container pro">
	<div class="row">
		<div class="pupprofile">
		<!-- make a link with the current pups id  -->
			<img src="assets/<?=$pup['strPhoto']?>">
			<div class="proBox">
				<h3 class="pupName"><?=$pup['strNickName']?></h3>
				<p class="pupBio"><?=nl2br($pup['strBio'])?></p>
				<div class="btns">
					<a href="messages.php?usersID=<?=$pup['id']?>">Messages</a>
					<a href="listing.php">Find Other Pups</a>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>