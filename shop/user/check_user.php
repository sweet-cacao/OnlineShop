<?php
session_start();
include("../errors.php");

function validate($file, $login, $passwd) {
	foreach ($file as $key => $value) {
		if ($file[$key]['login'] === $_POST['login'] && $file[$key]['passwd'] === hash('whirlpool', $passwd)) {
			if ($file[$key]['admin'])
				$_SESSION['is-admin'] = TRUE;
			return TRUE;
		}
	}
	return FALSE;
}

if ($_SESSION['login'] && $_SESSION['passwd']) {
	if (!file_exists('../private/passwd'))
		return ERROR404();
	$file = unserialize(file_get_contents('../private/passwd'));
	if (validate($file, $_POST['login'], $_POST['passwd'])) {
		$_SESSION['user-logged'] = $_POST['login'];
		if ($_SESSION['is-admin'])
			exit(header('Location: ../admin.php'));
		exit(header('Location: ../index.php'));
	}
	else
		return ERROR_WRONG();
}
else
	return ERROR_EMPTY();