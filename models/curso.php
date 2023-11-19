<?php

class Curso {
    private $id_curso;
    private $descricao;
    private $id_curso_modalidade;
    private $id_curso_nivel;
    private $valor_parcela;
    private $quantidade_parcelas;
    private $valor_total;
    private $classificacao;
    private $duracao;
    private $id_curso_tipo;
    private $imagem;
    private $nome;

    public function __construct(
        $id_curso,
        $descricao,
        $id_curso_modalidade,
        $id_curso_nivel,
        $valor_parcela,
        $quantidade_parcelas,
        $valor_total,
        $classificacao,
        $duracao,
        $id_curso_tipo,
        $imagem,
        $nome
    ) {
        $this->id_curso = $id_curso;
        $this->descricao = $descricao;
        $this->id_curso_modalidade = $id_curso_modalidade;
        $this->id_curso_nivel = $id_curso_nivel;
        $this->valor_parcela = $valor_parcela;
        $this->quantidade_parcelas = $quantidade_parcelas;
        $this->valor_total = $valor_total;
        $this->classificacao = $classificacao;
        $this->duracao = $duracao;
        $this->id_curso_tipo = $id_curso_tipo;
        $this->imagem = $imagem;
        $this->nome = $nome;
    }

     public function getIdCurso() {
            return $this->id_curso;
        }

        public function getDescricao() {
            return $this->descricao;
        }

        public function getIdCursoModalidade() {
            return $this->id_curso_modalidade;
        }

        public function getIdCursoNivel() {
            return $this->id_curso_nivel;
        }

        public function getValorParcela() {
            return $this->valor_parcela;
        }

        public function getQuantidadeParcelas() {
            return $this->quantidade_parcelas;
        }

        public function getValorTotal() {
            return $this->valor_total;
        }

        public function getClassificacao() {
            return $this->classificacao;
        }

        public function getDuracao() {
            return $this->duracao;
        }

        public function getIdCursoTipo() {
            return $this->id_curso_tipo;
        }

        public function getImagem() {
            return $this->imagem;
        }

        public function getNome() {
            return $this->nome;
        }
    }