<?php
/*Função de conexão com o banco de dados*/
function ConexaoBD() {

    /*Criação de um objeto PDO para conextar com o mySQL*/
    $conexao = new PDO("mysql:host=localhost;dbname=sistema_matricula", "root", "");

    /*Comando SQL que será passado e coletado*/
    $sql = "SELECT * FROM curso WHERE id_curso=1;";

    /*Executa a função no banco e armazena os resultados em um array*/
    $resultado = $conexao->query($sql);
    $cursos = $resultado->fetchAll();

    /*Fecha a conexão com banco*/
    $conexao = null;

    /*Retorna a array com os resultados*/
    return $cursos;
}

/*Função que puxa informações sobre cada curso do banco de dados*/
function InfosCursos($id_curso) {

    /*Criação de um objeto PDO para conectar com o mySQL*/
    $conexao = new PDO("mysql:host=localhost;dbname=sistema_matricula", "root", "");

    /*Comando SQL que será passado e coletado*/
    $sql = "SELECT * FROM curso WHERE id_curso = :id_curso;";

    /*Associa o valores dos parâmetros com as variáveis.*/
    $resultado = $conexao->prepare($sql);
    $resultado->bindParam(':id_curso', $id_curso, PDO::PARAM_INT);

    /*Executa o comando SQL.*/
    $resultado->execute();

    /*É pego o primeiro resultado e seus valores são encapsulados em um array*/
    $cursos = $resultado->fetch(PDO::FETCH_ASSOC);

    /*Fecha a conexão com banco*/
    $conexao = null;

    /*Retorna a array com os resultados*/
    return $cursos;
}

/*Função que insere os dados do primeiro formulário no banco de dados*/
function InserirDados($nome, $email, $telefone) {
    /*Primeira ação do formulário é tentar executar essa função*/
    try {
        /*Criação de um objeto PDO para conectar com o mySQL*/
        $conexao = new PDO("mysql:host=localhost;dbname=sistema_matricula", "root", "");
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        /*Prepara a consulta SQL*/
        $sql = "INSERT INTO aluno (nome, email, telefone) VALUES (:nome, :email, :telefone)";
        $insere = $conexao->prepare($sql);

        /*Associa o valores dos parâmetros com as variáveis.*/
        $insere->bindParam(':nome', $nome);
        $insere->bindParam(':email', $email);
        $insere->bindParam(':telefone', $telefone);

        /*Executa o comando SQL.*/
        $insere->execute();

        /*Pega o último id_aluno registrado no banco e atribui em uma variável*/
        $id_aluno = $conexao->lastInsertId();

        /*Alerta de sucesso*/
        echo "<script>alert('Dados enviados com sucesso!')</script>";

        /*Retorna a id*/
        return $id_aluno;

    /*Caso a tentativa não dê certo, é apresentado um erro e não se retorna nada*/
    } catch (PDOException $erro) {
        echo "<script>alert('Erro ao enviar dados: " . $erro->getMessage() . "')</script>";
        return null;

    /*Caso nada dê certo, cancela a conexão com o banco*/
    } finally {
        $conexao = null;
    }
}

/*Função de validação dos dados no formulário 1*/
function ValidarDados($email, $telefone) {
    /*Atribui um array vazio para a variável erros*/
    $erros = [];

    /*Se a variável email estiver vazia, é adicionado à array de erros a mensagem de erro*/
    if (empty($email)) {
        $erros[] = 'O campo e-mail é obrigatório.';
    }

    /*Se a variável telefone estiver vazia, é adicionado à array de erros a mensagem de erro*/
    if (empty($telefone)) {
        $erros[] = 'O campo telefone é obrigatório.';
    }

    /*Retorna a variável*/
    return $erros;
}

/*Função de validação dos dados no formulário 2, que usa as varáveis do aluno como parâmetros*/
function InserirDadosFormulario2($dataNascimento, $cpf, $cep, $id_aluno) {

    /*Primeira ação do formulário é tentar executar essa função*/
    try {
        /*Criação de objeto PDO para conectar com o banco*/
        $conexao = new PDO("mysql:host=localhost;dbname=sistema_matricula", "root", "");
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        /*Formação do comando SQL*/
        $sql = "UPDATE aluno SET data_nascimento = :data_nascimento, cpf = :cpf, cep = :cep WHERE id_aluno = :id_aluno";

        /*Prepara p comando*/
        $atualiza = $conexao->prepare($sql);

        /*Associa os valores dos parâmetros à variáveis*/
        $atualiza->bindParam(':data_nascimento', $dataNascimento);
        $atualiza->bindParam(':cpf', $cpf);
        $atualiza->bindParam(':cep', $cep);
        $atualiza->bindParam(':id_aluno', $id_aluno);

        /*Execita o comando SQL*/
        $atualiza->execute();

        /*Mensagem de sucesso ou fracasso*/
        echo "<script>alert('Dados atualizados com sucesso!')</script>";
    } catch (PDOException $erro) {
        echo "<script>alert('Erro ao atualizar dados: " . $erro->getMessage() . "')</script>";

    /*Fechando a conexão com o banco*/
    } finally {
        $conexao = null;
    }
}

/*Função de inserção de documentos no formulário 3*/

function InserirCaminhoDocumento($caminho_documento, $id_aluno) {
    try {
        /*Conexão com o banco*/
        $conexao = new PDO("mysql:host=localhost;dbname=sistema_matricula", "root", "");
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        /*Formação do comando SQL*/
        $sql = "INSERT INTO documento (caminho_documento, id_aluno) VALUES (:caminho_documento, :id_aluno)";
        $insereCaminhoDocumento = $conexao->prepare($sql);

        /*Associa os valores dos parâmetros à variáveis*/
        $insereCaminhoDocumento->bindParam(':caminho_documento', $caminho_documento);
        $insereCaminhoDocumento->bindParam(':id_aluno', $id_aluno);
        $insereCaminhoDocumento->execute();

        /*Mensagem de sucesso ou fracasso*/
        echo "<script>alert('Documento enviado com sucesso!')</script>";
    } catch (PDOException $erro) {
        echo "<script>alert('Erro ao atualizar caminho do documento: " . $erro->getMessage() . "')</script>";

    /*Fechando a conexão com o banco*/
    } finally {
        $conexao = null;
    }
}