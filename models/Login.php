<?php

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



	// public static function getLogins()
	// {
	// 	$db = Db::getConnection();

	// 	$logins = array();
	// 	$result = $db->prepare('SELECT * FROM users');
	// 	$result->execute();
	// 	$i=0;
	// 	while ( $login = $result->fetch(PDO::FETCH_LAZY)) {
	// 		$logins[$i]['login']=$login['name'];
	// 		$logins[$i]['pass']=$login['surname'];
	// 		$logins[$i]['name']=$login['email'];
	// 		$logins[$i]['sex']=$login['sex'];
	// 		$logins[$i]['bdate']=$login['bdate'];

	// 		$i++;
	// 	}
	// 	return $logins;
	// }
}

