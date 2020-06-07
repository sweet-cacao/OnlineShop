<?php
session_start();
include("errors.php");

function validate($file, $login, $passwd) {
	foreach ($file as $key => $value) {
		if ($value['login'] === $login && $value['passwd'] === hash('whirlpool', $passwd))
			return TRUE;
	}
	return FALSE;
}

if ($_SESSION['login'] && $_SESSION['passwd']) {
	if (!file_exists('./private/passwd'))
		return ERROR404();
	$file = unserialize(file_get_contents('./private/passwd'));
	if (validate($file, $_POST['login'], $_POST['passwd'])) {
		$_SESSION['user-logged'] = $_POST['login'];
		header('Location: index.php');
	}
	else
		return ERROR_WRONG();
}
else
	return ERROR_EMPTY();