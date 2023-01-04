<?php

    require 'Conexao.php';

    $sql = "select * from funcionario";

    $resultado = mysqli_query($conexao, $sql);


    while($dados = mysqli_fetch_assoc($resultado)){
        $id = $dados['id_funcionario'];
        $nome = $dados['nome_funcionario'];
        $rg = $dados['rg_funcionario'];
        $idade = $dados['idade'];
        $sexo = $dados['sexo'];

        echo "Codigo: ".$id."<br>"."Nome: ".$nome."<br>"."RG: ".$rg."<br>"."Idade: ".$idade."<br>"."Sexo: ".$sexo."<br>";
?>
<a href="form_alterar_funcionario.php?id=<?php echo $id?>">Alterar</a> <a href="excluir_funcionario.php?id=<?php echo$id?>">Excluir<br><br></a>
<?php
}
?>
<a  href="frm_funcionario.html">Cadastrar Novo Funcionario</a>