<?php
    include_once("bd.php");
    $listaLivros = pesquisarEstanteLivros();
?>

<html>
    <head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <title>Estante de Livros</title>
    </head>

    <body>
    <div class="container">
    <form method="get" action="detalhesLivro.php">
    <br><br><h1>Listagem de Livros</h1>
    <br><a class="btn btn-primary" href="cadastroLivro.php">Cadastrar livro</a><br><br>

    <table class="table">
            <thead>
                <th scope="col">Nome Livro</th>
                <th scope="col">Nome Autor</th>
                <th scope="col">Nome Editora</th>
                <th scope="col" colspan="3">Opções</th>
            </thead>
            <tbody>
                <?php
                    foreach($listaLivros as $umLivro) {
                ?>
                <tr>
                    <td><?php echo $umLivro['TITULO'];?></td>
                    <td><a href="detalhesAutor.php?nomeAutor=<?php echo $umLivro['nomeAutor'];?>" class="text-primary"><?php echo $umLivro['nomeAutor'];?></a></td>
                    <td><a href="detalhesEditora.php?nomeEditora=<?php echo $umLivro['nomeEditora'];?>" class="text-primary"><?php echo $umLivro['nomeEditora'];?></a></td>
                    <td><a href="detalhesLivro.php?idLivro=<?php echo $umLivro['ID'];?>"><i class="material-icons">search</i></a></td>
                    <td><a href="atualizaLivro.php?idLivro=<?php echo $umLivro['ID'];?>"><i class="material-icons">edit</i></a></td>
                    <td><a href="exclui.php?idLivro=<?php echo $umLivro['ID'];?>"><i class="material-icons" style="color: red">delete</i></a></td>
                <?php
                    }
                ?>
                </tr>
            </tbody>
        </table>
    </form>
    </body>
</html>