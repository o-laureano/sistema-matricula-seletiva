<?php
function ConexaoBD() {
    $conexao = new PDO("mysql:host=localhost;dbname=sistema_matricula", "root", "");

    $sql = "SELECT * FROM curso WHERE id_curso=1;";
    $resultado = $conexao->query($sql);

    $cursos = $resultado->fetchAll();

    $conexao = null;

    return $cursos;
}

function InserirDados($nome, $email, $telefone) {
    try {
        $conexao = new PDO("mysql:host=localhost;dbname=sistema_matricula", "root", "");
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO aluno (nome, email, telefone) VALUES (:nome, :email, :telefone)";
        $insere = $conexao->prepare($sql);

        $insere->bindParam(':nome', $nome);
        $insere->bindParam(':email', $email);
        $insere->bindParam(':telefone', $telefone);

        $insere->execute();

        $id_aluno = $conexao->lastInsertId();

        echo "<script>alert('Dados enviados com sucesso!')</script>";

        return $id_aluno;

    } catch (PDOException $erro) {
        echo "<script>alert('Erro ao enviar dados: " . $erro->getMessage() . "')</script>";
        return null;
    } finally {

        $conexao = null;
    }
}

function ValidarDados($email, $telefone) {
    $erros = [];

    if (empty($email)) {
        $erros[] = 'O campo e-mail é obrigatório.';
    }

    if (empty($telefone)) {
        $erros[] = 'O campo telefone é obrigatório.';
    }

    return $erros;
}

function InserirDadosFormulario2($dataNascimento, $cpf, $cep, $id_aluno) {
    try {
        $conexao = new PDO("mysql:host=localhost;dbname=sistema_matricula", "root", "");
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "UPDATE aluno SET data_nascimento = :data_nascimento, cpf = :cpf, cep = :cep WHERE id_aluno = :id_aluno";
        $atualiza = $conexao->prepare($sql);

        $atualiza->bindParam(':data_nascimento', $dataNascimento);
        $atualiza->bindParam(':cpf', $cpf);
        $atualiza->bindParam(':cep', $cep);
        $atualiza->bindParam(':id_aluno', $id_aluno);

        $atualiza->execute();

        echo "<script>alert('Dados atualizados com sucesso!')</script>";
    } catch (PDOException $erro) {
        echo "<script>alert('Erro ao atualizar dados: " . $erro->getMessage() . "')</script>";
    } finally {
        $conexao = null;
    }
}

function InserirCaminhoDocumento($caminho_documento, $id_aluno) {
    try {
        $conexao = new PDO("mysql:host=localhost;dbname=sistema_matricula", "root", "");
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO documento (caminho_documento, id_aluno) VALUES (:caminho_documento, :id_aluno)";
        $insereCaminhoDocumento = $conexao->prepare($sql);
        $insereCaminhoDocumento->bindParam(':caminho_documento', $caminho_documento);
        $insereCaminhoDocumento->bindParam(':id_aluno', $id_aluno);
        $insereCaminhoDocumento->execute();

        echo "<script>alert('Documento enviado com sucesso!')</script>";
    } catch (PDOException $erro) {
        echo "<script>alert('Erro ao atualizar caminho do documento: " . $erro->getMessage() . "')</script>";
    } finally {
        $conexao = null;
    }
}