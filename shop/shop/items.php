<?php
session_start();
require("header.php");
?>
<main>
	<p>
		<?php 
		include("itemslist.php")?>
	</p>
</main>
<?php require("footer.php"); ?>