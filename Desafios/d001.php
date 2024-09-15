<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Antcessor e Sucessor</title>
</head>
<body>
    <header>
        <h1></h1>
    </header>
    <section>
        <?php 
            $numero = 10000;
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;
            echo ("O antecessor e o sucessor de $numero é $antecessor e $sucessor.");
        ?>
    </section>
</body>
</html>