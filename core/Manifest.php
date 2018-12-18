<?php

class Manifest{
	
	protected $arquivo;

	public function __construct(){
	    $this->arquivo = json_decode( file_get_contents('manifest.json'), true);
	}

}