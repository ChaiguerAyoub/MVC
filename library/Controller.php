<?php

class Controller
{
    function __construct()
    {
        $this->view = new View();
    }

    public function loadModel($model, $name)
    {
        $file = "model/".$model.".php";
        if( file_exists($file) ){
            require $file;
            $this->{$name} = new $model;
        }
    }
}