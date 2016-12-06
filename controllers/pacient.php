<?php

/**
 * summary
 */
class Pacient extends Controller {
	/**
	 * summary
	 */
	function __construct() {
		parent::__construct();
		echo "This is a pacient page";
	}

	//вывод всех докторов, к которому ходит пациент с id=$id
	function getDoctors($id) {
		$doctors = $this->db->query('SELECT doctor_id FROM visits WHERE pacient_id ='.$id);
		$doctors = $doctors->fetchAll(PDO::FETCH_ASSOC);

		$output = array();
		$i      = 0;
		foreach ($doctors as $value) {
			$doctor     = $this->db->query('SELECT name, specialization FROM doctors WHERE id ='.$value['doctor_id']);
			$doctor     = $doctor->fetch(PDO::FETCH_ASSOC);
			$output[$i] = array($value['doctor_id'], $doctor['name'], $doctor['specialization']);
			$i++;
		}
		$this->view->doctors = $output;
		$this->view->render('pacient/index');
	}
}