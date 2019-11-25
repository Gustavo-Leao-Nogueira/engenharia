<?php

require_once '../../includes/config.inc.php';
setTitle('Funcionario');
require_once '../../includes/header.inc.php';
require '../../includes/nav.inc.php';
require_once './Pessoa.class.php';


class Funcionario extends Pessoa {

    private $funcao;
    private $cnpj;

    public function __construct($id = null, $nome = '', $telefone = '', $email = '', $usuario = '', $senha = '', $funcao = '', $cnpj = '') {
        parent::__construct($id, $nome, $telefone, $email, $usuario, $senha);
        $this->funcao = $funcao;
        $this->cnpj = $cnpj;
    }

}

require_once '../../includes/footer.inc.php';
?>