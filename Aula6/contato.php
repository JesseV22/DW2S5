<?php
// Aqui você incluirá o header.php
include ('includes/header.php');
?>
<form action="destino.php" method="post">
    <div class="container">
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
</form>
<?php
// Aqui você incluirá o footer.php
include ('includes/footer.php');
?>