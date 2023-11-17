<?php

class Aluno {
    private $idAluno;
    private $nome;
    private $email;
    private $telefone;
    private $cpf;
    private $cep;
    private $dataNascimento;
    private $caminhoDocumento;

    public function __construct($nome, $email, $telefone, $cpf, $cep, $dataNascimento, $caminhoDocumento) {
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->cpf = $cpf;
        $this->cep = $cep;
        $this->dataNascimento = $dataNascimento;
        $this->caminhoDocumento = $caminhoDocumento;
    }

    // Getters
    public function getIdAluno() {
        return $this->idAluno;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getCep() {
        return $this->cep;
    }

    public function getDataNascimento() {
        return $this->dataNascimento;
    }

    public function getCaminhoDocumento() {
        return $this->caminhoDocumento;
    }
}