<?php


class Autoload
{
    function __construct()
    {


        $url = $_GET['url'];
        $url = rtrim($url, "/");
        $url = explode("/", $url);
//        var_dump($url);

        // when  Controller is added it gives this error require(library/Home.php): failed to open stream: No such file or directory in C:\xampp\htdocs\MVC\index.php on line 13

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