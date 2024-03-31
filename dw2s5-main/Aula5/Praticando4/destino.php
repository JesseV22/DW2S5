<!doctype html>
<html lang="en">

<head>
    <title>Tabela</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <?php
    $col = filter_input(INPUT_POST, "coluna", FILTER_SANITIZE_NUMBER_INT);
    $lin = filter_input(INPUT_POST, "linha", FILTER_SANITIZE_NUMBER_INT);
    $inc = filter_input(INPUT_POST, "inc", FILTER_SANITIZE_STRING);
    ?>
    <div class="container">
        <h1>Praticando 4 - Gerador de Tabela</h1>
        <hr>
        <table class="table table-bordered table-striped <?= $inc ?>">
            <?php
            for ($i = 0; $i < $lin; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $col; $j++) {
                    echo "<td class='p-3 text-center'>-</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>

</html>