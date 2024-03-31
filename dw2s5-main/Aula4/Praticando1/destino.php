<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <title>Destino GET</title>
</head>

<body>
    <?php
    $nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_GET, "email", FILTER_SANITIZE_STRING);
    $cor = filter_input(INPUT_GET, "cor", FILTER_SANITIZE_STRING);
    ?>

    <h1>Destino GET</h1>
    <hr>
    <p>Nome: <?php echo $nome ?> </p>
    <p>Email: <?php echo $email ?> </p>

    <a <?= "href='destino.php?nome=Caua&email=a@gmail.com&cor=".$cor."'"?>>Nome = Caua | email = a@gmail.com</a>
    <br><a <?= "href='destino.php?nome=Ze&email=ze@gmail.com&cor=".$cor."'"?>>Nome = zé | email = b@gmail.com</a>
    <br><a href="destino.php?nome=Nome&email=Email&cor=white">Limpar</a>
<br><br>
<div class="d-flex">
<a <?= "href='destino.php?nome=".$nome."&email=".$email."&cor=green'"?>>
<div style="background-color: green;"></div>
</a>
<a <?= "href='destino.php?nome=".$nome."&email=".$email."&cor=blue'"?>>
<div style="background-color: blue;"></div>
</a>
<a <?= "href='destino.php?nome=".$nome."&email=".$email."&cor=red'"?>>
<div style="background-color: red;"></div>
</a>
</div>
    <br><?php echo "<a href='http://localhost/'>voltar</a>"; ?>

    <style>
        a div{
            width: 8vw;
            height: 8vw;
            border: 1px solid black;
            margin: 2vw;
        }
        body{
            background-color: <?=$cor?>;
        }
    </style>
</body>

</html>