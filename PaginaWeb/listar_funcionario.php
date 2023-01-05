<html>
    <head>
        <title>Sistema</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
       
       <style>
           body{
               background: linear-gradient(to right, rgb(20,147,220),rgb(17,54,21));
               color: white;
               text-align: center;
           }
       </style>
    </head>
    <body>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">Lista de Cadastros</a> <a href="EncerrarSessao.php" class="btn btn-danger me-5">Sair</a>
        </nav>
        
    <?php
   
    require 'Conexao.php';

    // Startando uma Sessão //
    session_start();
    //print_r($_SESSION);
    
    
    // Verificando Sessões //
    /*Caso não exista uma sessão, deve redirecionar para a pagina de Login*/
    
    if((!isset($_SESSION['email']) ==true) and (!isset($_SESSION['senha']) ==true)){
        
        // Ele vai redirecionar divolta para a tela de Login //
        header('Location: Tela-login.html');
        
         // E terá também que destruir qualquer tipo de Sessão que estaja criada //
         unset($_SESSION['email']);
         unset($_SESSION['senha']);
    }
    else{
        $logado = $_SESSION['email'];
    }
    echo "<br>";
    echo "<h1>Bem vindo !! <u>$logado<u></h1>";
    
    $sql = "select * from funcionario";

    $resultado = mysqli_query($conexao, $sql);


    while($dados = mysqli_fetch_assoc($resultado)){
        $id = $dados['id_funcionario'];
        $nome = $dados['nome_funcionario'];
        $rg = $dados['rg_funcionario'];
        $email = $dados['email'];
        $senha= $dados['senha'];
        $idade = $dados['idade'];
        $sexo = $dados['sexo'];

        echo "<br>Codigo: ".$id."<br>"."Nome: ".$nome."<br>"."RG: ".$rg."<br>"."Email: ".$email."<br>"."Senha: ".$senha."<br>"."Idade: ".$idade."<br>"."Sexo: ".$sexo."<br>";
    }
    ?>
        <a href="form_alterar_funcionario.php?id=<?php echo $id?>">Alterar</a> <a href="excluir_funcionario.php?id=<?php echo$id?>">Excluir<br><br></a>
        <a  href="frm_funcionario.html">Cadastrar Novo Funcionario</a>
    </body>
</html>
