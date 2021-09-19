<?php
require_once './vendor/autoload.php';

//use ExemploPDOMySQL\MySQLConnection;
use ExemploPDOMySQL\Repositories\GenerosRepository;

//$bd = new MySQLConnection(); //PDO('mysql:host=localhost;dbname=biblioteca', 'root', '');

//$comando = $bd->prepare('SELECT * FROM generos');
//$comando->execute();

$repo = new GenerosRepository();

$generos = $repo->select();//$comando->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Biblioteca</title>
    </head>
    <body>
        <table>
            <tr>
                <th>Id</th>
                <th>Nome</th>
            </tr>
            <?php foreach($generos as $g): ?>
            <tr>
                <td><?= $g['id'] ?></td>
                <td><?= $g['nome'] ?></td>
            </tr>
            <?php endforeach ?>
        </table>
    </body>
</html>