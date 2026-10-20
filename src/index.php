<!DOCTYPE html>
<html lang="en">
<head>
  <title>Aplicação Docker com Bootstrap 4</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h1>My First Bootstrap Page</h1>
  <p>This is some text.</p>
</div>

 <div class="container mt-5">
        <div class="jumbotron">
            <h1 class="display-4">Olá, Docker + Bootstrap 4!</h1>
            <p class="lead">Seu ambiente Apache, MySQL e Bootstrap está configurado com sucesso.</p>
            <hr class="my-4">
            <?php
                // Teste rápida de conexão com o MySQL
                $conn = new mysqli("db", "USER", "SENHA", "DB_NAME");
                if ($conn->connect_error) {
                    echo '<div class="alert alert-danger">Erro ao conectar com o MySQL: ' . $conn->connect_error . '</div>';
                } else {
                    echo '<div class="alert alert-success">Conexão com o MySQL realizada com sucesso!</div>';
                }
            ?>
        </div>
  </div>

</body>
</html>
