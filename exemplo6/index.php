<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP Orientado a Objetos</title>
</head>
<body>
    <h1>PHP POO - Exemplo 6</h1>
    <hr>
    <h2>Assuntos estudados:</h2>
    <ul>
        <li>Herança</li>
        <li>Polimorfismo</li>
    </ul>

<?php
require_once "src/Ficcao.php";
$livroFiccao = new Ficcao;
$livroFiccao->setTitulo("Senhor dos Anéis");
?>

<p> <?=$livroFiccao->getTitulo()?> </p>
<p> 
    <?=$livroFiccao->formata( $livroFiccao->getTitulo() ) ?>
</p>



</body>
</html>