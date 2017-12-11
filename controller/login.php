<?php

class Login extends controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->view->render('login');
    }

    public function login()
    {

        print_r($_GET);

    }
}
