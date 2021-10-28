<?php
class Pessoa {
    private string $nome;
    private string $email;
    private int $idade;

    /* Getters: leitura de dados */
    public function getNome():string{
        return $this->nome;
    }

    public function getEmail():string{
        return $this->email;
    }

    public function getIdade():int{
        return $this->idade;
    }

    /* Setters: inserir dados */
    public function setNome(string $nome){
        $this->nome = $nome;
    }

    private function limpaEmail(string $email):string {
        return filter_var($email, FILTER_SANITIZE_EMAIL);
    }
    
    public function setEmail(string $email){
        //$this->email = $email;

        /* Algoritmo 2 (vitor/adriano) */
        //$this->email = filter_var($email, FILTER_SANITIZE_EMAIL);

        /* Algoritmo 1 (enunciado origianl do exercicio) */
        $this->email = $this->limpaEmail($email);
    }

    public function setIdade(int $idade){
        $this->idade = $idade;
    }

}