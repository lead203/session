<?php
	error_reporting(E_ALL);
	ini_set('display_startup_errors', 1);
	ini_set('display_errors', '1');

	require('lib/Session.php');

	$main = new Session;


	if (isset($_SESSION['login'])) {
		$login = $_SESSION['login'];

		if (isset($_POST)) {
			if (isset($_GET['action'])) {
				session_unset();
				header('Location: index.php');
			}
			
		}

		require('layout_admin.php');

		
	} else {
		header('Location: index.php');
	}
?>