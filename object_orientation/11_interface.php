<?php
# INTERFACE =  PADRONIZAÇÃO
# guia para implementar em classes com mesma estrutura
/**
 * Caso uma classe tenha a mesma estrutura de outra, é indicado o uso de INTERFACE
 *  - para que caso crie outro objeto com a mesma estrutura, 
 *      não seja esquecido de inserir alguma função
 */
interface Database {
    public function listarProdutos();
    public function adicionarProduto();
    public function alterarProduto();
}

class MysqlDB implements Database{

    # Manipulação de DB: leitura/ escrita/ alteração/ remoção
    public function listarProdutos() {

    }
    public function adicionarProduto() {
        echo "adicionando com Mysql";
    }
    public function alterarProduto() {

    }

}

class OracleDB implements Database {

    # Manipulação de DB: leitura/ escrita/ alteração/ remoção
    public function listarProdutos() {

    }
    public function adicionarProduto() {
        echo "Adicionando com Oracle";
    }
    public function alterarProduto() {
        
    }

}

class MongoDB implements Database {

    # Manipulação de DB: leitura/ escrita/ alteração/ remoção
    public function listarProdutos() {

    }
    public function adicionarProduto() {
        echo "Adicionando com MongoDB";
    }
    public function alterarProduto() {
        
    }
}

$db = new MysqlDB();
$db->adicionarProduto();