<?php
session_start();
?>

<?php require("./header.php"); ?>

<main>
	<div class="content-register">
	<form action="./user/new_user.php" method="POST">
			<p>Enter username:</p>
			<input type="text" name="login" value="" placeholder="Username">
			<p>Enter password:</p>
			<input type="password" name="passwd" value="" placeholder="Password">
			<input type="submit" name="submit" value="Sign up">
	</form>
		<span class="registration-text"><a href="index.php">Back to Main page</a></span>
		<span class="registration-text"><a href="#">Login</a></span>
	</div>
</main>

<?php require("footer.php");