<?php

    require 'Conexao.php';

    $id = $_GET["id"];
    $sql = "delete from funcionario where id_funcionario = $id";

    $resultado = mysqli_query($conexao, $sql);

    if($resultado == true){
        echo "Registro Apagado !";
    }else{echo"Erro ao Apagar o Registro !";}
?>
<a href="listar_funcionario.php"><br>Voltar a Lista</a>