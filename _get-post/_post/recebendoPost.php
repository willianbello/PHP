<!DOCTYPE HTML>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Método POST - recebendo Formulario</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>

<body>


    <div class="container">
        <div class="row">
            <h1>Detalhes do produto</h1>
        </div>
 
        <div class="row">
            <div class="col-md-4">
                <?php

                    //metodo get
                    $id_produto = $_POST['id_produto'];

                    $detalhes[0] = '';
                    $detalhes[1] = 'Detalhe das Cadeiras';
                    $detalhes[2] = 'Detalhes do Fogão';
                    $detalhes[3] = 'Detalhes do Roteador';
                    $detalhes[4] = 'Detalhes da Tv';

                    if ($id_produto != null && $id_produto != ''){
                        echo $detalhes[$id_produto];
                    }
                ?>
            </div>
        </div>
    </div>

</body>

</html>