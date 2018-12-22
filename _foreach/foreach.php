<!DOCTYPE HTML>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ForEach</title>

</head>

<body>


    <div>
        <?php

            $produtos = array(0 => 'Sofá', 1 => 'Mesa', 2 => 'Cadeira', 4 => 'Fogão', 5 => 'Geladeira');
            
            foreach($produtos as $nome){
                echo "$nome<br>";

                if ($nome == 'Mesa'){
                    echo ' - Compre uma mesa e ganhe 25% de desconto na compra de 4 cadeiras<br>';
                }
            }
        ?>
    </div>

</body>

</html>