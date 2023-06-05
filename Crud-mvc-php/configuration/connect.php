<!-- Arquivo para a conexão com o Banco de Dados-->

<?php 
    // Definir as Constantes para a conexão //

    define('HOST','localhost');            // O local do Banco de Dados //
    define('NOMEDOBANCO','Crud-MVC-php');  // Nome do Banco de Dados //
    define('USUARIO','root');              // O usuario do Banco de Dados //
    define('SENHABANCO','password');       // E a senha de usuario //

    // Classe de Conexão com o Banco de Dados //

    class Connect{
        protected $connection;

        function __construct(){
            $this->connectDatabase();
        }

        function connectDataBase(){
            try{
                // Faz a chamada do atributo e cria um PDO de Conexão com o Banco //
                $this->connection = new PDO('mysql: host='.HOST.'; dbname='.NOMEDOBANCO, USUARIO, SENHABANCO);
                echo 'Tudo OK!';
            }catch(PDOException $e){
                echo "Erro ao Conectar com o Banco de Dados Everton. ".$e->getMessage();
                // Com o comando abaixo ele "para" a conexão, caso tenha algum erro //
                die();
            }
        }
    }
?>