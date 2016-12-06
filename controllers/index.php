<?php

/**
 * summary
 */
class Index extends Controller {
	public function __construct() {
		parent::__construct();

		$sortby  = 'name';
		$sortdir = 'ASC';
		if (isset($_GET['sortdir'])) {
			$sortdir = $_GET['sortdir'];
		}
		if (isset($_GET['sortby'])) {
			$sortby = $_GET['sortby'];
		}

		$this->view->pacients = $this->getAllPacients($sortby, $sortdir);
		$this->view->doctors  = $this->getAllDoctors($sortby, $sortdir);
		$this->view->render('index/index');
	}
}
