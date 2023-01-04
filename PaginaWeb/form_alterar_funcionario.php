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

<html>
    <header>
        <title>Atualizar</title>
        <style>
            body{
                background: linear-gradient(to left, palegreen, yellowgreen);
                font-family: Arial, Helvetica, sans-serif;
            }
            
            #principal{
                padding: 20px;
                
                background-color: rgba(0,0,0,0.6);
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                color: white;
                border-radius: 20px;
                
            }
            #titulo{
                padding: 10px;
                border-bottom: 2px solid yellow;
                text-align: center;
            }
            fieldset{
                border: 3px solid yellow;
            }
            .inputBox{
                background: none;
                border: none;
                border-bottom: 1px solid white;
                outline: none;
                color: white;
                font-size: 15px;
                letter-spacing: 2px;
                padding: 10px;
                margin-bottom: 15px;
                
            }
            
            .coluna1{
                position: relative;
            }
            
            .butao{
                border: none;
                background: white;
                color: black;
                outline: none;
                padding: 5px;
                cursor: pointer;
            }
            a{
                text-decoration: none;
                color: white;
            }
            
        </style>
    </header>
 
    <body>
        <div id="principal">
            <fieldset>
                <a href="listar_funcionario.php">< Voltar</a>
                <h1 id="titulo">Alterar Cadastro</h1>
    
                <form action="alterar_funcionario.php" method="POST">
                    <div class="coluna1">
                        <label for="id" >ID: </label>
                        <input type="text" readonly name="id_" value="<?php echo $id?>" class="inputBox"/>
                     
                        <label for="nome" class="labelBox">Nome: </label>
                        <input type="text" name="nome_" value="<?php echo $nome?>" class="inputBox"/>
                    
                        <br>
                        <label for="rg" >RG: </label>
                        <input type="text" name="rg_" value="<?php echo $rg?>" class="inputBox">
                     
                        <label for="idade" class="labelBox">Idade: </label>
                        <input type="number" name="idade_" value="<?php echo $idade?>" class="inputBox">
                    </div>
                    <label for="rg" >Sexo: </label>
                        <input type="radio" name="sexo_" value="Masculino"/>
                        <label for="sexo">Masculino</label>

                        <input type="radio"  name="sexo_" value="Feminino"/>
                        <label for="sexo">Feminino</label>
                        
                        <input type="radio"  name="sexo_" value="Outros"/>
                        <label for="sexo">Outros</label>
                        <br><br>
                        <input type="submit" value="Atualizar" class="butao"/>
                </form>
            </fieldset>
        </div>
    </body>
</html>



