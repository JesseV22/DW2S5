<?php

use Claudsonm\CepPromise\CepPromise;
use Claudsonm\CepPromise\Exceptions\CepPromiseException;

require 'vendor/autoload.php';

$cep = $_POST['cep'] ?? '';

$address = null;
$error_message = '';

if (!empty($cep)) {
    try {
        $address = CepPromise::fetch($cep);
    } catch (CepPromiseException $e) {
        $error_message = '<h3>CEP: ' . $cep . '</h3>';
        $error_message .= '<p>Detalhes do erro</p>';
        $error_message .= '<li> CEP não encontrado</li>';
        $error_message .= '<li> CEP não encontrado</li>';
        $error_message .= '<li> CEP INVÁLIDO</li>';
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca por CEP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Busca por CEP</h2>
        <form class="row g-3" action="cep.php" method="POST">
            <div class="col-5">
                <div>
                    <label for="cep">CEP:</label>
                    <input class="form-control" type="text" name="cep" id="cep" required autofocus placeholder="Only numbers">
                </div>
            </div>
            <div class="col-8">
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Buscar</button>
                    <a href="cep.php" type="reset" class="btn btn-danger">Limpar</a>
                </div>
            </div>
        </form>
        <?php if (!empty($address)) : ?>
            <div class="success mt-3" id="info">
                <h3>CEP: <?= substr($address->zipCode, 0, 2) . '.' . substr($address->zipCode, 2, 3) . '-' . substr($address->zipCode, 5, 3) ?></h3>
                <p>Rua: <?= $address->street ?></p>
                <p>Bairro: <?= $address->district ?></p>
                <p>Cidade: <?= $address->city ?></p>
                <p>Estado: <?= $address->state ?></p>
            </div>
        <?php elseif (!empty($error_message)) : ?>
            <div class="error mt-3" id="info">
                <p><?= $error_message ?></p>
            </div>
        <?php endif; ?>
    </div>
</body>
<style>
        #info {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
        }

        .success {
            background-color: lightgreen;
            border: 1px solid lightgreen;
            color: green;
            padding: 10px;
            border-radius: 5px;
            border: solid green;
        }

        .error {
            background-color: lightcoral;
            border: 1px solid lightsalmon;
            color: red;
            padding: 10px;
            border-radius: 5px;
            border: solid red;
        }
    </style>
</html>