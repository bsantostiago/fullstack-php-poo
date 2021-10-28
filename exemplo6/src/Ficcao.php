<?php
require_once "Livro.php";

class Ficcao extends Livro {
    /* polimorfismo de sobreposição */
    public function formata($valor){
        return "<i>$valor</i>";
    }
}