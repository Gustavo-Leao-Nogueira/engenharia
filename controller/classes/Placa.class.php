<?php

require_once '../../includes/config.inc.php';
setTitle('Placa');
require_once '../../includes/header.inc.php';

class Placa {

    private $id;
    private $altura;
    private $largura;
    private $cor_de_fundo;
    private $cor_da_frase;
    private $frase;

    public function __construct($id = null, $altura = 0, $largura = 0, $cor_de_fundo = '', $cor_da_frase = '') {

        $this->id = $id;
        $this->altura = $altura;
        $this->largura = $largura;
        $this->cor_de_fundo = $cor_de_fundo;
        $this->cor_da_frase = $cor_da_frase;
    }

}

require_once '../../includes/footer.inc.php';
?>