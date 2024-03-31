<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Praticando - Calculadora média</title>
    <style>
        body {
            margin-top: 50px;
            margin-left: 50px;
        }
    </style>
</head>

<body>
    <h1>Praticando - Calculadora média</h1>
    <hr>
    <br>
    <a href="index.php">Voltar</a>
    <br>
    <br>
    <?php
    $nota1 = filter_input(INPUT_GET, "nota1", FILTER_SANITIZE_SPECIAL_CHARS);
    $nota2 = filter_input(INPUT_GET, "nota2", FILTER_SANITIZE_SPECIAL_CHARS);
    $nota3 = filter_input(INPUT_GET, "nota3", FILTER_SANITIZE_SPECIAL_CHARS);

    $media = ($nota1 + $nota2 + $nota3) / 3;

    echo "<p>Um aluno com as notas <b>" . $nota1 . ", " . $nota2 . " e " . $nota3 . "</b> tem uma média igual a <b>" . $media . "</b></p>";

    if ($media < 4) {
        echo "Com essa média o aluno está <span style='color:red;'><u><b>REPROVADO</b></u></span>";
    } else {
        if ($media >= 4 && $media < 6) {
            echo "Com essa média o aluno está <span style='color:orange;'><u><b>DE RECUPERAÇÃO</b></u></span>";
        } else {
            echo "Com essa média o aluno está <span style='color:green;'><u><b>APROVADO</b><u/></span>";
        }
    }
    ?>
</body>

</html>