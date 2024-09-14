<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de strings com PHP</title>
</head>
<body>
    <h1>Strings em PHP</h1>
    <?php 
        //$nome = 'André';
       //$sobrenome = 'Venâncio dos Santos';
        //echo "Olá $nome $sobrenome! \u{1F596}";

        //const ESTADO = "MT";
        //echo "Moro no " . ESTADO;

        //const CANAL = "Curso em Video \u{1F499}";
        //echo "Eu adoro esse " .CANAL;
        //echo "Estamos no ano de " . date('Y');

        //$nom = "Rodrigo";
        //$snom = "Nogueira";
        //echo "$nom \"Minotauro\"  $snom";  

        $nome = "André";
        $sobrenome = "Venâncio dos Santos";
        $apelido = "Gafanhoto";
        echo "$nome \"$apelido\" $sobrenome"; 
    ?>
</body>
</html>