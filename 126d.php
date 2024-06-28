<?php
class Triangulo {
    private $base;
    private $altura;

    public function setBase($base) {
        if ($base > 0) {
            $this->base = $base;
        } else {
            echo "A base deve ser um valor positivo.";
        }
    }

    public function setAltura($altura) {
        if ($altura > 0) {
            $this->altura = $altura;
        } else {
            echo "A altura deve ser um valor positivo.";
        }
    }

    public function calculaArea() {
        return ($this->base * $this->altura) / 2;
    }
}
?>