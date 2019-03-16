<?php
include("functions/globalFunction.php");
include("checkedLoggedUser.php");
include("partials/header.php");

$nPageNumber = (isset($_GET["nPageNumber"]))?$_GET["nPageNumber"]:1;

// how many pups will show on this page
$numPupsPerPage = 9;
$startRecord =  ($nPageNumber*$numPupsPerPage)-$numPupsPerPage;

// all users where the user ID is not the current logged user
$arrAllPups = outputData("SELECT id FROM users WHERE id!='".$_SESSION["userID"]."'"); 
// this function returns an array of table records

$arrSomePups = outputData("SELECT * FROM users WHERE id!='".$_SESSION["userID"]."' LIMIT $startRecord,$numPupsPerPage");

echo "<div class='puplisting'>";
foreach($arrSomePups as $pup)
{
?>
	<div class="pup">
		<!-- make a link with the current pups id  -->
		<a href="profile.php?usersID=<?=$pup['id']?>">
			<img src="assets/<?=$pup['strPhoto']?>">
			<h5 class="pupName"><?=$pup['strNickName']?></h5>
		</a>
	</div>
<?php
}
?>
</div>
	<div class="pager">
	<i class="fas fa-caret-left"></i>
	<?php
	$howManyPagesDoWeNeed = ceil(count($arrAllPups)/$numPupsPerPage);
	for($i=1;$i<=$howManyPagesDoWeNeed;$i++)
	{
		echo "<a class='pgNo' href='listing.php?nPageNumber=$i'>".$i."</a>";
	}
	?>
	<i class="fas fa-caret-right"></i>
	</div>
</body>
</html>