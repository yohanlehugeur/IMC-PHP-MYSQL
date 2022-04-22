<?php
require 'config.php';

$list = [];
$sql = $pdo->query("SELECT * FROM pessoas");
if($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuários</title>
    <link rel="stylesheet" href="./estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500;700&family=Poppins:wght@700&display=swap" rel="stylesheet">

</head>
<body>
    <header>
        <div>
            <a href="./index.php">IMC</a>
        </div> 

        <div>
            <form>
                <a href="./index.php">    
                    <input type="button" class="botao-header" value="Home">
                </a>
            </form>

            <form>
                <a href="./individuos.php">    
                    <input type="button" class="botao-header" value="Listar IMCs">
                </a>
            </form>

        </div>
    </header>
    <main>
        <h1>Listagem de usuários</h1>
        <div class="tabela">
            <table border="">
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>ALTURA</th>
                    <th>PESO</th>
                    <th>IMC</th> 
                    <th>RESULTADO</th>   
                    <th>Excluir</th>
                </tr>

                <?php foreach($lista as $usuario): ?>

                    <tr>
                        <td><?=$usuario['id'];?></td>
                        <td><?=$usuario['nome'];?></td>
                        <td><?=$usuario['altura'];?></td>
                        <td><?=$usuario['peso'];?></td>
                        <td><?=$usuario['imc'];?></td>
                        <td><?=$usuario['resultado'];?></td>
                        <td>
                        <a href="excluir.php?id=<?=$usuario['id'];?>"> [EXCLUIR]</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </main>
</body>
</html>
