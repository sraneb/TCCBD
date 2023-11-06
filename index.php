<?php
include("conexao.php");
include("cadastro.php");
if (isset($_POST['email']) == 0){
  
  if(strlen($_POST['email']) == 0 ){
    echo "preencha seu email";
  } else if(strlen($_POST['senha']) == 0){
    echo "preencha sua senha";
  } else {

      $email = $mysqli-> real_escaoe_string($_POST['email']);
      $senha = $mysqli-> real_escaoe_string($_POST['seha']);

      $sql_code = "SELECT *FROM usuarios WHERE email='$email' AND senha ='$senha'";
      $sql_query = $mysqli->query($sql_code) or die ("Falha na execução do código SQL:". $mysqli->error):

      $quantidade = $sql_query->num_rows;

      if($quantidade == 1) {

      $usuario =$sql_query->fetch_assoc();

      if (! isset($_SESSION)){
          session_start();
      }    

      $_SESSION['id'] = $usuario['id'];
      $_SESSION['nome'] = $usuario['nome'];

      heander("location: inicio.php");
   
   } else{
        echo "falha ao logar! email ou senha incorretos ";  
   }






?>







<!DOCTYPE html>
<html lang="pt-br">
<head>
  <script src="script.js"></script>
  <link rel="stylesheet" href="login.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  <div class="main-login">
<div class="left-login"></div>
<h1 class="Tlt1">Faça login <br>Para uma vida mais saúdavel!</h1>
<img src="mbd.png" class="mbd-image" alt="mbd">


<div class="right-login"></div>
<div class="card-login">
  <h1>LOGIN</h1>
<div class="textfield">
<label for="usuario">Usuário:</label>
<input type="text" name="usuario" placeholder="Nome">
</div>
<div class="textfield">
  <label for="senha">Senha:</label>
  <input type="password" name="usuario" placeholder="Digite sua senha aqui...">
  </div>
  <button class="botao-login">login</button>
  <a href='registro.php'><button class="botao-login">crie sua conta</button></a>


</div>


  </div>
</body>
</html>
