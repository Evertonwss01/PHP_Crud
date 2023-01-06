<?php

require 'Conexao.php';

$id = $_GET["id"];
$sql = "delete from funcionario where id_funcionario = $id";

$resultado = mysqli_query($conexao, $sql);

if($resultado == true){
    //echo "Registro Apagado !";
    header('Location: listar_funcionario.php');
}else{
    echo"Erro ao Apagar o Registro !";
    echo "<a href='listar_funcionario.php'><br>Voltar a Lista</a>";
}
?>
