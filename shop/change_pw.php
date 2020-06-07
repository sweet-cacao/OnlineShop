<?php session_start(); ?>

<?php require('../header.php'); ?>

<main>
	<div class="content-register">
	<form action="modify.php" method="POST">
			<p>Enter username:</p>
			<input type="text" name="login" value="" placeholder="Username">
			<p>Enter old password:</p>
			<input type="password" name="oldpw" value="" placeholder="Password">
			<p>Enter new password:</p>
			<input type="password" name="newpw" value="" placeholder="Password">
			<input type="submit" name="submit" value="Change">
	</form>
		<span class="registration-text"><a href="index.php">Back to Main page</a></span>
	</div>
</main>

<?php require('footer.php');