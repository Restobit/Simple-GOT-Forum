<?php
class Contact extends Controller
{

	function __construct()
	{
		parent::__construct();
	}

	function success()
	{
		$this->view->render('contact/success');
	}
	function not_success()
	{
		$this->view->render('contact/not_success');
	}

	function index()
	{
		$this->view->render('contact/index');
	}

	function process()
	{
		$result = $this->model->process();
		header("location: ../contact?action=" . $result);
	}
}
