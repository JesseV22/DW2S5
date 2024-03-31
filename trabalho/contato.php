<?php
// Aqui você incluirá o header.php
include ('header.php');

session_start();

function registrarAcesso($pagina) {
    $logFile = "logs/{$pagina}_log.txt";
    $browser = $_SERVER['HTTP_USER_AGENT'];
    $dataHora = date("Y-m-d H:i:s");

    $log = fopen($logFile, "a");
    fwrite($log, "Data/Hora: {$dataHora} | Navegador: {$browser}\n");
    fclose($log);

    if (!isset($_SESSION[$pagina])) {
        $_SESSION[$pagina] = 1;
    } else {
        $_SESSION[$pagina]++;
    }
}

registrarAcesso(basename(__FILE__, '.php'));
?>

<form action="destino.php" method="post">
    <div class="container">
    <div class="inicio">
    <div class="bg-light p-4 mb-4 rounded">
        <h2 class="text-center">Formulário de Contato</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" placeholder="Digite seu nome" name="nome"
                        required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Digite seu email" name="email"
                        required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="mensagem">Mensagem:</label>
            <textarea class="form-control" rows="5" id="mensagem" placeholder="Digite sua mensagem" name="mensagem"
                required></textarea>
        </div>
        </br>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary mr-2">Enviar</button>
            <!-- Botão de Limpar com fundo amarelo -->
            <button type="reset" class="btn btn-warning">Limpar</button>
           
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>

</form>
<?php
// Aqui você incluirá o footer.php
include ('footer.php');
?>