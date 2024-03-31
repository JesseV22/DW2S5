<?php
// Aqui você incluirá o header.php
include ('header.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino do Formulário</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        h1 {
            color: #00008b;
            font-family: "Cormorant Garamond", serif;
            font-weight: 700;
            font-style: normal;
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="inicio">
            <div class="bg-light p-4 mb-4 rounded">
                <h1 class="mt-5">Dados do Formulário Recebidos</h1>

                <?php
                // Processar os dados do formulário quando o formulário for enviado
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Verificar se os campos do formulário estão definidos e não vazios
                    if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['mensagem'])) {
                        // Capturar os dados do formulário
                        $nome = $_POST['nome'];
                        $email = $_POST['email'];
                        $mensagem = $_POST['mensagem'];

                        // Montar a mensagem a ser armazenada no arquivo de texto
                        $dataHora = date("Y-m-d H:i:s");
                        $conteudo = "Nome: $nome\nEmail: $email\nData e Hora: $dataHora\nMensagem: $mensagem\n\n";

                        // Caminho para o arquivo de texto
                        $caminhoArquivo = "contatos/contatos.txt";

                        // Adicionar a nova entrada ao arquivo de texto
                        file_put_contents($caminhoArquivo, $conteudo, FILE_APPEND | LOCK_EX);

                        // Exibir os dados na tela
                        echo "<h2>Dados enviados com sucesso!</h2>";
                        echo "<p>Nome: $nome</p>";
                        echo "<p>Email: $email</p>";
                        echo "<p>Data e Hora: $dataHora</p>";
                        echo "<p>Mensagem: $mensagem</p>";
                    } else {
                        // Se algum campo estiver vazio, exibir uma mensagem de erro
                        echo "<h2>Erro: Todos os campos do formulário devem ser preenchidos.</h2>";
                    }
                } else {
                    // Se o método de requisição não for POST, exibir uma mensagem de erro
                    echo "<h2>Erro: O formulário deve ser submetido via método POST.</h2>";
                }
                ?>
                <a href="contato.php" class="btn btn-primary mt-3">Voltar</a>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


    <!-- Bootstrap JS (opcional) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>