<?php

class pays extends Controller
{


    function __construct()
    {
        parent::__construct();

    }

    /**
     *
     */
    function index()
    {

        $countries = array(
            "pays" => array(
                array(
                    "nom" => "Maroc",
                    "villes" => array("Rabat", "Casablanca", "Asfi")
                ),
                array(
                    "nom" => "France",
                    "villes" => array("Paris", "Lile", "bordeau")
                ),
                array(
                    "nom" => "Algerie",
                    "villes" => array("Algerie", "Wahran", "annaba")
                ),
            ));


        echo json_encode($countries);
        //$this->view->render('pays', compact("countries"));
    }


}