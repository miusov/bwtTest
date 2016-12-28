<?php

class Db
{
	public static function getConnection()
	{
		$paramsPath = ROOT.'/config/db_params.php';
		$params = include($paramsPath);

		$options=array(
			PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
			PDO::MYSQL_ATTR_INIT_COMMAND=>'set names utf8'
			);
		$db = new PDO("mysql:host=".$params['host'].";dbname=".$params['dbname'], $params['user'], $params['password'],$options);

		return $db;
	}
}