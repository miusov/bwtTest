<?php

// парсим погоду с gismeteo.ua и выводм на страницу

class WeatherController
{
	public function actionIndex()
	{
		if ($_SESSION['name']) {//только для зарегистрированных пользователей
			$gismeteo = file_get_contents("https://www.gismeteo.ua/weather-zaporizhia-5093/");//возвращает содержимое в виде строки
			preg_match('#<h1 class="wtitle">(.*?)</h1>#is', $gismeteo, $city);//возвращает совпадения по регулярному выражению
			preg_match_all("#<table>(.*?)</table>#is", $gismeteo, $pogoda);//возвращает все совпадения по регулярному выражению
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