<?php

class Fornecedor {

    private string $nome;
    private string $cnpj;
    private string $email;

    // construtor
    public function __construct(string $nome = "", string $cnpj = "",string $email = "" ){
        $this->nome = $nome;
        $this->cnpj = $cnpj;
        $this->email = $email;
    }

    // exibir produto
    public function Exibir(){
        echo "$this->nome - $this->cnpj - $this->email<br>";
    }
    
    // GET
    public function getNome(){
        return $this->nome;
    }

    public function getCnpj(){
        return $this->cnpj;
    }
    public function getEmail(){
        return $this->email;
    }

    // SET
    public function setNome(string $nome){
        $this->nome = $nome;
    }

    public function setCnpj(string $cnpj){
        $this->cnpj = $cnpj;
    }
    
    public function setEmail(string $email){
        $this->email = $email;
    }

}

?>