<?php

class Manifest {

    public $arquivo = [];

    public function __construct() {
        $this->arquivo = json_decode(file_get_contents('manifest.json'), true);
    }

    public function check($array) {
        if (count($array) > 0 && isset($array['module']) && isset($array['class'])) {

            foreach ($this->arquivo[$array['module']] as $i => $v) {
                if ($i == $array['class']){
                    return $v;
                }
            }

            return false;

        } else {
            return false;
        }
    }

}