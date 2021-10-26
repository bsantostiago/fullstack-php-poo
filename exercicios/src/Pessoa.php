<?php
class Pessoa {
    public $nome;
    public $email;
    public $idade;

    public function __construct($n, $e, $i){
        $this->nome = $n;
        $this->email = $e;
        $this->idade = $i;
    }

}