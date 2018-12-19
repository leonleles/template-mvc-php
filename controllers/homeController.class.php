<?php

class homeController extends Controller{

	public function index(){


        $this->setJs('assets/js/app/home.js');
		$this->loadTemplate('home', array());
	}

}