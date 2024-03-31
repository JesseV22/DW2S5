<?php
// Aqui você incluirá o header.php
include ('includes/header.php');
?>
<div class="container mt-5">
        <h2 class="text-center mb-4">Página de Autenticação</h2>
        <form action="autenticar.php" method="POST">
            <div class="form-group">
                <label for="username">Usuário:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
    </div>

<?php
// Aqui você incluirá o footer.php
include ('includes/footer.php');
?>
