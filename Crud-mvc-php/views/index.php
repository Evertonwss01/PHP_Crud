<!-- Essa é a Classe superior do modelo MVC, para apresentação View -->

<!-- Comando para testar se os dados estão aqui na View
    <?php
        print_r($retornoBanco);
    ?> 
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud-MVC</title>
</head>
<body>
    <h1>Lista de Clientes</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($retornoBanco as $dado):?>
                <tr>
                    <td><?= $dado['id']; ?></td>
                    <td><?= $dado['nome']; ?></td>
                    <td><?= $dado['email']; ?></td>
                    <td><?= $dado['telefone'] ?></td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>