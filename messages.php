<?php
include("functions/globalFunction.php");
include("checkedLoggedUser.php");
include("partials/header.php");

$arrPup = outputData("SELECT * FROM users WHERE id='".$_GET['usersID']."'");
$pup = $arrPup[0];

?>
<div class="container">
	<div class="row">
		<div class="messages">

		<?php
		// select all messages from where they are from me TO the current select pup
		// OR
		// where they were from the selected pup, TO me
		$arrMessages = outputData("
			SELECT * FROM messages 
			WHERE (nUsersID='".$arrThisPup['id']."' AND nToUsersID='".$_GET['usersID']."') 
						OR (nUsersID='".$_GET['usersID']."' AND nToUsersID='".$arrThisPup['id']."')"
		);

		foreach($arrMessages as $message)
		{
			$toOrFrom = ($message["nUsersID"]==$arrThisPup['id'])?"fromMe":"toMe";
			$arrMessageFromPup = ($message["nUsersID"]==$arrThisPup['id'])?$arrThisPup:$pup;

			echo "<div class='messagebubble $toOrFrom'>
							<div class='msgImg'>
								<img src='assets/".$arrMessageFromPup["strPhoto"]."'>
							</div>
							<div class='msg'>
								<p>
								<em>".$arrMessageFromPup["strNickName"].": </em>".$message["strMessage"].
							"</p>
							</div>
						</div>";
		}
		?>
		</div>
	</div>
	<div class="row">
		<div class="typePad">
			<h3>Sending Message To <?=$pup["strNickName"]?></h3>

			<form method="post" action="saveMessage.php">
				<input type="hidden" name="nToUsersID" value="<?=$_GET['usersID']?>"/>
				<textarea name="strMessage" rows=3 cols="45"></textarea><br/>
				<input id="save" type="submit" value="Send Message">
			</form>

			<a id="back" href="listing.php">Back to Listing</a>

		</div>
	</div>
</div>

</body>
</html>