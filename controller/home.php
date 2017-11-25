<?php

class Home extends Controller
{
    
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		$this->loadModel("user", "user");
		$users = $this->user->getAllUser();

		$this->loadModel("post","post");
		$post = $this->post->getPost(20);

		$this->view->render('index',compact('users','post'));


	}


}