<?php
require 'config.php';

$nome = filter_input(INPUT_POST, 'name');
$altura = filter_input(INPUT_POST, 'altura');
$peso = filter_input(INPUT_POST, 'peso');
$imc = ($peso / ($altura * $altura));


if($imc< 18.5){
        $resultado = "abaixo do peso";
}else if($imc<25){
        $resultado = "com o peso normal";
}else if($imc<30){
        $resultado = "com sobrepeso";
}else if($imc<40){
        $resultado = "com obesidade";
}else{
        $resultado = "com obesidade grave";
}

$sql = $pdo->prepare("INSERT INTO pessoas(nome, altura, peso, imc, resultado) VALUES (:nome, :altura, :peso, :imc, :resultado)");
$sql->bindValue(':nome', $nome);
$sql->bindValue(':altura', $altura);
$sql->bindValue(':peso', $peso);
$sql->bindValue(':imc', $imc);
$sql->bindValue(':resultado', $resultado);
$sql->execute();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
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
        <div>
            <h1>Você está com <?php echo $imc." de IMC e está ".$resultado?> !</h1>
        </div>
    </main>

    <footer>
    </footer>
</body>
</html>