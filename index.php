<?php 
include_once('template/header.php'); 
session_start();
?>
<div class="row">
	<div class="col-md-12">
		<div class="center">
			<ul>
				<li><a href="login">Вход/регистрация</a></li>
				<li><a href="weather">Погода</a></li>
				<li><a href="feedback">Оставить отзыв</a></li>
				<li><a href="list">Отзывы</a></li>
			</ul>
		</div>
	</div>
</div>
<?php include_once('template/footer.php') ?>
<?php

//ошибки

// ini_set('display_errors,1');
// error_reporting(E_ALL);


//подключение файлов

define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php');
require_once(ROOT.'/components/Db.php');


//подключение БД



//вызов router

$router=new Router();
$router->run();
?>


