<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Formulário</title>
</head>
<body>
    <div class="container">
        <h1>Formulário</h1>
        <hr>
        <form action="resultado.php" method="$_POST" class="col-12">
            <label for="title" class="col-4">Título:</label>
            <input type="text" name="tittle" placeholder="Título da Página" class="col-11">
            <div><label for="Corpo">Corpo</label><input type="text" placeholder="Corpo da Página">
        </div>
        </form>
    </div>
</body>
</html>