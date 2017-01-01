<?php

// получаем данные из БД

class Login
{
	public static function getLogin($email)
	{
		$db = Db::getConnection();

		$result = $db->prepare('SELECT * FROM users WHERE email="'.$email.'"');
		$result->execute();
		$login = $result->fetch(PDO::FETCH_LAZY);

		return $login;
	}


// записываем данные из формы регистрации в БД

	public static function setLogin($name,$surname,$email,$sex,$bdate)
	{
		$db = Db::getConnection();

		$ins = $db->prepare('INSERT INTO users(name, surname, email, sex, bdate) VALUES(:name, :surname, :email, :sex, :bdate)');
        $data = array('name' => $name,
        			  'surname' => $surname,
        			  'email' => $email,
        			  'sex' => $sex,
        			  'bdate' => $bdate);
        $ins->execute($data);
	}
}