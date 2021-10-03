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

			if ($login === 'admin' && $password === '1') {
				$_SESSION['login'] = $login;

				header('Location: admin.php');
			}
		}

		public function isAuth() {
	        if (isset($_SESSION["login"])) { 
	            return true; 
	        }
	        else return false; 
	    }
     

	}