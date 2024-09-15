<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Antcessor e Sucessor</title>
</head>
<body>
    <main>
        <h1>Resultado final</h1>
        <p>
            <?php 
                $numero = $_REQUEST["numero"] ?? 0;
                $antecessor = $numero - 1;
                $sucessor = $numero + 1;
                echo ("O antecessor e o sucessor de $numero é $antecessor e $sucessor");
            ?>
        </p>
           
    </main>
</body>
</html>