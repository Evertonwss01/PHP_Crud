<?php
    // Requerindo a Conexão com o Banco de Dados //
    require 'Conexao.php';

    // Pegar o codigo Id pela a URL e passando para a Variavel id //
    $id_fun = $_GET["id"];

    // Criando a String de comando Sql que será executada e passando para a Variavel $sql //
    $sql = "select * from funcionario where id_funcionario = $id_fun";

    // Executando a query, e passando a "Conexão" e a Variavel "sql" //
    $resultado = mysqli_query($conexao, $sql);

    // Agora é selecionar um Item e passar para essa Variavel "Dados" na qual terar os dasos especificos do Registro que eu estou querendo alterar //
    $dados = mysqli_fetch_assoc($resultado);

    $nome = $dados['nome_funcionario'];
    $rg =$dados['rg_funcionario'];
    $id = $dados['id_funcionario'];
    $idade = $dados['idade'];
    $sexo = $dados['sexo'];

?> 

<!--Criar um Formulario para Mostrar ao usuario e realizar a alteração -->
<form action="alterar_funcionario.php" method="POST">

    
    <label for="id">ID: </label>
    <input type="text" readonly name="id_" value="<?php echo $id?>"/>
    
    <label for="nome">Nome: </label>
    <input type="text" name="nome_" value="<?php echo $nome?>"/>
    
    <label for="rg">RG: </label>
    <input type="text" name="rg_" value="<?php echo $rg?>">
    
    <label for="idade">Idade: </label>
    <input type="number" name="idade_" value="<?php echo $idade?>">
    
    <input type="radio" name="sexo_" value="Masculino"/>
    <label for="sexo">Masculino</label>
            
    <input type="radio"  name="sexo_" value="Feminino"/>
    <label for="sexo">Feminino</label>
    
    <input type="submit" value="Atualizar"/>
</form>

