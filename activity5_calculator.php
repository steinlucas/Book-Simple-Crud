<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <title>Calculadora</title>
    </head>

    <body>
    <div class="container">
        <h1>Calculadora</h1><br>
        <form method="get" action="activity5_calculator.php">
        <div class="form-group-1">
            <label for="idade" class="formulario"></label>
            <input type="number" class="form-control" id="primNumero" name="primNumero" placeholder="Informe o primeiro número">
        </div><br>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="operacao" id="adicao" value="option1" checked>
            <label class="form-check-label" for="exampleRadios1">
                Adição
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="operacao" id="subtracao" value="option2">
            <label class="form-check-label" for="exampleRadios2">
                Subtração
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="operacao" id="multiplicacao" value="option3">
            <label class="form-check-label" for="exampleRadios2">
                Multiplicação
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="operacao" id="divisao" value="option4">
            <label class="form-check-label" for="exampleRadios2">
                Divisão
            </label>
            </div>

            <br>
            <div class="form-group-1">
            <label for="idade" class="formulario"></label>
            <input type="number" class="form-control" id="segunNumero" name="segunNumero" placeholder="Informe o segundo número">
            </div>

            <br>
            <label for="resultado">Resultado: </label>
            <input class="form-control" type="text" value="
            <?php
                if (isset($_GET['primNumero']) && isset($_GET['segunNumero'])) {
                    $primNumero = $_GET['primNumero'];
                    $segunNumero = $_GET['segunNumero'];
                    $operacao = $_GET['operacao'];

                    if ($operacao == "option1"){
                        echo $primNumero + $segunNumero;
                    } else {
                        if ($operacao == "option2"){
                            echo $primNumero - $segunNumero;
                        } else {
                            if ($operacao == "option3"){
                                echo $primNumero * $segunNumero;
                            } else {
                                if ($operacao == "option4"){
                                    echo $primNumero / $segunNumero;
                                }
                            }
                        }
                    }
                }
            ?>" aria-label="Disabled input example" disabled readonly><br>
        <button class="btn btn-success" type="submit">Calcular</button>
        </form>
    </div><!--container-->
    </body>
</html>