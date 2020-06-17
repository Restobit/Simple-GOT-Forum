<?php
class Admin extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        Session::init();
        $isAdmin = Session::get("isAdmin");

        if ($isAdmin) {
            $this->view->render('admin/index');
        } else {
            $this->view->render('admin/access_denied');
        }
    }

    function getUsers()
    {
        $controller = new Controller();
        $controller->loadModel("Admin");
        $users = $controller->model->getAllUsers();
        return $users;
    }

    function getCommets()
    {
        $controller = new Controller();
        $controller->loadModel("Admin");
        $content = $controller->model->getAllCommets();
        return $content;
    }

    function editUser()
    {
        $this->model->editUser();
    }

    function deleteUserById()
    {
        $this->model->deleteUserById();
    }
}
