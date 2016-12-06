<?php
/**
 * summary
 */
class Doctor extends Controller {
	function __construct() {
		parent::__construct();

		echo "This is a doctor page";
	}
	//вывод всех пациентов доктора с id=$id
	function getPacients($id) {
		$pacients = $this->db->query('SELECT pacient_id FROM visits WHERE doctor_id ='.$id);
		$pacients = $pacients->fetchAll(PDO::FETCH_ASSOC);

		$output = array();
		$i      = 0;
		foreach ($pacients as $value) {
			$pacient_name = $this->db->query('SELECT name FROM pacients WHERE id ='.$value['pacient_id']);
			$pacient_name = $pacient_name->fetch(PDO::FETCH_ASSOC);
			$output[$i]   = array($value['pacient_id'], $pacient_name['name']);
			$i++;
		}
		$this->view->pacients = $output;
		$this->view->render('doctor/index');
	}
}