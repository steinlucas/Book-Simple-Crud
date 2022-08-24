<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <title>Activity 2</title>
    </head>

    <body>
    <div class="container">
        <form method="POST" name="formulario">
        <br>
        <p>
        <?php
        $vetorA[] = array();
        $vetorB[] = array();
        $vetorResultado[] = array();

        for ($i = 1; $i <= 10; $i++) {
            $vetorA[] = rand(-10, 10);
            $vetorB[] = rand(-10, 10);
        }

        MultiplicarVetores($vetorA, $vetorB);

        echo "Vetor A: ";
        print_r($vetorA);
        
        echo "<br>Vetor B: ";
        print_r($vetorB);
        
        echo "<br>Vetor R: ";
        print_r($vetorResultado);

        function MultiplicarVetores(&$vetorA, &$vetorB) {
            global $vetorResultado;
            for ($i = 1; $i <= 10; $i++) {
                $vetorResultado[$i] = $vetorA[$i] * $vetorB[$i];
            }
        }
        ?>
        <br><br>
        <button class="btn btn-success">Calcular vetor</button>
    </form>
    </body>
</html>