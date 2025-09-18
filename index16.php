<?php
class Pagamento {
    public function processar() {
        echo "Processando pagamento...";
    }
}

class CartaoCredito extends Pagamento {
    public function processar() {
        echo "Pagamento com cartão de crédito.";
    }
}

class Boleto extends Pagamento {
    public function processar() {
        echo "Pagamento via boleto.";
    }
}

$p = new CartaoCredito();
$p->processar();
?>
