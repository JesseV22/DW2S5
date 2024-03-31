<!doctype html>
<html lang="en">

<head>
    <title>Tratamento de dados no Array</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
<?php
        echo "<div class='container'><h1>Destino</h1><hr>";
        $escolha = $_POST['escolha'] ?? [];

        echo "<h3>Dados da Requisição: </h3> <br> <pre>";
            echo "<div class='dados'>";
                var_dump($_POST);
            echo "</pre>";
        echo "</div>
        </div>";
        sort($escolha);

        echo "<div class='container'><h3>Interesses em Ordem Alfabética:</h3>";
        echo "<ul>";
            for($i = 0; $i <3&&$i<count($escolha); $i++){
                echo '<li>' . $escolha[$i] . '</li>';
            }
            if(count($escolha) > 3){
                echo "<li>...</li>";
            }
        echo "</ul>";
        ?>
    <style>
        .dados{
            border: 3px solid green;
            padding: 2%;
            color: red;
        }
    </style>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>