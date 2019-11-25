<?php

require_once '../../includes/config.inc.php';
setTitle('Pessoa');
require_once '../../includes/header.inc.php';
require '../../includes/nav.inc.php';

class Pessoa {

    private $id;
    private $nome;
    private $telefone;
    private $email;
    private $usuario;
    private $senha;

    function __construct($id = null, $nome = '', $telefone = '', $email = '', $usuario = '', $senha = '') {
        $this->id = $id;
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->usuario = $usuario;
        $this->senha = $senha;
    }

    public function __get($chave) {
        return $this->$chave;
    }

    public function __set($chave, $valor) {
        $this->$chave = $valor;
    }

}

require_once '../../includes/footer.inc.php';
?>