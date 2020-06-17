<?php
class Index extends Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->view->render('index/index');
	}

	function getContent()
	{
		$controller = new Controller();
		$controller->loadModel("Index");
		$content = $controller->model->getDashboardContent();
		return $content;
	}
}
