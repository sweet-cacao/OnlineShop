<?php
session_start();
?>

<?php require("header.php"); ?>

<main>
	<div class="content-register">
	<form action="check_user.php" method="POST">
			<p>Enter username:</p>
			<input type="text" name="login" value="" placeholder="Username">
			<p>Enter password:</p>
			<input type="password" name="passwd" value="" placeholder="Password">
			<input type="submit" name="submit" value="Sign in">
	</form>
		<span class="registration-text"><a href="index.php">Back to Main page</a></span>
		<span class="registration-text"><a href="sign_up.php">Register</a></span>
	</div>
</main>

<?php require("footer.php");