<?php
class Livro {
    /* Atributo ou proprieda DA CLASSE/OBJETO */
    public $titulo;
    public $autor;
    public $ano;

                                // parâmetros
    public function __construct( $titulo, $autor, $ano ) {
        /* Atribuindo valores recebidos às propriedades
        da classe */
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ano = $ano;
    }
    
}
