<?php
require_once "Fornecedor.class.php";

$fornecedor = new Fornecedor("Empresa x");

echo $fornecedor->getNome();
        echo "<br>";

$fornecedor->setNome("Vitor");

echo $fornecedor->getNome();
//-------------------------//
echo $fornecedor->getCnpj();
    echo "<br>";

$fornecedor->setCnpj("111.111.111.11");

echo $fornecedor->getCnpj();
//-------------------------//
echo $fornecedor->getEmail();
    echo "<br>";

$fornecedor->setEmail("EmpresaX@email.com");

echo $fornecedor->getEmail();
//-------------------------//
echo $fornecedor->getTelefone();
    echo "<br>";

$fornecedor->setTelefone("(14)99741-0000");

echo $fornecedor->getTelefone();
//-------------------------//

?>