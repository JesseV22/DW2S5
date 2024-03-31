<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <h1 class="col-12">Praticando 3 - Números primos</h1>
        <hr>
        <div class="d-flex justify-content-between">
            <?php
            for ($i = 0; $i < 7; $i++) {
                $link = rand(0, 999);
                echo "<a href='primo.php?num=$link'>Número $link<a>";
            }
            ?>

        </div>
        <br><br><br>
        <?php
        $num = filter_input(INPUT_GET, "num", FILTER_SANITIZE_NUMBER_INT);
        if (isset($num)) {

            function primo($num)
            {
                $divisores = 0;

                for ($count = 2; $count < $num; $count++)
                    if ($num % $count == 0) {
                        $divisores++;
                    }
                if ($divisores) {
                    return "não é";
                } else {
                    return "é";
                }
            }
            function par($num){
                if($num%2==0){
                    return "par";
                }else{
                    return "impar";
                }
            }

            echo "<p> O número <span>$num</span> <span>" . primo($num) . "</span> um número <span>PRIMO</span>, e também é <span>".par($num)."</span>.";
        }

        ?>

        <style>
            span {
                background-color: lightblue;
                border: blue 1px solid;
                padding: 0.5vw;
            }
        </style>
    </div>
</body>

</html>