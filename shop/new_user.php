<?php
session_start();
include('./errors.php');

function check_user($login, $file) {
	foreach ($file as $key => $value) {
		if ($value['login'] === $login)
			return FALSE;
	}
	return TRUE;
}

function create_user($login, $passwd, $file) {
	$new_user['login'] = $_POST['login'];
	$new_user['passwd'] = hash('whirlpool', $_POST['passwd']);
	$file[] = $new_user;
	file_put_contents('./private/passwd', serialize($file));
}

if ($_POST['login'] && $_POST['passwd'] && $_POST['submit']) {
	if (!file_exists('./private/passwd'))
		return ERROR404();
	$file = unserialize(file_get_contents('./private/passwd'));
	if (check_user($_POST['login'], $file)) {
		create_user($_POST['login'], $_POST['passwd'], $file);
		$_SESSION['user-logged'] = $_POST['login'];
		$_SESSION['user-exist'] = 1;
		exit(header('Location: index.php'));
	}
	else
		return ERROR_REG();
}
else 
	return ERROR_EMPTY();