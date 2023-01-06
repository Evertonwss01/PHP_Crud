<?php
// Requerindo a Conexão com o Banco de Dados //
require 'Conexao.php';

// Adicionar os valores enviados pelo formulario, para dentro dessas variaveis //
$id_func = $_POST['id_'];
$nome_func = $_POST['nome_'];
$rg_func = $_POST['rg_'];
$email_func = $_POST['email'];
$senha_func =$_POST['senha'];
$idade_func = $_POST['idade_'];
$sexo_func = $_POST['sexo_'];

// Crias a Query para a alteração dos Dados no Banco //
$sql = "update funcionario set nome_funcionario = '$nome_func', rg_funcionario = '$rg_func', email = '$email_func', senha = '$senha_func', idade = '$idade_func', sexo = '$sexo_func' where id_funcionario = '$id_func'";

// Executar a Query passando a Conexão e a Variavel com a Query para Update //
$resultado = mysqli_query($conexao, $sql);

// Utilizar uma condição para Verificar se funcionaou //
if ($resultado == true) {
    //echo"Atualização Concluida !";
    header('Location: listar_funcionario.php');
} else {
    echo "Erro na Atualização do Registro.";
    echo '<a href="form_alterar_funcionario.php">Voltar</a>';
}
?>
<!--
<br><br>
-->