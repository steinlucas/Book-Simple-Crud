<?php
    include_once("bd.php");
    $listaEditoras = pesquisarEditora($_GET['nomeEditora']);
?>

<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <title>Editora</title>
    </head>

    <body>
    <div class="container">
    <h1>Detalhes de Editora</h1>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Cidade</th>
            <th scope="col">Telefone</th>
            <th scope="col">E-mail</th>
            <th scope="col">Website</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($listaEditoras as $umaEditora) {
            ?>
            <tr>
            <th scope="row"><?php echo $umaEditora['id'];?></th>
            <td><?php echo $umaEditora['nome'];?></td>
            <td><?php echo $umaEditora['cidade'];?></td>
            <td><?php echo $umaEditora['telefone'];?></td>
            <td><?php echo $umaEditora['email'];?></td>
            <td><?php echo $umaEditora['website'];?></td>
            <?php
                }
            ?>
            
            </tr>
        </tbody>
    </table>
    <a class="btn btn-primary" href="estanteLivros.php">Voltar</a>
    </body>
</html>