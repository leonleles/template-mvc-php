<?php

class Exemplo extends Controller {

    public function index() {
        $dados = array();

        $this->setCss('assets/css/exemplo.css');
        $this->setJs('assets/js/clienteedit.js');

        //Nome da view
        $this->loadTemplate('exemplo', $dados);
    }
}