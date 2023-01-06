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
           .table-bg{
               background: rgba(0,0,0,0.3);
               border-radius: 15px 15px 15px 15px;
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

            /*
            while($dados = mysqli_fetch_assoc($resultado)){
                $id = $dados['id_funcionario'];
                $nome = $dados['nome_funcionario'];
                $rg = $dados['rg_funcionario'];
                $email = $dados['email'];
                $senha= $dados['senha'];
                $idade = $dados['idade'];
                $sexo = $dados['sexo'];

                echo "<br>Codigo: ".$id."<br>"."Nome: ".$nome."<br>"."RG: ".$rg."<br>"."Email: ".$email."<br>"."Senha: ".$senha."<br>"."Idade: ".$idade."<br>"."Sexo: ".$sexo."<br>";
            }*/
            
            
        ?>
        
        <div class="m-5">
        <table class="table text-white table-bg">  
            <thead>
                <tr>
                    <!--Area de Criação dos Titulos das Colunas -->
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">RG</th>
                    <th scope="col">Email</th>
                    <th scope="col">Senha</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Aditar</th>
                    <th scope="col">Excluir</th>
                </tr>
            </thead>
            <tbody>
                
                <!--Area de Criação de um laço de repetição, para percorrer e exibir os registros do Banco para o Usuario final -->
                <?php 
                    while($dados = mysqli_fetch_assoc($resultado)){
                        
                        /* Com auxilio do comando 'echo' em congunto com a tag '<td>' e percorrido e exibido os registros presentes no Banco de Dados */
                        echo "<tr>";
                        echo "<td>".$dados['id_funcionario']."</td>";
                        echo "<td>".$dados['nome_funcionario']."</td>";
                        echo "<td>".$dados['rg_funcionario']."</td>";
                        echo "<td>".$dados['email']."</td>";
                        echo "<td>".$dados['senha']."</td>";
                        echo "<td>".$dados['idade']."</td>";
                        echo "<td>".$dados['sexo']."</td>";
                        
                        /* Campo de exibição dos icones de 'Editar' e 'Excluir' */
                        echo "<td><a class='btn btn-primary btn-sm' href='form_alterar_funcionario.php?id=$dados[id_funcionario]'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                                </svg>
                                   </a>
                              </td>";
                        echo "<td><a class='btn btn-sm btn-danger' href='##'> <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                    </svg></a></td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
        </div>
    </body>
</html>
