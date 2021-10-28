<?php
class Livro {
    
    /* Modificadores de visibilidade
    -public (padrão)
    Acesso possível na classe, nas sub-classes e fora delas (acesso em qualquer lugar)
    
    -private
    Acesso possível somente na própria classe em que foram declarados
    
    -protected
    Aceso possível na própria classe e nas sub-classes */

    private string $titulo;
    private string $autor;
    private int $ano;

    public function __construct() {
        $this->titulo = "Sem título"; 
        $this->autor = "Sem autor";
        $this->ano = 0;
    }  


    /* Métodos PÚBLICOS getters e setters
    getter -> pegar/obter/ler
    setter -> inserir/definir/colocar/setar */
    
    // Getters: métodos de acesso e leitura
    public function getTitulo():string {
        return $this->titulo;
    }

    public function getAutor():string {
        return $this->autor;
    }

    public function getAno():int {
        return $this->ano;
    }

    // Setters
    public function setTitulo(string $titulo) {
        $this->titulo = $titulo;
    }  
    
    public function setAutor(string $autor){
        $this->autor = $autor;
    }

    public function setAno(int $ano) {
        $this->ano = $ano;
    }
}
