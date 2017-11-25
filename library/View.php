<?php

class View
{
	public function render($view, $args = []){
		extract($args, EXTR_SKIP);

		$file = dirname(__DIR__) . "/view/$view.php";  // relative to Core directory
		//echo $file;

		if(file_exists($file))
			require $file;

		else echo "View not found";
	}
}