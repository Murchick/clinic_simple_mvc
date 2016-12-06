<?php

/**
 * summary
 */
class SomeWrong extends Controller {
	function __construct() {
		parent::__construct();

		$this->view->msg = 'This page dosent exist';
		$this->view->render('error/index');
	}
}