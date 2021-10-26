<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP Orientado a Objetos</title>
</head>
<body>
    <h1>PHP POO - Exemplo 1</h1>
    <hr>
    <h2>Assuntos estudados:</h2>
    <ul>
        <li>Criação de classe</li>
        <li>Importação do arquivo de classe</li>
        <li>Criação de objetos (instâncias)</li>
        <li>Definição de métodos construtor e destrutor</li>
    </ul>

<?php
// Importando a classe
require "src/Livro.php";

// Instanciando um objeto a partir da classe Livro
$livroA = new Livro;
$livroB = new Livro;
$livroC = new Livro;
?>
<pre><?=var_dump($livroA)?></pre>
<pre><?=var_dump($livroB)?></pre>
<pre><?=var_dump($livroC)?></pre>



</body>
</html>