<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 002: Sorteador de números</title>
</head>
<body>
    <main>
        <h1>Gerando Números Alestórios</h1>
        <?php 
            $minimo = 0;
            $maximo = 100;

            $numero = mt_rand($minimo, $maximo) ?? 0;
            echo "Gerando um número aleatório entre $minimo e $maximo... \n";
            echo "O número gerado foi $numero";
            
        ?>
    </main>
</body>
</html>