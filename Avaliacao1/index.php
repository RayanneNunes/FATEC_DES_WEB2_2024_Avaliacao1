<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();

    $valid_credentials = [
        'coordenacao' => 'coordenacao',
        'tecnicos' => 'tecnicos'
    ];

    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if (isset($valid_credentials[$username]) && $valid_credentials[$username] === $password) {
        $_SESSION['loggedin'] = TRUE;
        $_SESSION["username"] = $username;

        if ($username == 'coordenacao') {
            header("Location: coordenador.php");
        } elseif ($username == 'tecnicos') {
            header("Location: tecnicos.php");
        }
        exit();
    } else {
        $_SESSION['loggedin'] = FALSE;
        
    }
}
?>



<!DOCTYPE html>
<html lang="pt-br">
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

    <title>login</title>
  </head>
  <body>
  
 

    <div class="wrapper">
        <h2>Acessar</h2>
        <p>Insira login e senha.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="">
                <span class="help-block"></span>
            </div>
            
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Acessar">
                <a href="nao_logado.php" type="button" class="btn btn-primary">Visualizar solicitações</a>
            </div>
            
        </form>
    </div>    
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>