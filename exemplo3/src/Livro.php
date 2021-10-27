<?php
class Livro {
    
    public string $titulo;
    public string $autor;
    public int $ano;

    public function __construct() {
        /* Definindo valores padrão/iniciais 
        para as propriedades */
        $this->titulo = "Sem título"; 
        $this->autor = "Sem autor";
        $this->ano = 0;
    }

    // Método
    public function exibirDados(){
        echo "<p> $this->titulo </p>";
        echo "<p> $this->autor </p>";
        echo "<p> $this->ano </p>";
    }
    
}
