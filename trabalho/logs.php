<?php
// Aqui você incluirá o header.php
include ('header.php');
?>
<?php
session_start();

// Verifica se a palavra-chave foi enviada
if(isset($_POST['palavra_chave']) && $_POST['palavra_chave'] === "senha_da_nasa") {
    // Processa a requisição para exibir as estatísticas

    // Função para obter os dados de acesso de uma página
    function obterDadosAcesso($pagina) {
        $logFile = "logs/{$pagina}_log.txt";
        $acessos = isset($_SESSION[$pagina]) ? $_SESSION[$pagina] : 0;
        $dados = array(
            'pagina' => $pagina,
            'acessos' => $acessos,
            'registros' => array()
        );

        // Lê o arquivo de log e obtém os registros de acesso
        if (file_exists($logFile)) {
            $lines = file($logFile, FILE_IGNORE_NEW_LINES);
            foreach ($lines as $line) {
                $dados['registros'][] = $line;
            }
        }

        return $dados;
    }

    // Obtém os dados de acesso de cada página
    $dados_index = obterDadosAcesso("index");
    $dados_sobre = obterDadosAcesso("sobre");
    $dados_contato = obterDadosAcesso("contato");

    // Função para exibir a lista de registros de acesso
    function exibirRegistros($dados) {
        echo "<h3>{$dados['pagina']}</h3>";
        echo "<p>Acessos: {$dados['acessos']}</p>";
        echo "<ul>";
        foreach ($dados['registros'] as $registro) {
            echo "<li>{$registro}</li>";
        }
        echo "</ul>";
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <div class="index">
    <div class="bg-light p-4 mb-4 rounded">
    <title>Estatísticas de Acesso</title>
    <!-- Estilos Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- Conteúdo da página -->
    <div class="container mt-5">
        <h2>Estatísticas de Acesso</h2>
        <a href="index.php" class="btn btn-primary mt-3">Voltar</a>

        <?php
            // Exibe os dados de acesso de cada página
            exibirRegistros($dados_index);
            exibirRegistros($dados_sobre);
            exibirRegistros($dados_contato);
        ?>
    </div>
</body>
</html>

<?php
} else {
    // Se a palavra-chave estiver incorreta, exibe um formulário para inserir a palavra-chave
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Proteção de Acesso</title>
    <!-- Estilos Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style> 
    p{
        color: black;
    }
</style>

</head>
<body>
    <!-- Conteúdo da página -->
    <div class="container mt-5">
    <div class="index">
    <div class="bg-light p-4 mb-4 rounded">
        <h2>Proteção de Acesso</h2>
        <form method="post">
            <div class="form-group">
                <label for="palavra_chave">Palavra-chave:</label>
                <input type="password" class="form-control" id="palavra_chave" name="palavra_chave">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <?php
            // Exibe uma mensagem de erro se a palavra-chave estiver incorreta
            if(isset($_POST['palavra_chave'])) {
                echo "<p class='text-danger'>Palavra-chave incorreta. Por favor, tente novamente.</p>";
            }
        ?>


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
       
    <?php
// Aqui você incluirá o footer.php
include ('footer.php');
?>
</body>
</html>
<?php
}
?>
