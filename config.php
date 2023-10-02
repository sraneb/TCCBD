<?php
    $host= "localhost"; 
    $usuario= "root";
    $senha= "";
    $banco= "TCC";

    $conexao=mysqli_conenct("$host,$usuario,$senha,$banco");
    if($conexao){
    die("houve um erro".mysqli_error());

    }

?>
