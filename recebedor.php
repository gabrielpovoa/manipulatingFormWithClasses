<?php
require 'FormHandler.php';

$formHandler = new FormHandler();

$formHandler->processFormData();

$nome = $formHandler->getNome();
$idade = $formHandler->getIdade();
$preferencias = $formHandler->getPreferencia();

echo "Nome: ".$nome."<br>";
echo "Idade: ".$idade."<br>";
?>

<ul>
<?php 
    foreach($preferencias as $preferencias) {
        echo "<li>$preferencias</li>";
    }
?>
</ul>

