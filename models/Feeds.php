<?php

// получаем данные из БД

class Feeds
{
	public static function getFeeds()
	{
		$db = Db::getConnection();

		$result = $db->prepare('SELECT * FROM feedback ORDER BY datein DESC');
		$result->execute();
		$arr = array();
		$i=0;
		while ( $feeds = $result->fetch(PDO::FETCH_ASSOC)) {
			foreach ($feeds as $key => $value) {
				$arr[$i][$key] = $value;
				
			}
			$i++;
		}
		
		return $arr;
	}
	
}