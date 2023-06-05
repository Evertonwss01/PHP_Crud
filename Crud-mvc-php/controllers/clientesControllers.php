<!-- Essa Classe é a intermediaria entre a Modelo e a View -->

<!-- Como ela é a reponsável por fazer as chamadas das "regras de negocio" lá na pasta "Modelo"
é preciso que ela fassa uma requisição para a classe Modelo -->

<?php
    require_once('./Crud-mvc-php/models/Cliente.php');

    // Criar a classe Controller //

    class clienteControllers{
        private $modelo;
    
        function __construct(){
            $this->modelo = new ClienteModelo();
        }

        /* Cria a chamada da função "Listar" onde receberá devolta os dados do banco, e logo após
        direcionar esse dados para a View onde será apresentado. */

        function listar(){
            $retornoBanco = $this->modelo->listar();
            
            // Aqui redirecionamos os dados para a View //
            require_once('./Crud-mvc-php/views/index.php');
        }
    }



?>