<?php

/**
 * summary
 */
class Controller {
	function __construct() {
		global $dbObject;
		$this->db = $dbObject;

		$this->view = new View();
	}
	//вывод всех пациентов
	function getAllPacients($sortby = 'name', $sortdir = 'ASC') {
		$pacients = $this->db->query('SELECT * FROM pacients ORDER BY '.$sortby.' '.$sortdir);
		// $pacients = $pacients->fetchAll(PDO::FETCH_ASSOC);
		$output = array();
		$i      = 0;
		foreach ($pacients as $value) {
			$output[$i] = array($value[0], $value[1], date("Y-m-d", strtotime($value[2])));
			$i++;
		}
		return $output;
	}
	//вывод всех докторов
	function getAllDoctors($sortby = 'name', $sortdir = 'ASC') {
		$doctors = $this->db->query('SELECT * FROM doctors ORDER BY '.$sortby.' '.$sortdir);
		// $doctors = $doctors->fetchAll(PDO::FETCH_ASSOC);
		$output = array();
		$i      = 0;
		foreach ($doctors as $value) {
			$output[$i] = array($value[0], $value[1], $value[2]);
			$i++;
		}
		return $output;
	}
	//вывод всех пациентов доктора с id=$id
	public function getPacients($id) {
		$pacients = $this->db->query('SELECT pacient_id FROM visits WHERE doctor_id ='.$id);
		$pacients = $pacients->fetchAll(PDO::FETCH_ASSOC);

		$output = array();
		$i      = 0;
		foreach ($doctors as $value) {
			$pacient_name = $this->db->query('SELECT name FROM pacients WHERE id ='.$value['pacient_id']);
			$pacient_name = $pacient_name->fetch(PDO::FETCH_ASSOC);
			$output[$i]   = array($value['pacient_id'], $pacient_name['name']);
			$i++;
		}
		$this->view->pacients = $output;
		$this->view->render('doctor/index');
	}
	//задать имя доктора по id
	function setDoctorName($id, $name) {
		$this->db->query('UPDATE doctor SET name = "'.$name.'" WHERE doctor . doctor_id = '.$id);
	}
	//задать имя пациента по id
	function setPacientName($id, $name) {
		$this->db->query('UPDATE pacients SET name = "'.$name.'" WHERE pacients . pacient_id = '.$id);
	}
}