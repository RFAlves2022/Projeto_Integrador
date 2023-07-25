<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title></title>
</head>

<body class="bg-dark">

    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand mx-auto" href="index.php">
                <span class="navbar-text text-center">Inicio</span>
            </a>
            <?php
            session_start();
             if (isset($_SESSION['username'])) { 
            ?>
                <!-- Botão de logout -->
                <div class="navbar-collapse justify-content-end">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="pagina-favoritos.php">Favoritos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sair.php">Sair</a>
                        </li>
                    </ul>
                </div>
            <?php } else { ?>
                <!-- Botões de login e registrar-se -->
                <div class="navbar-collapse justify-content-end">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="form-login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <span class="nav-link">|</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="form-cadastro.php">Cadastrar-se</a>
                        </li>
                    </ul>
                </div>
            <?php } ?>
        </div>
    </nav>