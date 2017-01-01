<?php

include_once ROOT.'/models/Feeds.php';

class FeedsController
{
	public function actionIndex()
	{
		if ($_SESSION['name']) {

			$feedbacks = Feeds::getFeeds();//метод getFeeds класса Feeds
			require_once(ROOT.'/views/feeds.php');
		}
		else{
			echo '<h2 style="color:red" class="vcenter">Только для зарегистрированных пользователей!</h2>';
			echo '<h3 class="vcenter"><a href="login">Регистрация</a></h3>';
		}
		

		return true;
	}
}