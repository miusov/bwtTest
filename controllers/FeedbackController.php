<?php

include_once ROOT.'/models/Feedback.php';

class FeedbackController
{
	public function actionIndex()
	{
		require_once(ROOT.'/views/feedback/index.php');



		$name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$message = trim($_POST['message']);
		$datein = date("Y-m-d H:i:s");

		if (isset($_POST['sendFeedback'])) {
			if ($_POST['name'] != '' && $_POST['email'] != '' && $_POST['message'] != '') {
				session_start();
				if (md5($_POST['norobot']) == $_SESSION['randomnr2'])	{ 
					$setfeedback = Feedback::setFeedback($name,$email,$message,$datein);
					echo '<h3 style="color:green;text-align:center" >Сообщение отправленно!</h3>';
				}	else {  
					echo '<h3 style="color:red;text-align:center">Не правильный проверочный код!</h3>';
				}	
			}
			else{
				echo '<h3 style="color:red;text-align:center">Не все поля заполнены!</h3>';
			}
		}
		return true;
	}
}