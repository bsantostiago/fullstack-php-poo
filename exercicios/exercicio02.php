<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <h1>Exercício POO 2 (resolvido)</h1>

<?php
require "src/Pessoa.php";
$pessoa = new Pessoa;
$pessoa->setNome("Tiago");
$pessoa->setEmail("tiago_\ santos\\@gmail .com");
$pessoa->setIdade(38);
?>

<p> <?=$pessoa->getNome()?> </p> 
<p> <?=$pessoa->getEmail()?> </p> 
<p> <?=$pessoa->getIdade()?> </p> 

</body>
</html>