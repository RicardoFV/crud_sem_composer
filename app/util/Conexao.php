<?php 

class Conexao 
{
    private string $BANCO = 'crud_simples';
    private string $HOST = 'localhost';
    private string $USER = 'root';
    private string $SENHA = '1234';

    // criando a conexão com o banco de dados
    public function conectar(){
        try{
            $conexao  = new PDO("mysql:host=$this->HOST;dbname=$this->BANCO",
            "$this->USER",
            "$this->SENHA");

            return $conexao;

        }catch(PDOException $ex){
            $ex->getMessage();
        }
    }
}