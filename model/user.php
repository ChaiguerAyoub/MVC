<?php

class user extends Model
{

	function __construct()
	{
		parent::__construct();
	}

    /**
     * Get All users record from database
     * @return stdClass
     */
    public function getAllUser(){

	    if(!isset($user))
	        $user = new \stdClass();

                $user->name = "ayoub";
                $user->email ="test";

		return $user;

	}
}