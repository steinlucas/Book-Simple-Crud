<?php
    include_once("bd.php");
    $listaAutores  = pesquisarListaAutores();
    $listaEditoras = pesquisarListaEditoras();
    $listaLivros   = pesquisarLivro($_GET['idLivro']);
?>

<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <title>Cadastro de Livros</title>
    </head>

    <body>
        <?php
            foreach($listaLivros as $umLivro) {
        ?>
        <div class="container">
        <br><br><h1>Atualização de livro</h1><br>

        <form method="GET" action="atualiza.php">
            <div class="form-group">
            
            <input type="hidden" class="form-control" id="idLivroEditado" name="idLivroEditado" value="<?php echo $umLivro['id'];?>">

            <label for="titulo">Título</label>
            <input type="text" required class="form-control" id="titulo" name="titulo" value="<?php echo $umLivro['titulo'];?>">
            </div><br>

            <div class="form-group">
                <label for="ISBN">ISBN</label>
                <input type="number" required class="form-control" id="ISBN" name="ISBN" value="<?php echo $umLivro['isbn'];?>">
            </div><br>

            <div class="form-group">
                <label for="numeroPaginas">Número de páginas</label>
                <input type="number" required class="form-control" id="numeroPaginas" name="numeroPaginas" value="<?php echo $umLivro['numpaginas'];?>">
            </div><br>

            <div class="form-group">
                <label for="numeroEdicao">Número da edição</label>
                <input type="number" required class="form-control" id="numeroEdicao" name="numeroEdicao" value="<?php echo $umLivro['numedicao'];?>">
            </div><br>

            <div class="form-group">
                <label for="anoPublicacao">Ano de publicação</label>
                <input type="number" required class="form-control" id="anoPublicacao" name="anoPublicacao" value="<?php echo $umLivro['anopublicacao'];?>">
            </div><br>
            
            <div class="form-group">
                <label for="autor" class="form-label">Autor</label>
                <select required id="autor" class="form-select" name="idAutor">
                <?php
                    foreach($listaAutores as $umAutor) {?>
                        <option value=<?php echo $umAutor['id']?>><?php echo $umAutor['nome']?></option>
                <?php } ?>
                </select>
            </div><br>

            <div class="form-group">
                <label for="idEditora" class="form-label">Editora</label>
                <select required id="idEditora" class="form-select" name="idEditora">
                <?php
                    foreach($listaEditoras as $umaEditora) {?>
                        <option value=<?php echo $umaEditora['id']?>><?php echo $umaEditora['nome']?></option>
                <?php } ?>
                </select>
            </div>
            
            <br><a class="btn btn-primary" href="estanteLivros.php">Voltar</a>
            <input class="btn btn-success" type="submit" value="Atualizar">
        </form>
        </div>
        <?php
        }
        ?>
    </body>
</html>