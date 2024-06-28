<?php
class Conta {
    
    public $numero;
    public $banco;
    public $saldo;

    public function __construct($numero, $banco, $saldo) {
        $this->numero = $numero;
        $this->banco = $banco;
        $this->saldo = $saldo;
    }

    public function depositar($quantia) {
        if ($quantia > 0) {
            $this->saldo += $quantia;
            echo "Depósito de R$ " . number_format($quantia, 2, ',', '.') . " realizado com sucesso!";
        } else {
            echo "Valor para depósito deve ser positivo.";
        }
    }

    public function sacar($quantia) {
        if ($quantia > 0 && $this->saldo >= $quantia) {
            $this->saldo -= $quantia;
            echo "Saque de R$ " . number_format($quantia, 2, ',', '.') . " realizado com sucesso!";
        } else {
            echo "Valor para saque inválido ou saldo insuficiente.";
        }
    }
}
?>