<?php

namespace App\Middlewares;

class Middleware {

	protected $container;

	public function __construct(){
		global $container;
		$this->container = $container;
	}

}