<?php

    $laboratorios = htmlspecialchars ($_POST['laboratorios']);
    $prazo = htmlspecialchars($_POST['prazo']);
    $solicitacoes = htmlspecialchars($_POST['solicitacoes']);
    $cursos = htmlspecialchars($_POST['cursos']);
    $dados = $laboratorios . ' | ' . $prazo . ' | ' . $solicitacoes . ' | ' .PHP_EOL;

  
    //criando e editando o arquivo todos_registros.txt
    if(!file_exists("todos_registros.txt")){
        $handle = fopen("todos_registros.txt", "w");
    } else {
        $handle = fopen("todos_registros.txt", "a");
    }

    fwrite($handle, $dados);

    $handle = fopen("todos_registros.txt", "r");
    while (!feof($handle)){
        $line = fgets ($handle);
        echo $line . "<br>";
    }

    fclose($handle);



    if($cursos == 'DSM'){
        $arquivo = 'dsm.txt';
    } else {
        $arquivo = 'ge.txt';
    }

    
    $fp = fopen($arquivo, 'a');
    fwrite($fp, $dados);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    

</head>
<body>
    <a href="coordenador.php" class="btn btn-primary">Início</a>
</body>
</html>
