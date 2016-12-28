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
<?php 
include_once('template/header.php'); 
session_start();
?>

<?php include_once('template/footer.php') ?>