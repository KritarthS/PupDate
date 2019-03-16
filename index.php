<!DOCTYPE html>
<html>
<head>
	<title>Register For Pup Dating</title>
	<link rel="shortcut icon" href="imgs/faviconx.ico" type="image/x-icon">
	<link rel="icon" href="imgs/faviconx.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,500i,600,600i,700" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>
<body id="indx">
	<div class="container-fluid">
		<div class="row">
			<div class="indHead">
				<img id="logo" src="imgs/logo.png" alt="PupDate Logo">
				<div class="login">
				<h1>Hey There Pup! Register Below And Find Your Forever</h1>
				<a href="loginForm.php">Login</a>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container-fluid">
		<div class="row">
			<div class="regForm">
				<form id="indFrm" method="post" action="register.php" enctype="multipart/form-data">
					<label>Name:</label>
					<input type="text" name="strNickName">

					<label>Email Address:</label>
					<input type="text" name="strEmail">

					<label>Password:</label>
					<input type="password" name="strPassword">

					<label>Bio:</label>
					<textarea name="strBio" cols=30 rows=4></textarea>

					<input id="upload" type="file" name="myImage">
					<input id="save" type="submit" value="Register Now">
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>