<?php
session_start();
$_SESSION['user-logged'] = NULL;
exit(header('Location: index.php'));