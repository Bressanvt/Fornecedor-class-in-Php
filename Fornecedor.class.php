<?php

class Fornecedor {

    private string $nome;
    private string $cnpj;
    private string $email;
    private string $telefone;

    // construtor
    public function __construct(string $nome = "", string $cnpj = "",string $email = "", string $telefone = "" ){
        $this->nome = $nome;
        $this->cnpj = $cnpj;
        $this->email = $email;
        $this->telefone = $telefone;
    }
    // exibir produto
    public function Exibir(){
        echo "$this->nome - $this->cnpj - $this->email - $this->telefone <br>";
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

    public function getTelefone(){
        return $this->telefone;
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

    public function setTelefone(string $telefone){
        $this->telefone = $telefone;
    }
}
?>