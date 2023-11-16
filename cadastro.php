<?php
include('./processos/conexao.php'); // Adiciona o ponto e vírgula no final

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$genero = $_POST['genero'];

// Suponho que você tenha uma coluna 'id' na sua tabela com autoincrement, portanto, não é necessário especificar o valor de 'id' na inserção.

$sql = "INSERT INTO usuario (nome, email, senha, genero) VALUES ('$nome', '$email', '$senha', '$genero')";

if (mysqli_query($mysqli, $sql)) { // Correção na sintaxe do if
    echo "Usuário cadastrado com sucesso";
} else {
    echo "Erro: " . mysqli_connect_error($mysqli); // Correção do nome da função
}

mysqli_close($mysqli);
?>
