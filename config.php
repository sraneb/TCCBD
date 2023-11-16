<?php
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "chega";

    $mysqli= new mysqli($host, $usuario, $senha, $banco);

    if($mysqli->error) {

        die ("houve uma falha!" . $mysqli->error);
    }
