<?php
session_start();
include('../errors.php');
include('../create_user.php');

if ($_POST['login'] && $_POST['passwd'] && $_POST['submit']) {
	if (!file_exists('../private/passwd'))
		return ERROR404();
	$file = unserialize(file_get_contents('../private/passwd'));
	if (check_user($_POST['login'], $file)) {
		create_user($_POST['login'], $_POST['passwd'], $file);
		$_SESSION['user-logged'] = $_POST['login'];
		exit(header('Location: index.php'));
	}
	else
		return ERROR_REG();
}
else 
	return ERROR_EMPTY();