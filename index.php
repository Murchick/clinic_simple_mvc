<?php
// включим отображение всех ошибок
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
// подключаем конфиг
include ('config.php');
// // Соединяемся с БД
$dbObject = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
$dbObject->exec('SET CHARACTER SET utf8');

require_once 'core/bootstrap.php';
require_once 'core/controller.php';
require_once 'core/view.php';
$app = new Bootstrap();
