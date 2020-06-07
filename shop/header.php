<?php
session_start();
require("head.php");
?>

<body>
<div class="wrapper">
	<header>
		<div class="content-menu">
			<nav class="navigation">
				<ul>
					<li><a href="index.php">Main page</a></li>
					<li><a href="categories.php">Categories</a></li>
				</ul>
			</nav>
			<div class="vinyl-name">
				<h1>Vinyl</h1>
			</div>
			<div class="auth">
				<ul>
				<?php 
				if ($_SESSION['user-logged']) {
					echo ('<li><a href="#">'. $_SESSION["user-logged"] . '</a></li>
					<li><a href="logout.php">Logout</a></li>');
				}
				else {
					echo ('<li><a href="login.php">Login</a></li>
					<li><a href="sign_up.php">Register</a></li>');
				} ?>
					<li><a href="#">Busket</a></li>
				</ul>
			</div>
		</div>
	</header>