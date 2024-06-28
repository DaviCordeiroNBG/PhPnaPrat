<?php

class Retangulo {
    private $ladoMaior;
    private $ladoMenor;

    public function setLadoMaior($maior) {
        $this->ladoMaior = $maior;
    }

    public function setLadoMenor($menor) {
        $this->ladoMenor = $menor;
    }

    public function calculaArea() {
        return $this->ladoMaior * $this->ladoMenor;
    }
}


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['calcula'])) {
   
    $retangulo = new Retangulo();
   
    $retangulo->setLadoMaior($_POST['ladoMaior']);
    $retangulo->setLadoMenor($_POST['ladoMenor']);

    echo "Área do retângulo: " . $retangulo->calculaArea();
} else {
 
?>
<form action="retangulo.php" method="post">
    Lado Maior: <input type="number" step="0.01" name="ladoMaior" required><br>
    Lado Menor: <input type="number" step="0.01" name="ladoMenor" required><br>
    <input type="submit" name="calcula" value="Calcula Área">
</form>
<?php
}
?>