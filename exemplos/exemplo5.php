<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Expressões Aritméticas com PHP</title>
</head>
<body>
     <header>
        <h1>Mostrando o resultado</h1>
     </header>
     <section>
        <?php 
            $resultado = 50 / (2 + 3) ** 2;
            echo "O resultado é $resultado"; 
        ?>
     </section>
</body>
</html>