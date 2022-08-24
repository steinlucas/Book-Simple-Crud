<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <title>Activity 4</title>
    </head>

    <body>
    <div class="container">
        <form method="GET" action="activity4.php" name="formulario">
        
        <div class="form-group-1">
            <label for="numeroHorasTrabalhadas" class="formulario">Número de horas trabalhadas</label>
            <input type="number" class="form-control" id="numeroHorasTrabalhadas" name="numeroHorasTrabalhadas" placeholder="Insira o número de horas trabalhadas">
        </div>

        <div class="form-group-1">
            <label for="valorHoras" class="formulario">Valor das horas</label>
            <input type="number" class="form-control" id="valorHoras" name="valorHoras" placeholder="Insira o valor das horas">
        </div>

        <div class="form-group-1">
            <label for="valorDesconto" class="formulario">Valor do desconto</label>
            <input type="number" class="form-control" id="valorDesconto" name="valorDesconto" placeholder="Insira o valor do desconto">
        </div>

        </br>
        <button class="btn btn-success" type="submit">Calcular</button>
        <button class="btn btn-danger" type="reset">Limpar</button>
        </br></br>
        <p>
        <?php
            if (isset($_GET['numeroHorasTrabalhadas'])) {
                $numeroHorasTrabalhadas = $_GET['numeroHorasTrabalhadas'];
                $valorHoras = $_GET['valorHoras'];
                $valorDesconto = $_GET['valorDesconto'];
                echo "$numeroHorasTrabalhadas X $valorHoras - $valorDesconto = ".$numeroHorasTrabalhadas * $valorHoras - $valorDesconto;
            }
        ?>
        </p>
    </form>
    </body>
</html>