<?php
    include("conexao.php")

    $id=$_POST['id'];
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $nascimento=$_POST['nascimento'];


    $slq="INSERT INTO usuarios(id, nome, email, senha, nascimento) 
            VALUES ($id, '$nome', '$email', '$senha', '$nascimento')";


    if(mysqli_query($conexao, $slq){
        echo "usuario cadastrado com sucesso";
    })
    else{
        echo "error".mysqli_conect_error($conexao);
    }

    mysqli_close($conexao);
?>
