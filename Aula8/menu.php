
<ul class="nav nav-pills">
    <li class="nav-item"><a href="http://localhost/Aula/Aula8/inicio.php" class="nav-link active" aria-current="page">Inicio</a></li>
    <li class="nav-item"><a href="http://localhost/Aula/Aula8/sobre.php" class="nav-link">Sobre</a></li>
    <li class="nav-item"><a href="http://localhost/Aula/Aula8/faqs.php" class="nav-link">FAQs</a></li>
    <li class="nav-item"><a href="http://localhost/Aula/Aula8/contato.php" class="nav-link">Contato</a></li>
    <li class="nav-item"><a href="http://localhost/Aula/Aula8/autenticacao.php" class="nav-link">Entrar</a></li>
</ul>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var links = document.querySelectorAll('.nav-link');
        links.forEach(function(link) {
            link.addEventListener('click', function() {
                // Remove a classe 'active' de todos os links
                links.forEach(function(item) {
                    item.classList.remove('active');
                });
                // Adiciona a classe 'active' ao link clicado
                this.classList.add('active');
            });
        });
    });
</script>s