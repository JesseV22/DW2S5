<?php
// Função para registrar o acesso à página atual
function registrarAcesso($pagina)
{
    // Define o nome do arquivo de log
    $logFile = "logs/{$pagina}_log.txt";

    // Abre o arquivo de log em modo de escrita (append)
    $handle = fopen($logFile, 'a');

    // Obtém a data e hora atual
    $dataHora = date('Y-m-d H:i:s');

    // Obtém o navegador utilizado pelo usuário
    $navegador = $_SERVER['HTTP_USER_AGENT'];

    // Formata a mensagem de registro
    $registro = "Data/Hora: {$dataHora} - Navegador: {$navegador}\n";

    // Escreve a mensagem de registro no arquivo de log
    fwrite($handle, $registro);

    // Fecha o arquivo de log
    fclose($handle);
}

// Registra o acesso à página atual
registrarAcesso(basename($_SERVER['PHP_SELF'], '.php'));
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo.ico" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <style>
        body {
            position: relative;
            color: #ffffff;
            /* Cor do texto */
            font-family: Arial, sans-serif;
            /* Fonte do texto */
        }

        #video-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            filter: blur(5px); /* Adiciona o efeito de desfoque */
            background-color: rgba(0, 0, 0, 0.5); /* Cor semi-transparente escura */

        }

        video {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Faz com que o vídeo cubra completamente o espaço do contêiner */
        }

      

        .img-lorem {
            width: 30%;
        }

        .inicio p {
            text-align: justify;
            text-indent: 3.5em;
        }

        h2 {
            color: #00aaaa;
            font-family: "Cormorant Garamond", serif;
            font-weight: 700;
            font-style: normal;

        }
    </style>
</head>

<body>
<div id="video-background">
        <video autoplay muted loop>
            <source src="markt.mp4" type="video/mp4">
            <!-- Adicione outros formatos de vídeo aqui se desejar suporte a navegadores diferentes -->
            Desculpe, seu navegador não suporta vídeos HTML5.
        </video>
    </div>


    <svg xmlns="" style="display: none;">
        <symbol id="bootstrap" viewBox="0 0 118 94">
            <title>Jesse Capital</title>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z">
            </path>
        </symbol>
    </svg>

    <div class="container">

        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">

                <h2>J.V.O Capital </h2>

            </a>
            <?php
            require 'menu.php'
                ?>

        </header>