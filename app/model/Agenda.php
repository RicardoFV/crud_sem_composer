<?php 

/*
    Classe responsável por salvar os dados de Agendo de contatos

*/


class Agenda{

    private int $id;
    private string $nome;
    private string $telefone;
    private string $email;
    private string $cidadeOndeMora;
    private DateTime $dataRegistro;
    
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of telefone
     */ 
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set the value of telefone
     *
     * @return  self
     */ 
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of cidadeOndeMora
     */ 
    public function getCidadeOndeMora()
    {
        return $this->cidadeOndeMora;
    }

    /**
     * Set the value of cidadeOndeMora
     *
     * @return  self
     */ 
    public function setCidadeOndeMora($cidadeOndeMora)
    {
        $this->cidadeOndeMora = $cidadeOndeMora;

        return $this;
    }
}