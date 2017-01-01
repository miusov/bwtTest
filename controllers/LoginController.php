<?php

include_once ROOT.'/models/Login.php';

class LoginController
{
	public function actionIndex()
	{
		
		require_once(ROOT.'/views/login.php');

		$name = trim($_POST['name']);
		$surname = trim($_POST['surname']);
		$email = trim($_POST['email']);
		$sex = $_POST['sex'];
		$bdate = $_POST['bdate'];

		if (isset($_POST['register'])) {//регистрация пользователя
			if ($_POST['name'] != '' && $_POST['surname'] != '' && $_POST['email'] != '') {//проверка полей на заполнение

				$setlogin = Login::setLogin($name,$surname,$email,$sex,$bdate);//метод setLogin класса Login
				echo '<h3 style="color:green;text-align:center" >Вы зарегистрировались!</h3>';
			}
			else{
				echo '<h3 style="color:red;text-align:center">Не все поля заполнены!</h3>';
			}
			
			session_start();//записываем пользователя в сессию
			$_SESSION['name']=$_POST['name'];
			$_SESSION['surname']=$_POST['surname'];
			$_SESSION['email']=$_POST['email'];
		}

		if (isset($_POST['login'])) {//вход пользователя
			if ($login = Login::getLogin($email)) {//метод getLogin класса Login
				session_start();
			$_SESSION['name']=$login['name'];
			$_SESSION['surname']=$login['surname'];
			echo '<script>location.href = "weather"</script>';
			}
			else{
				echo '<h3 style="color:red;text-align:center">Не верно!</h3>';
			}
			
		}

		if (isset($_POST['exit'])) {//выхо из сессии
			unset($_SESSION['name']);
			unset($_SESSION['surname']);
			echo '<script>location.href = "login"</script>';
		}
		
		return true;
	}
}