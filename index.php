<?php 
include_once('site/header.php'); 
session_start();
?>
<div class="row">
	<div class="col-md-12">
		<div class="center">
			<ul>
				<li><a href="login">Вход/регистрация</a></li>
				<li><a href="weather">Погода</a></li>
				<li><a href="feedback">Оставить отзыв</a></li>
				<li><a href="feeds">Отзывы</a></li>
			</ul>
		</div>
	</div>
</div>

<?php

//ошибки

// ini_set('display_errors,1');
// error_reporting(E_ALL);


//подключение файлов

define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php');
require_once(ROOT.'/components/Db.php');


//подключение БД

$db = Db::getConnection();


//вызов router

$router=new Router();
$router->run();
?>
<?php include_once('site/footer.php') ?>


