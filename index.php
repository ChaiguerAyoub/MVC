<?php

require "config.php";

//require "Library/Bootstrap.php";
//require "library/Database.php";
//require "library/Controller.php";
//require "library/View.php";
//require "library/Model.php";


function __autoload($class){
	require "library/".$class.".php";
}

$app = new Autoload();



