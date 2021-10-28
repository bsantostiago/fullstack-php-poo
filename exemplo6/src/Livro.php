<?php
class Livro { /* Generalista */

    private string $titulo;
    private string $autor;
    private int $ano; 

    public function formata($valor){
        return "<b>$valor</b>";
    }

    /* Recursos protegidos: acessíveis
    na própria classe em que foram criados
    e nas sub-classes que usam herança */
    protected string $formato; // digital, impresso

    public function setFormato(string $formato){
        $this->formato = $formato;
    }

    public function getTitulo():string {
        return $this->titulo;
    }

    public function getAutor():string {
        return $this->autor;
    }

    public function getAno():int {
        return $this->ano;
    }

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
