<?php

class Curso {
    private $idCurso;
    private $descricao;
    private $idCursoModalidade;
    private $idCursoNivel;
    private $valorParcela;
    private $quantidadeParcelas;
    private $valorTotal;
    private $classificacao;
    private $duracao;
    private $idCursoTipo;
    private $imagem;

    public function __construct(
        $descricao,
        $idCursoModalidade,
        $idCursoNivel,
        $valorParcela,
        $quantidadeParcelas,
        $valorTotal,
        $classificacao,
        $duracao,
        $idCursoTipo,
        $imagem
    ) {
        $this->descricao = $descricao;
        $this->idCursoModalidade = $idCursoModalidade;
        $this->idCursoNivel = $idCursoNivel;
        $this->valorParcela = $valorParcela;
        $this->quantidadeParcelas = $quantidadeParcelas;
        $this->valorTotal = $valorTotal;
        $this->classificacao = $classificacao;
        $this->duracao = $duracao;
        $this->idCursoTipo = $idCursoTipo;
        $this->imagem = $imagem;
    }

    // Getters
    public function getIdCurso() {
        return $this->idCurso;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getIdCursoModalidade() {
        return $this->idCursoModalidade;
    }

    public function getIdCursoNivel() {
        return $this->idCursoNivel;
    }

    public function getValorParcela() {
        return $this->valorParcela;
    }

    public function getQuantidadeParcelas() {
        return $this->quantidadeParcelas;
    }

    public function getValorTotal() {
        return $this->valorTotal;
    }

    public function getClassificacao() {
        return $this->classificacao;
    }

    public function getDuracao() {
        return $this->duracao;
    }

    public function getIdCursoTipo() {
        return $this->idCursoTipo;
    }

    public function getImagem() {
        return $this->imagem;
    }
}
