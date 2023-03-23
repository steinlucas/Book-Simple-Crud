<?php
    include_once "bd.php";
    include_once "DAO/AutorDAO.php";

    $autor = new AutorDAO();

    $autorRetornado = $autor->getAutorPorNome($_GET['nomeAutor']);
?>

<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <title>Autor</title>
    </head>

    <body>
    <div class="container">
    <h1>Detalhes de Autor</h1>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Website</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row"><?php echo $autorRetornado->getId() ;?></th>
            <td><?php echo $autorRetornado->getNome(); ?></td>
            <td><?php echo $autorRetornado->getEmail() ;?></td>
            <td><?php echo $autorRetornado->getWebsite() ;?></td>
            </tr>
        </tbody>
    </table>
    <a class="btn btn-primary" href="estanteLivros.php">Voltar</a>
    </body>
</html>