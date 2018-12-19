<?php

class ajaxExemploController extends Ajax {


    public function index () {
        $acao = "";

        if (isset($_POST['acao'])) {
            $acao = addslashes($_POST['acao']);

            if (isset($_POST['dados'])) {
                $dados = $_POST['dados'];
            }
        }

        switch ($acao) {
            case 'teste':

                break;
        }

    }
}