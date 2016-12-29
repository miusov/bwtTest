<?php
class Feedback
{
	public static function setFeedback($name,$email,$message,$datein)
	{
		$db = Db::getConnection();

		$ins = $db->prepare('INSERT INTO feedback(name, email, message, datein) VALUES(:name, :email, :message, :datein)');
		$data = array('name' => $name,
					  'email' => $email,
					  'message' => $message,
					  'datein' => $datein);
		$ins->execute($data);
	}
}
