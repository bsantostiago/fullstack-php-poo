<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP Orientado a Objetos</title>
</head>
<body>
    <h1>PHP POO - Exemplo 4</h1>
    <hr>
    <h2>Assuntos estudados:</h2>
    <ul>
        <li>Modificadores de visibilidade:
            public, private e protected
        </li>
        <li>Encapsulamento usando getters e setters</li>
    </ul>

<?php
require "src/Livro.php";
$livroA = new Livro;
$livroB = new Livro;

// Atribuição via setter
$livroA->setTitulo("Senhor dos Anéis");
$livroA->setAutor("Tolkien");
$livroA->setAno(1954);
?>
<pre><?=var_dump($livroA, $livroB)?></pre>

<h3></h3>
<ul>
    <!-- Leitura via getter -->
    <li>Título: <b> <?=$livroA->getTitulo()?> </b> </li>
    <li>Autor: <b> <?=$livroA->getAutor()?> </b> </li>
    <li>Ano: <b> <?=$livroA->getAno()?> </b> </li>
</ul>
</body>
</html>