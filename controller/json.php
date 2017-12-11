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

    function curl()
    {
        $curlObj = new curl;
        $result = $curlObj->curl("http://localhost/MVC/pays");
        $curlObj->close();

        $this->view->render("json", compact("result"));
    }

    function curlPost()
    {
        $curlObj = new curl;

        $data = ['nom' => 'chaiguer', 'prenom' => 'ayoub', 'stages' => array('stage1', 'stage2', 'stage3')];

        $result = $curlObj->getCurl($data, "http://localhost/MVC/login/login");
        $curlObj->close();

        echo($result);
        //$this->view->render("json", compact("result"));

    }


}