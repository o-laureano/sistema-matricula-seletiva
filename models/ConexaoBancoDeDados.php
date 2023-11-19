<?php
class  ConexaoBancoDeDados {
    private $conexao;

    public function __construct($servidor, $banco, $usuario, $senha) {
        try {
            $this->conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
        } catch (PDOException $erro) {
            echo "Erro na conexão " . $erro->getMessage();
        }
    }

    public function consultaDados($sql) {
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->execute();
            $resultados = $consulta->fetchAll(PDO::FETCH_ASSOC);
            return $resultados;
        } catch (PDOException $erro) {
            echo "Erro na consulta: " . $erro->getMessage();
            return false;
        }
    }

    public function fecharConexao() {
        $this->conexao = null;
    }
}