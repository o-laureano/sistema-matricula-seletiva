<?php
require_once '..\models\ConexaoBancoDeDados.php';
require_once '..\models\Curso.php';

class Controlador {
    public function obterCursoPorId($idCurso) {
        $bancoDeDados = new ConexaoBancoDeDados('localhost', 'sistema_matricula', 'root', '');
        $curso = new Curso();

        $sql = "SELECT * FROM curso WHERE id_curso = $idCurso";
        $resultados = $bancoDeDados->consultaDados($sql);

        $bancoDeDados->fecharConexao();

        if ($resultados) {
            // Criar instância de Curso com os valores do banco de dados
            $curso = new Curso(
                $resultados[0]['id_curso'],
                $resultados[0]['descricao'],
                $resultados[0]['id_curso_modalidade'],
                $resultados[0]['id_curso_nivel'],
                $resultados[0]['valor_parcela'],
                $resultados[0]['quantidade_parcelas'],
                $resultados[0]['valor_total'],
                $resultados[0]['classificacao'],
                $resultados[0]['duracao'],
                $resultados[0]['id_curso_tipo'],
                $resultados[0]['imagem'],
                $resultados[0]['nome']
            );

            return $curso;
        }

        return null;
    }
}
