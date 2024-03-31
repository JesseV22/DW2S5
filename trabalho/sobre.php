<main>
<?php
// Aqui você incluirá o header.php
include ('header.php');
?>
<?php
session_start();

function registrarAcesso($pagina)
{
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

<style>
    h1,
    h5 {

        font-weight: bold;
        color: #00aaaa;
        margin-bottom: 30px font-size: 48px;
        text-align: center;
        font-family: "Cormorant Garamond", serif;
        font-weight: 700;
        font-style: normal;

    }

    h6 {
        color: black;
        font-weight: bold;
        margin-bottom: 30px font-size: 48px;
        text-align: center;
        font-family: "Cormorant Garamond", serif;
        font-weight: 700;
        font-style: normal;


    }

    .conteiner {
        color: rgb(95, 58, 155);
        width: 80%;
        max-width: 600px;
        text-align: center;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .card-body {
        color: #00aaaa;
        margin-bottom: 30px font-size: 48px;
        text-align: center;
       
    }

    span {
        color: black;

    }

    .inicio p {
        text-align: left;
        /* Alinha os parágrafos à esquerda */
    }
</style>

<h1 class="text-center">Filosofia de investimento </h1>


<div class="inicio">
    <div class="bg-light p-4 mb-4 rounded">
        <span> Nosso time tem uma composição diferenciada de experiências e também acreditamos na colaboração com as
            nossas investidas e clientes, visando a construir bases robustas para investimentos e relacionamentos
            duradouros.</span>
        <br>
        <br>
        <span>Acreditamos no poder transformador, às vezes exponencial, da inovação nos negócios. Buscaremos as
            empresas em que esses fenômenos tenham condições favoráveis para se materializar, e seremos cobrados
            para incorporar essas inovações também em nosso negócio.</span>
        <br>
        <br>
        <span>Um novo começo nesse jogo infinito e repetitivo de gestão de recursos em que a disciplina na análise e na
            execução serão elementos essenciais para consistência e sucesso.</span>
    </div>
    <h1 class="text-center">Nosso Time </h1>


 

    <div class="d-flex justify-content-center"> <!-- Adicionando as classes d-flex e justify-content-center -->
    <div class="container">
        <div class="row">
            <div class="col-md-4"> 
                <div class="card mb-3"> <!-- Terceiro card -->
                    <img src="../trabalho/img/ano.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">.................</h5>
                        <h6 class="card-subtitle mb-2 text-muted">CFO</h6>
                        <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit fugit rerum optio quas vel maxime culpa ea nesciunt aut magnam autem voluptatum quasi, suscipit reiciendis magni ex hic consequuntur corporis.</span>
                    </div>
                </div>
            </div> <!-- Espaço em branco para alinhar o segundo card -->

            <div class="col-md-4"> <!-- Segunda coluna -->
                <div class="card mb-3">
                    <!-- Segundo card -->
                </div>
                <div class="card mb-3"> <!-- Terceiro card -->
                    <img src="../trabalho/img/img.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Jessé Vitorino de Oliveira</h5>
                        <h6 class="card-subtitle mb-2 text-muted">CEO</h6>
                        <span class="card-text">
                            Jessé Vitorino de Oliveira, fundador da JV Capital em 2035, estudante de Sistemas de Informação, busca gerir o maior fundo de investimento do século. Com uma paixão por investimentos e uma visão audaciosa, Jessé traz consigo anos de aprendizado e experiência. Antes de empreender, acumulou conhecimento valioso, preparando-se para os desafios e oportunidades à frente. Sua jornada reflete determinação, comprometimento e a busca incessante pelo sucesso.
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-md-4"> 
                <div class="card mb-3"> <!-- Terceiro card -->
                    <img src="../trabalho/img/ano.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">..................</h5>
                        <h6 class="card-subtitle mb-2 text-muted">COO</h6>
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni sunt, repellat ad vero, natus dolores nisi minus, ab libero tenetur amet! Optio odio doloribus magni adipisci nostrum commodi voluptates culpa.</span>
                    </div>
                </div>
            </div> <!-- Espaço em branco para alinhar o segundo card -->
        </div>
    </div>
</div> <!-- Fim do div que centraliza o card -->



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
    <br>
    <br>
    <br>
</main>

    <?php
    // Aqui você incluirá o footer.php
    include ('footer.php');
    ?>
