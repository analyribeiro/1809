<?php
class ContaBancaria {
    private $saldo = 0;

    public function depositar($valor) {
        $this->saldo += $valor;
    }

    public function sacar($valor) {
        if ($valor <= $this->saldo) {
            $this->saldo -= $valor;
        } else {
            echo "Saldo insuficiente!<br>";
        }
    }

    public function getSaldo() {
        return $this->saldo;
    }
}

$c = new ContaBancaria();
$c->depositar(500);
$c->sacar(200);

echo "Saldo atual: R$ " . $c->getSaldo();
?>
