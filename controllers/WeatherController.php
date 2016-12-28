<?php

class WeatherController
{
	public function actionIndex()
	{
		

		$gismeteo = file_get_contents("http://informer.gismeteo.ru/rss/34601.xml");
		preg_match_all("#<item.*?>(.*?)</item>#is", $gismeteo, $pogoda);
		$day=$pogoda[0];
		$data=array();
		$i=0;
		foreach ($day as $value) {
			preg_match("#<description>(.*?)</description>#is", $value,$description);
			preg_match("#<title>(.*?)</title>#is", $value,$title);
			preg_match("#<enclosure url=\"(.*?)\" length=\"2000\" type=\"image/gif\" />#is", $value,$pic);
			preg_match("#<link>(.*?)</link>#is", $value,$link);
			$data[$i]['title']=$title[1];
			$data[$i]['desc']=$description[1];
			$data[$i]['pic']=$pic[1];
			$data[$i]['link']=$link[1];
			$i++;
		}
		require_once(ROOT.'/views/weather/index.php');
		return true;
	}
}