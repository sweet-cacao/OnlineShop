<?php
session_start();
$_SESSION['user-logged'] = NULL;
$_SESSION['is-admin'] = NULL;
exit(header('Location: index.php'));