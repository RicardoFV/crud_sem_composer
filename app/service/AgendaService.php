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
            $query = 'insert into agenda(nome,telefone, email, estado_registro) values(?,?,?,?)';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1, $agenda->getNome());
            $stmt->bindValue(2, $agenda->getTelefone());
            $stmt->bindValue(3, $agenda->getEmail());
            $stmt->bindValue(4, $agenda->getEstadoRegistro());
         
            return $stmt->execute();
        } catch (PDOException $ex) {
            $ex->getMessage();
        }
    }

    public function atualizar(Agenda $agenda, int $id)
    {
        try {
            $query = 'insert into agenda(nome,telefone, email, estado_registro) values(?,?,?,?,?)';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1, $agenda->getNome());
            $stmt->bindValue(2, $agenda->getTelefone());
            $stmt->bindValue(3, $agenda->getEmail());
            $stmt->bindValue(4, $agenda->getEstadoRegistro());
            $stmt->bindValue(5, $id);
         
            return $stmt->execute();

        } catch (PDOException $ex) {
            $ex->getMessage();
        }
    }

    public function listarTodos()
    {
        try {
            $query = 'select * from agenda';
            $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            // retorna o valor
            return $stmt->fetchAll(PDO::FETCH_OBJ);
         
        } catch (PDOException $ex) {
            $ex->getMessage();
        }
    }

    public function consultarPorID(int $id)
    {
        try {
            $query = 'select * from agenda where id = ?';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            // retorna o valor
            return $stmt->fetch(PDO::FETCH_OBJ);
        
        } catch (PDOException $ex) {
            $ex->getMessage();
        }
    }
}