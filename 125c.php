<?php
class Aeroporto {
    
    private $nome;
    private $cidade;

    public function __construct($nome, $cidade) {
        $this->nome = $nome;
        $this->cidade = $cidade;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }
}
?>