<?php
	error_reporting(E_ALL);
	ini_set('display_startup_errors', 1);
	ini_set('display_errors', '1');

	require('lib/Session.php');

	class Main {
			
		public $session;

		public function __construct() {
			$this->session = new Session;
			$this->isLogin();
		}

		public function isLogin() {
			if (!isset($_SESSION['login'])) {
				require('layout_login.php');
			} else {
				header('Location: admin.php');
			}
		}

		public function login($login, $password) {
			$this->session->login($login, $password);
		}
	}

	$main = new Main();

	if (!empty($_POST['login']) && !empty($_POST['password'])) {
		$login = $_POST['login'];
		$password = $_POST['password'];

		$main->login($login, $password);
	}

?>


