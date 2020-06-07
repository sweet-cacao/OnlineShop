<?php

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
	$new_user['admin'] = FALSE;
	$file[] = $new_user;
	file_put_contents('../private/passwd', serialize($file));
}