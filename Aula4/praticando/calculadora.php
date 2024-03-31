<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Praticando 2 - Calculadora média</title>
    <style>
        body {
            margin-top: 50px;
            margin-left: 50px;
        }
    </style>
</head>

<body>
    <form action="destino.php" method="GET">
        <h1>Praticando - Calculadora média</h1>
        <hr>
        <a href="index.php">Voltar</a>
        <br>
        <br>
        <div class='form-group'>
            <label for='nota1'>Nota 1:</label>
            <input type='number' step='0.5' class='form-control w-25' name='nota1' id='nota1'>
        </div>
        <div class='form-group'>
            <label for='nota2'>Nota 2:</label>
            <input type='number' step='0.5' class='form-control w-25' name='nota2' id='nota2'>
        </div>
        <div class='form-group'>
            <label for='nota3'>Nota 3:</label>
            <input type='number' step='0.5' class='form-control w-25' name='nota3' id='nota3'>
        </div>
        <div class='form-group'>
            <br>
            <button type='submit' class='btn btn-success'>Calcular média</button>
            <button type='reset' class='btn btn-warning'>Limpar</button>
        </div>
    </form>
</body>

</html>