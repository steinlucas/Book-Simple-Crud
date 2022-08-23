<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <title>Activity pt 2 ex 4</title>
    </head>

    <body>
    <div class="container">
        <form method="POST" name="formulario">
        <br>
        <p>
        <?php
        function listaPessoasAcima50($listaPessoas) {
            foreach ($listaPessoas as $umaPessoa) {
                
                if ($umaPessoa['idade'] > 50) {
                    echo ($umaPessoa['nr']. ' - '.$umaPessoa['nome'].' - '.$umaPessoa['idade'].'<br>');
                }
            }
        }

        $listaPessoas = [];
        
        $pessoa1 = ['nr' => 1, 'nome'=> 'Lucas', 'idade' => '49'];
        $pessoa2 = ['nr' => 2, 'nome'=> 'Henrique', 'idade' => '50'];
        $pessoa3 = ['nr' => 3, 'nome'=> 'Juliano', 'idade' => '53'];

        $listaPessoas[] = $pessoa1;
        $listaPessoas[] = $pessoa2;
        $listaPessoas[] = $pessoa3;

        listaPessoasAcima50($listaPessoas);

        ?>
        <br><br>
        <button class="btn btn-success">Calcular vetor</button>
    </form>
    </body>
</html>