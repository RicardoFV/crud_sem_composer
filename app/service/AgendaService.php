<?php

// incluindo os arquivos necessários
include_once '../model/Agenda.php';
include_once '../util/Conexao.php';

class AgendaService{

    private $conexao;

    function __construct()
    {
        $this->conexao = (new Conexao())->conectar();
    }

    public function cadastrar(Agenda $agenda)
    {
        try {
            $query = 'insert into agenda(nome,telefone, email, cidade_registro) values(?,?,?,?)';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1, $agenda->getNome());
            $stmt->bindValue(2, $agenda->getTelefone());
            $stmt->bindValue(3, $agenda->getEmail());
            $stmt->bindValue(4, $agenda->getCidadeOndeMora());
         
            return $stmt->execute();
        } catch (PDOException $ex) {
            $ex->getMessage();
        }
    }
}