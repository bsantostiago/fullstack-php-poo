<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP Orientado a Objetos</title>
</head>
<body>
    <h1>PHP POO - Exemplo 2</h1>
    <hr>
    <h2>Assuntos estudados:</h2>
    <ul>
        <li>Uso do construtor para atribuir valores às propriedades da classe/objeto</li>   
        <li>Uso da variável especial <code>$this</code> para acesso aos elementos da classe/objeto</li>
        <li>Indicação dos tipos de dados que as propriedades e parâmetros usarão</li>
    </ul>

<?php
require "src/Livro.php";
$livroA = new Livro("Senhor dos Anéis", "Tolkien", 1954);
$livroB = new Livro("Ghost Rider", "Neil Peart", 2003);
?>

<pre><?=var_dump($livroA, $livroB)?></pre>



</body>
</html>