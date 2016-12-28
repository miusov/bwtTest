<?php

include_once ROOT.'/models/Login.php';

class LoginController
{
	public function actionIndex()
	{
		
		require_once(ROOT.'/views/login/index.php');

		$name = trim($_POST['name']);
		$surname = trim($_POST['surname']);
		$email = trim($_POST['email']);
		$sex = $_POST['sex'];
		$bdate = $_POST['bdate'];

		if (isset($_POST['register'])) {
			if ($_POST['name'] != '' && $_POST['surname'] != '' && $_POST['email'] != '') {



				$setlogin = Login::setLogin($name,$surname,$email,$sex,$bdate);
				echo '<h3 style="color:green;text-align:center" >Вы зарегистрировались!</h3>';
			}
			else{
				echo '<h3 style="color:red">Не все поля заполнены!</h3>';
			}
			
			session_start();
			$_SESSION['name']=$_POST['name'];
			$_SESSION['surname']=$_POST['surname'];
		}

		if (isset($_POST['login'])) {
			if ($login = Login::getLogin($email)) {
				session_start();
			$_SESSION['name']=$login['name'];
			$_SESSION['surname']=$login['surname'];
			echo '<script>location.href = "/bwtTest"</script>';
			}
			else{
				echo '<h3 style="color:red">Не верно!</h3>';
			}
			
		}

		if (isset($_POST['exit'])) {
			unset($_SESSION['name']);
			unset($_SESSION['surname']);
			echo '<script>location.href = "/bwtTest"</script>';
		}
		
		return true;
	}
}