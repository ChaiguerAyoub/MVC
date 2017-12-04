<?php


class Autoload
{
    function __construct()
    {


        $url = $_GET['url'];
        $url = rtrim($url, "/");
        $url = explode("/", $url);


        $fichier = "controller/" . ucfirst($url[0]) . ".php"; 
        if (file_exists($fichier)){
            require $fichier;
            $controller = new $url[0];


            $fichier_model = "model/$url[0]Model.php";
            if( file_exists($fichier_model) ){
                require $fichier_model;
                $model = $url[0]."Model";
                $controller->model = new $model;
            }



            if (isset($url[1])){
                $controller->{$url[1]}();

            }else{
                //echo ("la methode n'existe pas");
                $controller->index();
            }


        }else{
            echo ("le controller ".$url[0]." n'existe pas");
        }
    }
}