<?php
session_start();
include("../errors.php");

function matched($file, $login, $oldpw) {
	foreach ($file as $key => $value) {
		if ($login === $value['login'] && hash('whirlpool', $oldpw) === $value['passwd']) {
			$file[$key]['passwd'] = hash('whirlpool', $_POST['newpd']);
			return TRUE;
		}
	}
	return FALSE;
}

if ($_POST['login'] && $_POST['oldpw'] && $_POST['newpw']) {
	if (!file_exists('../private/passwd'))
		return ERROR404();
	$file = unserialize(file_get_contents('../private/passwd'));
	if (matched($file, $_POST['login'], $_POST['oldpw'])) {
		exit(header("Location: index.php"));
	}
	else
		return ERROR_WRONG();
}
else
	return ERROR_EMPTY();