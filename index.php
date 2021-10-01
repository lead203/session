<?php
	error_reporting(E_ALL);
	ini_set('display_startup_errors', 1);
	ini_set('display_errors', '1');

	require('lib/Session.php');

	$main = new Session;

	if ($main->isAuth()) {
		header('Location: index.php');
	} else {
		require('layout_login.php');
	}

	if (!empty($_POST['login']) && !empty($_POST['password'])) {
		$login = $_POST['login'];
		$password = $_POST['password'];

		$main->login($login, $password);
	}

?>


