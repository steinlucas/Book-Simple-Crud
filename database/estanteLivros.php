<?php
    include_once("bd.php");
    $listaLivros = pesquisarEstanteLivros();
?>

<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <title>Estante de Livros</title>
    </head>

    <body>
    <div class="container">
    <form method="get" name="formulario" action="detalhesLivro.php">
    <h1>Listagem de Livros</h1>
        <table class="table">
            <thead>
                <th scope="col">Id Livro</th>
                <th scope="col">Nome Livro</th>
                <th scope="col">Nome Autor</th>
                <th scope="col">Nome Editora</th>
                <th scope="col">Detalhes</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($listaLivros as $umLivro) {
                ?>
                <tr>
                    <th scope="row" name="idLivro" value="<?php echo $umLivro['ID'];?>"><?php echo $umLivro['ID'];?></th>
                    <td><?php echo $umLivro['TITULO'];?></td>
                    <td><?php echo $umLivro['nomeAutor'];?></td>
                    <td><?php echo $umLivro['nomeEditora'];?></td>
                    <td><button type="submit" class="btn btn-primary"><a href="detalhesLivro.php?idLivro=<?php echo $umLivro['ID'];?>">Submit me!</a></button></td>
                <?php
                    }
                ?>
                </tr>
            </tbody>
        </table>
    </form>
    </body>
</html>