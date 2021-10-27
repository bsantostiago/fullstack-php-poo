<?php
class Livro {
    
    public string $titulo;
    public string $autor;
    public int $ano;

                                // parâmetros
    public function __construct( string $titulo, string $autor, int $ano ) {
        
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ano = $ano;
    }
    
}
