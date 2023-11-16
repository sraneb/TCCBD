<?php
include('./processos/conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) 
 {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");

        } 

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
     body {
  margin: 0;
  padding: 0;
  font-family: 'Arial', sans-serif;
  background-image: url('fundo.jpg'); /* Adicione o link da sua imagem de background */
  background-size: cover;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  color: #fff;
}

form {
  width: 60%;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  padding: 30px 35px;
  background-color: #2f2841;
  border-radius: 20px;
  box-shadow: 0px 10px 40px #00000056;
}

h1 {
    color: #77ffc0; /* Branco */
  
}

label {
  display: block;
  margin-bottom: 8px;
  color: #ffffff; /* Branco */
}

input {
  width: 100%;
  padding: 8px;
  margin-bottom: 16px;
  box-sizing: border-box;
  color: #2f2841;; /* Branco */
}

button {
  width: 100%;
  padding: 16px 0px;
  margin: 25px;
  border: none;
  border-radius: 8px;
  outline: none;
  text-transform: uppercase;
  font-weight: 800;
  letter-spacing: 1px;
  color: #ffffff; /* Branco */
  background-color: #77ffc0;
  cursor: pointer;
  box-shadow: 0px 10px 40px -12px #00ff88;
}

button:hover {
  background-color: #708090;
}

a {
  text-decoration: none;
  color: #ffffff; /* Branco */
}

    </style>
</head>
<body>
    <form action="" method="POST">
        <h1>Acesse sua conta</h1>
        <p>Por favor, faça login para acessar sua conta.</p>
        <label for="email">E-mail:</label>
        <input type="text" name="email" required>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required>

        <button type="submit">Entrar</button>
        <br><br>

        <button type="button" onclick="window.location.href='registro.php'">Registrar</button>
        
        <br><br>
        <?php
        // Exibir a mensagem de erro se existir
        if (isset($erro)) {
            echo "<p style='color: red;'>$erro</p>";
        }
        ?>
    </form>
</body>
</html>
