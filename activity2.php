<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <title>Activity 2</title>
    </head>

    <body>
    <div class="container">
        <form method="POST" action="activity2.php" name="formulario">
        <div class="form-group-1">
            <label for="nomeCompleto" class="formulario">Nome completo</label>
            <input type="text" class="form-control required" id="nomeCompleto" name="nomeCompleto" placeholder="Informe seu nome">
        </div>

        <div class="form-group-1">
            <label for="idade" class="formulario">Idade</label>
            <input type="number" class="form-control" id="idade" name="idade" placeholder="Informe sua idade">
        </div>
    <br><br>

        <button class="btn btn-success" type="submit">Enviar</button>
        <button class="btn btn-danger" type="reset">Limpar</button>
        </br></br>
        
        <?php
        if (isset($_POST['nomeCompleto'])) {
            $nomeCompleto = $_POST['nomeCompleto'];
            $idade = $_POST['idade']; ?>
            <div class="alert alert-success" role="alert">
            <?php
            echo "Nome: $nomeCompleto<br>";
            echo "Idade: $idade<br>";

            if ($idade >= 18){
                echo "Você já é maior de idade!";
            } else {
                echo "Você é menor de idade!";
            }
        }?>
        </div>
        </form>
    </div>
    </body>
</html>