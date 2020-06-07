<?php

echo "<body style='background-color : #0d0d0d;'>";


function ERROR404() {
	echo ("<main><div style='color: red; display-block margin: auto; font-size: 30px; text-decoration: none'>Oops something went wrong try again later and go to <a href='index.php'>Main page</a></div></main>");
}

function ERROR_REG() {
	echo("<main><div style='color: red; display-block margin: auto; font-size: 30px; text-decoration: none'>This login is already taken <a href='sign_up.php'>here</a> to try again</div></main>");
}

function ERROR_EMPTY() {
	echo("<main><div style='color: red; display-block text-align: center; font-size: 30px; text-decoration: none'>Login and / or password fields are empty type <a href='sign_up.php'>here</a> to try again");
}

function ERROR_WRONG() {
	echo("<main><div style='color: red; display-block margin: auto; font-size: 30px; text-decoration: none'>Wrong login or / and password type <a href='sign_up.php'>here</a> to try again");
}

echo "</body>";