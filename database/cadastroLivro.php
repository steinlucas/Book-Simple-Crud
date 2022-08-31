<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <title>Cadastro de Livros</title>
    </head>


<body>
    <div class="container">
    <h1>Listagem de Livros</h1>
    <form action="inclui.php" method="post">
        <div class="form-group">
        <label for="titulo">Título:</label>
        <input type="text" class="form-control" id="titulo" name="titulo">
        </div>
        <div class="form-group">
            <label for="ISBN">ISBN:</label>
            <input type="number" class="form-control" id="ISBN" name="ISBN">
        </div>
        <div class="form-group">
            <label for="numeroPaginas">Número de páginas:</label>
            <input type="number" class="form-control" id="numeroPaginas" name="numeroPaginas">
        </div>
        <div class="form-group">
            <label for="numeroEdicao">Número da edição:</label>
            <input type="number" class="form-control" id="numeroEdicao" name="numeroEdicao">
        </div>
        <div class="form-group">
            <label for="anoPublicacao">Ano de publicação:</label>
            <input type="number" class="form-control" id="anoPublicacao" name="anoPublicacao">
        </div>
    </form>
    <a class="btn btn-primary" href="estanteLivros.php">Voltar</a>
    </div>
</body>
</html>