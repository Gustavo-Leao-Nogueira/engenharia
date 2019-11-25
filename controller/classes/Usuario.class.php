<?php

require_once '../../includes/config.inc.php';
setTitle('Classe');
require_once '../../includes/header.inc.php';
require '../../includes/nav.inc.php';
require_once './Pessoa.class.php';

class Usuario extends Pessoa {

    private $endereco;
    private $complemento;
    private $cpf;

    public function __construct($id = null, $nome = '', $telefone = '', $email = '', $usuario = '', $senha = '', $endereco = '', $complemento = '', $cpf = '') {
        parent::__construct($id, $nome, $telefone, $email, $usuario, $senha);
        $this->endereco = $endereco;
        $this->complemento = $complemento;
        $this->cpf = $cpf;
    }
    
}

require_once '../../includes/footer.inc.php';
?>