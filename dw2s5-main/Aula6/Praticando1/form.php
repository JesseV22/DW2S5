<?php include("header.php")?>
<div class="container mt-5">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <h2>Formulário de Contato</h2>
      <form action="destino.php" method="POST">
        <div class="form-group">
          <label for="nome">Nome:</label>
          <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="mensagem">Mensagem:</label>
          <textarea class="form-control" id="mensagem" name="mensagem" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>
  </div>
</div>
<?php include("footer.php")?>