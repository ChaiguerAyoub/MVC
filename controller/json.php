<?php

class Json extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $fh = new FileHelper();

        $data = $fh->parseCSV("../../MVC/data.csv", ",");

        $this->view->render("json", compact("data"));

    }


}