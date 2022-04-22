<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste1yorra</title>
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
            <h1>Insira seus dados</h1>
        </div>

        <div class="formulario">
            <form method="post" action="inserir.php">
                <label for="nome">Nome: </label>
                <input type="text" name="name" placeholder="Seu nome"/>
                <br>
                <label for="altura">Altura:</label>
                <input type="number" step="00.01"name='altura' placeholder="Sua altura em Metros"/>
                <br>
                <label for="peso">Peso: </label>
                <input type="number" step="00.01" name='peso' placeholder="Seu peso em Kgs"/>
                <br>
                <input type="submit" value="Enviar">

        </div>
    </main>

</body>
</html>
