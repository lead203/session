<?php

	require('lib/Session.php');

	$main = new Session;

	if (!empty($_POST['login']) && !empty($_POST['password'])) {
		$login = $_POST['login'];
		$password = $_POST['password'];

		$main->login($login, $password);
	}

	if ($main->isAuth()) {
		header('Location: admin.php');
	} else {
		require('layout_login.php');
	}

	

?>


