<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP Orientado a Objetos</title>
</head>
<body>
    <h1>PHP POO - Exemplo 5</h1>
    <hr>
    <h2>Assuntos estudados:</h2>
    <ul>
        <li>Herança</li>
        <li>Recursos gerais vindos da superclasse</li>
        <li>Recursos específicos programados nas subclasses</li>
        <li>Uso de recursos públicos, privados e protegidos</li>
    </ul>

<?php
require "src/Tecnico.php";
require "src/Ficcao.php";

$livroTecnico = new Tecnico;
$livroFiccao = new Ficcao;

$livroTecnico->setTitulo("Modelagem de dados");
$livroTecnico->setFormato("digital");

$livroFiccao->setTitulo("Harry Potter");

?>
<pre>
<?=var_dump($livroTecnico, $livroFiccao)?>
</pre>

<div>
    <h2>Dados do livro técnico:</h2>
    <?=$livroTecnico->lerDados()?>
</div>

</body>
</html>