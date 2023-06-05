<!-- Essa é a Classe básica do padrão MVC-->

<!-- Onde estará as funções para as Consultas das Regras de Negocio -->

<?php 
    /* Como essa pagina ficará encarregada de fazer as consultas no banco de dados, ela precisará,
    fazer um requerimento para a classe de Conexão. Lá na pasta de "Configuration".*/
    require_once ('./Crud-mvc-php/configuration/connect.php');

    // Cria a Classe e faz ela herdar a classe de conexão com o banco //
    class ClienteModelo extends Connect{
        private $tabela;

        function __construct(){
            parent::__construct();
            $this->tabela = 'cliente';
        }

        function listar(){
            // Comando Select para listar os dados do banco //
            $sqlSelect = $this->connection->query("SELECT * FROM $this->tabela");
            // Pegar o retorno da query, e transforma em um array associativo //
            $resultQuery = $sqlSelect->fetchall();

            return $resultQuery;
        }
    }
?>