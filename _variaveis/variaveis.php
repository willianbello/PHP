<!DOCTYPE HTML>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Variaveis</title>
</head>

<body>

    <?php 
        
        //int
        $valor_inteiro = 1;
        echo "valor inteiro = ".$valor_inteiro;
        echo "<br>";

        //float
        $valor_fracionado = 2.7;
        echo "valor fracionado = ".$valor_fracionado;
        echo "<br>";

        //boolean
        $estado = true; //false
        echo "valor booleano = ".$estado;
        echo "<br>";

        //string
        $texto = "aprendendo sobre PHP";
        echo "String = $texto";
        echo "<br>";

        //arrays
        $lista_de_frutas[0] = 'Maçã';
        $lista_de_frutas[1] = 'Banana';
        $lista_de_frutas[2] = 'Pera';

        echo '<br>Array de Frutas:<br>';
        var_dump($lista_de_frutas);
        
        echo '<br><br>Array de Nomes:<br>';
        $lista_de_nomes = array(0 => 'Carlos', 1 => 'José', 2 => 'Willian');
        print_r($lista_de_nomes);

        $lista_alfanumerica['a'] = 'item1';
        $lista_alfanumerica[1] = 'item2';
        $lista_alfanumerica['c'] = 'item3';

        echo '<br><br>Array alfanumérico:<br>';
        var_dump($lista_alfanumerica);

    ?>

</body>

</html>