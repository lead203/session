<?php
	error_reporting(E_ALL);
	ini_set('display_startup_errors', 1);
	ini_set('display_errors', '1');

	require('lib/Session.php');

	$main = new Session;


	if ($main->isAuth()) {
		$login = $_SESSION['login'];

		if (isset($_GET['logout'])) {
			if ($_GET['logout'] == true) {
				session_destroy();
				header('Location: index.php');
			}
		}
		require('layout_admin.php');
	} else {
		header('Location: index.php');
	}
?>