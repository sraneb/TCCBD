<!DOCTYPE html>
<html lang="pt-br">
<head>
  <script src="script.js"></script>
  <link rel="stylesheet" href="login.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>registro</title>
</head>
<style>



body{
margin: 0;
}
body *{
  box-sizing: border-box;
}
.main-login{ width: 100vw;
height: 100vh;
background-image:linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7) ), url('deserto.jpg');
display: flex;
justify-content: center;
align-items: center;
}

.left-login{
width: 50vw;
height: 100vh;
display: flex;
justify-content: center;
align-items: center;
flex-direction: column;

}
.mbd-image{
  width: 35vw;
}



.Tlt1{
color: #77ffc0;

}

.right-login{
 width: 50vw;
 height: 100vh;
display: flex;
justify-content: center;
align-items: center;
}
.card-login{
 width:60%;
display: flex;
justify-content: center;
align-items: center;
flex-direction: column;
padding: 30px 35px;
background-color: #2f2841;
border-radius: 20px;
box-shadow: 0px 10px 40px #00000056;
}
.card-login h1{
color: #77ffc0;
font-weight: 800;
 margin:0; 
}
.textfield{
  width: 100%;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: center;
}
  .textfield input{
    width: 100%;
    border: none;
    border-radius: 10px;
    padding: 15px;
    background-color: #514869;
    color: #f0ffffde;
    font-size: 12pt;
    box-shadow: 0px 10px 40px #00000056;
    outline: none;
    box-sizing: border-box;
  }
  .textfield label {
  color: #f0ffffde;
  margin-bottom: 10px;
  }
  .textfield input::placeholder{
    color: #f0ffff94;
  }
  .botao-login{
   width: 100%;
   padding: 16px 0px;
   margin: 25px;
   border: none;
   border-radius: 8px;
    outline: none;
    text-transform: uppercase;
    font-weight: 800;
    letter-spacing: 1px;
    color: #2f2841;
    background-color: #77ffc0;
    cursor: pointer;
    box-shadow: 0px 10px 40px -12px #138550;
  }
  @Media only screen and (max-width:950px){
    .card-login{
      width: 85%;
    }
  } 
  @Media only screen and (max-width:600px){
    .main-login{
      flex-direction: column;
    }
    .left-login >h1{
      display: none;
    }
    .left-login{
      width: 100%;
      height: auto;
    }
    .right-login{
      width: 100%;
      height: auto;
    }
    .left-login-image{
      width: 50vw;
    }
    .card-login{
      width: 90;
    }
  } 
  
</style>
<body>
  <div class="main-login">
    <div class="left-login"></div>
    <h1 class="Tlt1">Faça o cadastro<br>Para uma vida mais saudável!</h1>
    <img src = "slow.png " width="400" height="400" alt = "400" style = "" > 

    <div class="right-login"></div>

    <div class="card-login">
      <h1>Cadastro</h1>

      <form action="cadastro.php" method="POST"> <!-- Adicionado o formulário com a ação para cadastro.php -->
        <div class="textfield">
          <label for="usuario">Nome:</label>
          <input type="text" name="nome" placeholder="Nome">
        </div>

        <div class="textfield">
          <label for="usuario">Email:</label>
          <input type="text" name="email" placeholder="Email">
        </div>

        <div class="textfield">
          <label for="senha">Senha:</label>
          <input type="password" name="senha" placeholder="Digite sua senha aqui...">
        </div>

        <div class="textfield">
          <label for="genero">Gênero:</label>
          <select name="genero">
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
          </select>
        </div>
    
        <button type="submit" class="botao-login">Cadastrar</button> <!-- Botão para enviar o formulário -->
      </form>

        <button type="submit" class="botao-login"><a href="login.php">Página de Login</a></button>
    </div>
  </div>
</body>
</html>
