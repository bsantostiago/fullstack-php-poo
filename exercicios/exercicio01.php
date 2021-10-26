<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <h1>Exercício POO 1 (resolvido)</h1>

<?php
require "src/Pessoa.php";
$pessoaA = new Pessoa("Tiago", "tiago@gmail", 38);
$pessoaB = new Pessoa("Chaves", "chaves@gmail", 8);
?>
<pre><?=var_dump($pessoaA,$pessoaB)?></pre>

</body>
</html>