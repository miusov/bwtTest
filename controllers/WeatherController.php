<?php

class WeatherController
{
	public function actionIndex()
	{
		if ($_SESSION['name']) {
			$gismeteo = file_get_contents("https://www.gismeteo.ua/weather-zaporizhia-5093/");
			preg_match('#<h1 class="wtitle">(.*?)</h1>#is', $gismeteo, $city);
			preg_match_all("#<table>(.*?)</table>#is", $gismeteo, $pogoda);
			$day=$pogoda[0];
			require_once(ROOT.'/views/weather.php');
		}
		else{
			echo '<h2 style="color:red" class="vcenter">Только для зарегистрированных пользователей!</h2>';
			echo '<h3 class="vcenter"><a href="login">Регистрация</a></h3>';
		}

		return true;
	}
}