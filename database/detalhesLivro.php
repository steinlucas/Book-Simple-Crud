<?php
    include_once("bd.php");
    $listaLivros = pesquisarListaLivros($_GET['idLivro']);
?>

<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <title>Livros</title>
    </head>

    <body>
    <div class="container">
    <h1>Detalhes de Livros</h1>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Título</th>
            <th scope="col">ISBN</th>
            <th scope="col">Num Páginas</th>
            <th scope="col">Num Edição</th>
            <th scope="col">Ano Publicação</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($listaLivros as $umLivro) {
            ?>
            <tr>
            <th scope="row"><?php echo $umLivro['id'];?></th>
            <td><?php echo $umLivro['titulo'];?></td>
            <td><?php echo $umLivro['isbn'];?></td>
            <td><?php echo $umLivro['numpaginas'];?></td>
            <td><?php echo $umLivro['numedicao'];?></td>
            <td><?php echo $umLivro['anopublicacao'];?></td>
            <?php
                }
            ?>
            </tr>
        </tbody>
    </table>
    <a class="btn btn-primary" href="estanteLivros.php">Voltar</a>
    </body>
</html>