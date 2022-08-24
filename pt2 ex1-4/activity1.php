<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <title>Activity 5</title>
    </head>

    <body>
    <div class="container">
        <form method="POST" name="formulario">
        <br>
        
        <p>
        <?php
        $numeros[] = array();

        for ($i = 0; $i < 10; $i++) {
            $numeros[] = rand(-10, 10);
        }

        Imprime($numeros);

        function Imprime($numeros) {
            $qtdNegativos = 0; $qtdPositivos = 0; $qtdPares = 0; $qtdImpares = 0;
            
            echo "Vetor gerado: ";
            print_r($numeros);

            for ($i = 1; $i < sizeof($numeros); $i++) {
                if ($numeros[$i] < 0) {
                    $qtdNegativos++;
                } else {
                    $qtdPositivos++;
                }
                if ($numeros[$i]%2 == 0) {
                    $qtdPares++;
                } else {
                    $qtdImpares++;
                }
            }
            echo "<br>Negativos: $qtdNegativos.<br>Positivos: $qtdPositivos.<br>Pares: $qtdPares.<br>Ímpares: $qtdImpares.<br>";
        }
        ?>
        <br>
        <button class="btn btn-success">Calcular vetor</button>
    </form>
    </body>
</html>