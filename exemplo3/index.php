<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP Orientado a Objetos</title>
</head>
<body>
    <h1>PHP POO - Exemplo 3</h1>
    <hr>
    <h2>Assuntos estudados:</h2>
    <ul>
        <li>Atribuição direta de valores às propriedades públicas</li>
        <li>Leitura direta de valores das propriedades públicas</li>
        <li>Leitura usando um método público</li>
    </ul>

<?php
require "src/Livro.php";
$livroA = new Livro;
$livroB = new Livro;

/* Atribuição direta de valores às propriedades */
$livroA->titulo = "Senhor dos Anéis";
$livroA->autor = "Tolkien";
$livroA->ano = 1954;
?>
<pre><?=var_dump($livroA, $livroB)?></pre>

<h3>Acesso direto aos dados do objetos</h3>
<ul>
    <li>Título: <b><?=$livroA->titulo?></b> </li>
    <li>Autor: <b><?=$livroA->autor?></b> </li>
    <li>Ano: <b><?=$livroA->ano?></b> </li>
</ul>

<?php
$livroB->titulo = "Ghost Rider";
$livroB->autor = "Neil Peart";
$livroB->ano = 2013;
?>

<h3>Acesso aos dados do objeto através de um método</h3>
<div>
    <?= $livroB->exibirDados() ?>
</div>

</body>
</html>