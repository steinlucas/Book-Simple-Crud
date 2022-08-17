<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <title>Activity 3</title>
    </head>

    <body>
    <div class="container">
        <form method="GET" action="activity3.php" name="formulario">
        
        <div class="form-group-1">
            <label for="value" class="formulario">Valor</label>
            <input type="number" class="form-control" id="value" name="value" placeholder="Set a value">
        </div>

        </br>
        <button class="btn btn-success" type="submit">Mostrar</button>
        <button class="btn btn-danger" type="reset">Limpar</button>
        </br></br>
        <p>
        <?php
            if (isset($_GET['value'])) {
                $value = $_GET['value'];

                for ($i = 0; $i <= 10; $i++){
                    echo "$value X $i = ".$value*$i."<br>";
                }
            }
        ?>
        </p>
    </form>
    </body>
</html>