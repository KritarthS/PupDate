<?php 
include("partials/header.php")
?>
	<div class="container-fluid">
		<div class="row">
			<div class="loginForm">
				<div class="logHead">
					<h1>Login</h1>
					<a href="index.php">Need an Account? Register</a>
				</div>
				<form id="logFrm" method="post" action="login.php">

					<label>Email Address</label>
					<input type="text" name="strEmail"><br/>

					<label>Password</label>
					<input type="password" name="strPassword"><br/>

					<input id="save" type="submit" value="Login">
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>