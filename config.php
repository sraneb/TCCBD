<?php
// Configurações de conexão
$host = "localhost";        // Nome do servidor MySQL (geralmente "localhost")
$usuario = "root";   // Nome de usuário do MySQL
$senha = "";       // Senha do MySQL
$banco = "tcc3";       // Nome do banco de dados

// Dados do formulário (supondo que você está recebendo esses dados de um formulário)
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);  // Armazene senhas com hash
$data_nascimento = $_POST["data_nascimento"];

// Conexão com o banco de dados
$conexao = new mysqli($host, $usuario, $senha, $banco);

// Verifica se a conexão foi bem-sucedida
if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

// Consulta SQL de inserção (substitua 'usuarios' e os campos conforme sua tabela)
$sql = "INSERT INTO usuarios (nome, email, senha, data_nascimento) VALUES (?, ?, ?, ?)";

// Preparar a declaração
$stmt = $conexao->prepare($sql);

// Verifique se a preparação da declaração foi bem-sucedida
if ($stmt === false) {
    die("Erro na preparação da declaração: " . $conexao->error);
}

// Vincular os parâmetros
$stmt->bind_param("ssss", $nome, $email, $senha, $data_nascimento);

// Executar a declaração
if ($stmt->execute()) {
    echo "Registro bem-sucedido!";
} else {
    echo "Erro ao registrar: " . $stmt->error;
}

// Fechar a declaração e a conexão quando terminar
$stmt->close();
$conexao->close();
?>
