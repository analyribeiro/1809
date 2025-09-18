<?php
class Mensagem {
    public function enviar() {
        echo "Enviando mensagem...";
    }
}

class Email extends Mensagem {
    public function enviar() {
        echo "Enviando email.";
    }
}

class SMS extends Mensagem {
    public function enviar() {
        echo "Enviando SMS.";
    }
}

$m1 = new Email();
$m2 = new SMS();

$m1->enviar();
echo "<br>";
$m2->enviar();
?>
