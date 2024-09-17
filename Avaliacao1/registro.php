<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 600px; padding: 20px; }
    </style>

    <title>registro</title>
</head>
<body>
    
</body>
</html>

<div class="wrapper">

    <form action="todos_registros.php" name="registros" method="post">
            <!--Laboratorios-->
            <div class="form-group">
            <label for="exampleFormControlSelect1"><strong>Laboratório</strong></label>
            <select class="form-control" name="laboratorios" >
                <option>Laboratório 1</option>
                <option>Laboratório 2</option>
                <option>Laboratório 3</option>
            </select>
            </div>

            <!--Prazo limite-->
            <div class="form-group">
            <label for="exampleFormControlInput1"><strong>Prazo limite</strong></label>
            <input type="date" class="form-control" name="prazo">
            </div>

            <!--Solicitacoes-->
            <div class="form-group">
            <label for="exampleFormControlTextarea1"><strong>Solicitação</strong></label>
            <textarea class="form-control" name="solicitacoes" rows="3"></textarea>
            </div>

            <!--Cursos atendidos-->
            <div class="form-group">
            <label for="exampleFormControlSelect1"><strong>Cursos Atendido</strong></label>
            <select class="form-control" name="cursos">
                <option>GE</option>
                <option>DSM</option>
            </select>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            <a href="coordenador.php" class="btn btn-danger">Voltar</a>
    </form>


</div>

