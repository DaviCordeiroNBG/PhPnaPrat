<?php
class Quadrado {
    private $lado;

    public function setLado($lado) {
        if ($lado > 0) {
            $this->lado = $lado;
        } else {
            echo "O lado deve ser um valor positivo.";
        }
    }

    public function calculaArea() {
        return $this->lado * $this->lado;
    }
}
?>