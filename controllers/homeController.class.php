<?php

class homeController extends Controller{

	public function index(){


        $this->setJs('assets/js/modules/home.js');
		$this->loadTemplate('home', array());
	}

}