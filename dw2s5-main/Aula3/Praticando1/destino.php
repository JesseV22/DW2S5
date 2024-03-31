<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <title>Title</title>
</head>
<body>
    <?php
    $titulo = filter_input(INPUT_POST, "titulo", FILTER_SANITIZE_STRING);
    $corpo = filter_input(INPUT_POST, "corpo", FILTER_SANITIZE_STRING);
    $cortexto = filter_input(INPUT_POST, "cortexto", FILTER_SANITIZE_SPECIAL_CHARS);
    $imagempagina = filter_input(INPUT_POST, "imagempagina", FILTER_SANITIZE_URL);
    $urlpagina = filter_input(INPUT_POST, "urlpagina", FILTER_SANITIZE_URL);
    $corpagina = filter_input(INPUT_POST, "corpagina", FILTER_SANITIZE_SPECIAL_CHARS);
    ?>
    <div class="container">
        <div class="row justify-content-center m-2">
            <h1 class="col-12">
                <?php echo $titulo; ?>
            </h1>
            <hr>
            <p class="col-12">
                <?php echo $corpo; ?>
            </p>
            <img class="col-6 m-2" src="<?php echo $imagempagina; ?>" alt="Imagem do IFSP">
            <a class="col-12 mt-4" href="<?php echo $urlpagina; ?>" target="_blank">Fonte para
                consulta</a>
        </div>
    </div>
    <style>
        body {
            background-color:
                <?php echo $corpagina; ?>;
            color:
                <?php echo $cortexto; ?>;
        }

        a {
            color:
                <?php echo $cortexto; ?>;
        }
    </style>

</body>

</html>