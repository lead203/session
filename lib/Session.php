<?php

	class Session
	{
		private $login;
		private $password;
		
		public function __construct()
		{
			session_start();
		}

		public function login($login, $password) {
			$this->login = $login;
			$this->password = $password;

			if ($login === 'login123' && $password === 'password123') {
				$_SESSION['login'] = $login;
				
				header('Location: admin.php');
			}
		}

	}