<?php

function ERROR404() {
	echo ("<main><div class='error'>Oops something went wrong try again later and go to <a href='index.php'>Main page</a></div></main>");
}

function ERROR_REG() {
	echo("<main><div class='error'>This login is already taken <a href='sign_up.php'>here</a> to try again</div></main>");
}

function ERROR_EMPTY() {
	echo("<main><div class='error'>Login and / or password fields are empty type <a href='sign_up.php'>here</a> to try again");
}

function ERROR_WRONG() {
	echo("<main><div class='error'>Wrong login or / and password type <a href='sign_up.php'>here</a> to try again");
}