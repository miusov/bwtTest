<?php

class Feeds
{
	public static function getFeeds()
	{
		$db = Db::getConnection();

		$result = $db->prepare('SELECT * FROM feedback ORDER BY datein DESC');
		$result->execute();
		$array = array();
		while ( $feeds = $result->fetch(PDO::FETCH_LAZY)) {
			
			foreach ($feeds as $key => $feed)
			{
				$array[] = $feed;
			}
		}
		return $array;
	}
}