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

// include ('classes/model_base.php');

// $clinic = new Clinic;
// echo "getAllDoctors";
// echo $clinic->getAllDoctors("DESC");
// echo "getAllPacients";
// echo $clinic->getAllPacients("ASC");
// echo "getPacients from doctor";
// echo $clinic->getPacients(1);
// echo "getDoctors from pacient";
// echo $clinic->getDoctors(2);
// $clinic->setDoctorName(1, 'Игорь');
// $clinic->setPacientName(1, 'Егор');

// $dbObject->query('UPDATE doctor SET name = 1111 WHERE doctor . doctor_id = 1');
// $doctors = $dbObject->query('SELECT * FROM doctor');
// echo "DOCTORS";
// foreach ($doctors as $value) {
// 	echo "<p>"."Doctor ID - ".$value[0]." Doctor name - ".$value[1]." Doctor specialization - ".$value[2]."</p>";
// }

// $pacients = $dbObject->query('SELECT * FROM doctor');
// echo "<br>PACIENTS";
// foreach ($pacients as $value) {
// 	echo "<p>"."Pacient ID - ".$value[0]." Pacient name - ".$value[1]."</p>";
// }

// $visits = $dbObject->query('SELECT * FROM visits');
// echo "<br>VISITS";
// foreach ($visits as $value) {

// 	echo "<p>"."Visit ID - ".$value[0]." Visit day - ".$value[1]." Doctor id - ".$value[3]." Pacient id - ".$value[4]."</p>";
// }

// // подключаем ядро сайта
// include (SITE_PATH . DS . 'core' . DS . 'core.php');

// // Загружаем router
// $router = new Router();
// // задаем путь до папки контроллеров.
// $router->setPath (SITE_PATH . 'controllers');
// // запускаем маршрутизатор
// $router->start();
