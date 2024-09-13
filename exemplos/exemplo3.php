<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em php</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php
        // 0x = hexadecimal 0b = binário 0 = Octal
        //$num = 010;
        //echo "O valor da variáveis é $num";
        //$v = 45.2;
        //var_dump($v);

        //$num = (int) 3e2; // 3 x 10(2) coerção
        //echo "O valor é $num";
        //var_dump($num);

        //$num = (int) "950";
        //var_dump($num);

        //$casado = true ;
        // var_dump($casado);
       //print "O valor para casado é $casado";

       //$vet = [6, 2, 9, "Maria", 3,  5];
       //var_dump($vet)

       class pessoa {
            private string $nome;
       }

       $p = new pessoa;
       var_dump($p);
    ?>
</body>
</html>