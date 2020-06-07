<?php
include('../user/create_user.php');
include('../errors.php');

$file = unserialize(file_get_contents('../private/passwd'));
if ($_POST['create_user'] && $_POST['login'] && $_POST['passwd']) {
	echo 1;
	if (!file_exists('../private/passwd'))
		return ERROR404();
	if (check_user($_POST['login'], $file)) {
		create_user($_POST['login'], $_POST['passwd'], $file);
		echo "OK";
	}
	else
		echo "BAD";
}
else if ($_POST['modify_user'] && $_POST['login']) {
	foreach ($file as $key => $value) {
		if ($_POST['login'] === $value['login']) {
			$file[$key]['admin'] = TRUE;
			file_put_contents('../private/passwd', serialize($file));
			echo $file[$key]['admin'];
		break;
		}
	}
	echo "bad";
}
else if ($_POST['delete_user'] && $_POST['login']) {
	foreach ($file as $key => $value) {
		if ($_POST['login'] === $value['login'] && $_POST['login'] != 'admin') {
			unset($file[$key]);
			file_put_contents('../private/passwd', serialize($file));
			echo "OK";
		}
	}
	echo "BAD";
}
else
	echo "BAD";