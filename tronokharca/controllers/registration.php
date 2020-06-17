<?php
class Registration extends Controller
{

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->view->render('registration/index');
	}

	function success()
	{
		$this->view->render('registration/success');
	}

	function not_success()
	{
		$this->view->render('registration/not_success');
	}

	function process()
	{
		$result = $this->model->process();
		header("location: ../registration?action=" . $result);
	}
}
