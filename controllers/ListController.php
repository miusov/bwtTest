<?php

class ListController
{
	public function actionIndex()
	{
		if ($_SESSION['name']) {
			require_once(ROOT.'/views/list.php');
		}
		else{
			echo '<h2 style="color:red" class="vcenter">Только для зарегистрированных пользователей!</h2>';
			echo '<h3 class="vcenter"><a href="login">Регистрация</a></h3>';
		}
		

		return true;
	}
}