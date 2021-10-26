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
        
    </ul>

<?php
require "src/Livro.php";
$livroA = new Livro("Senhor dos Anéis", "Tolkien", 1954);
$livroB = new Livro("Ghost Rider", "Neil Peart", 2003);
?>

<pre><?=var_dump($livroA, $livroB)?></pre>



</body>
</html>