<?php

class Sequencia {
    private $inicio;
    private $fim;

    public function setInicio($inicio) {
        $this->inicio = $inicio;
    }

    public function setFim($fim) {
        $this->fim = $fim;
    }

    public function exibirTodosNumeros() {
        for ($i = $this->inicio; $i <= $this->fim; $i++) {
            echo $i . " ";
        }
    }

    public function exibirPares() {
        for ($i = $this->inicio; $i <= $this->fim; $i++) {
            if ($i % 2 == 0) {
                echo $i . " ";
            }
        }
    }

    public function exibirImpares() {
        for ($i = $this->inicio; $i <= $this->fim; $i++) {
            if ($i % 2 != 0) {
                echo $i . " ";
            }
        }
    }
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $sequencia = new Sequencia();
    
    $sequencia->setInicio($_POST['inicio']);
    $sequencia->setFim($_POST['fim']);
    
    if (isset($_POST['exibirTodos'])) {
        echo "Todos os números: ";
        $sequencia->exibirTodosNumeros();
    } elseif (isset($_POST['exibirPares'])) {
        echo "Números pares: ";
        $sequencia->exibirPares();
    } elseif (isset($_POST['exibirImpares'])) {
        echo "Números ímpares: ";
        $sequencia->exibirImpares();
    }
} else {
?>
<form action="" method="post">
    Início da sequência: <input type="number" name="inicio" required><br>
    Fim da sequência: <input type="number" name="fim" required><br>
    <input type="submit" name="exibirTodos" value="Exibir Todos os Números">
    <input type="submit" name="exibirPares" value="Exibir Números Pares">
    <input type="submit" name="exibirImpares" value="Exibir Números Ímpares">
</form>
<?php
}
?>