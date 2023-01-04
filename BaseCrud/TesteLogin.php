<?php
    // Verificar ser os dados inceridos no formulario estão sendo passados para esse pagina //
    // print_r($_REQUEST);
    
    // Testar a Validação para iniciar uma seção //

    // Primeiro verificar se estar sendo passado algo, pelo Submit //
    // Segundo verificar se o campo 'email' não está vazio //
    // Terceiro realizar essa mesma verificação agora no campo 'senha' //


if(isset($_POST['submit']) && !empty($_POST['login']) && !empty($_POST['senha'])){
    
    // Incluir a conexao com o Banco //
    include 'Conexao.php';
    
    // Criar variavel e incerir nelas os conteudos passados no furmulario de Login //
    $email = $_POST['login'];
    $senha = $_POST['senha'];
    
    // Com os Printers para textar se estão sendo passados mesmo os valores //
    
    // print_r("Login: ".$email);
    // print_r("<br>Senha: ".$senha);
    
    // Agora crio a verificação dos valores no banco com uma Query //
    $sql = "SELECT * FROM funcionario WHERE email = '$email' AND senha = '$senha'";
    
    // Crio uma Variavel para executar a Query //
    $resultSet = $conexao->query($sql);
    
    // Mais Printers para exibir o 'comando Sql' e se o numero de linhas é maior que 0 // 
    
    // print_r($resultSet);
    // print_r("<br>".$sql);
    
    /* Numero de Linhas do retorno do Print_r($sql) for maior que 0 
        Significa que exite esse registros no Banco de Dados. */
    
    /*Agora se o numero de linhas do retorno do print_r($sql) for igual a 0
        Significa que não exite esse registro no Banco de Dados. */
    
    if(mysqli_num_rows($resultSet)< 1){
        
        //print_r("Não existe esse registro no Banco.");
        header('Location: Tela-login.html');
    }
    else{
        
        //print_r("Existe esse registro no Banco.");
        header('Location: listar_funcionario.php');
    }
    
}else{
       header('Location: Tela-login.html');
    }
?>