<?php
class Livro {
    /* Propriedades ou atributos */
    public $titulo;
    public $autor;
    public $edicao;
    public $ano;

    /* Métodos (funções) */

    // Método "mágico" construtor
    public function __construct() {
        echo "construct executado...";
    }

    // Método "mágico" destrutor/destruidor
    public function __destruct() {
        echo "destruct executado...";
    }
}
