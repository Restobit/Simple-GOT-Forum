<?php
class Characters extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view->render('characters/index');
    }
    function getCharacters()
    {
        $controller = new Controller();
        $controller->loadModel("Characters");
        $characters = $controller->model->getAllCharacters();
        return $characters;
    }
}
