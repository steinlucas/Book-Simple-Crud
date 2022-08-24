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
            echo 'Listar os dados das pessoas acima de 50 anos.<br>';
            foreach ($listaPessoas as $umaPessoa) {
                if ($umaPessoa['idade'] > 50) {
                    echo ($umaPessoa['nr']. ' - '.$umaPessoa['nome'].' - '.$umaPessoa['idade'].' - '.$umaPessoa['cidade'].'<br>');
                }
            }
        }

        function listaPessoasGaspar($listaPessoas) {
            echo 'Listas os dados de todas as pessoas da cidade da Gaspar.<br>';
            foreach ($listaPessoas as $umaPessoa) {
                if ($umaPessoa['cidade'] == 'Gaspar') {
                    echo ($umaPessoa['nr']. ' - '.$umaPessoa['nome'].' - '.$umaPessoa['idade'].' - '.$umaPessoa['cidade'].'<br>');
                }
            }
        }

        function listaPessoasComecamABC($listaPessoas) {
            echo 'Listar os dados das pessoas que começam com as letras A, B ou C.<br>';
            foreach ($listaPessoas as $umaPessoa) {
                if (substr($umaPessoa['nome'], 0, 1) == 'A' || substr($umaPessoa['nome'], 0, 1) == 'B' || substr($umaPessoa['nome'], 0, 1) == 'C') {
                    echo ($umaPessoa['nr']. ' - '.$umaPessoa['nome'].' - '.$umaPessoa['idade'].' - '.$umaPessoa['cidade'].'<br>');
                }
            }
        }

        function listaPessoasAcima60DeGaspar($listaPessoas) {
            echo 'Listar os dados das pessoas maiores de 60 anos da cidade de Gaspar.<br>';
            foreach ($listaPessoas as $umaPessoa) {
                if ($umaPessoa['idade'] > 60 && $umaPessoa['cidade'] == 'Gaspar') {
                    echo ($umaPessoa['nr']. ' - '.$umaPessoa['nome'].' - '.$umaPessoa['idade'].' - '.$umaPessoa['cidade'].'<br>');
                }
            }
        }

        $listaPessoas = [];
        
        $pessoa1 = ['nr' => 1, 'nome'=> 'Lucas',    'idade' => '49', 'cidade' => 'Blumenau'];
        $pessoa2 = ['nr' => 2, 'nome'=> 'Henrique', 'idade' => '50', 'cidade' => 'Blumenau'];
        $pessoa3 = ['nr' => 3, 'nome'=> 'Juliano',  'idade' => '53', 'cidade' => 'Blumenau'];
        $pessoa4 = ['nr' => 4, 'nome'=> 'Bruno', 'idade' => '61', 'cidade' => 'Gaspar'];
        $pessoa5 = ['nr' => 5, 'nome'=> 'Sorocaba', 'idade' => '60', 'cidade' => 'Brusque'];
        $pessoa6 = ['nr' => 6, 'nome'=> 'Maiara',   'idade' => '71', 'cidade' => 'Gaspar'];
        $pessoa7 = ['nr' => 7, 'nome'=> 'Maraisa',  'idade' => '29', 'cidade' => 'Brusque'];
        $pessoa8 = ['nr' => 8, 'nome'=> 'Alok',     'idade' => '82', 'cidade' => 'Gaspar'];
        $pessoa9 = ['nr' => 9, 'nome'=> 'Carreira', 'idade' => '21', 'cidade' => 'Brusque'];
        $pessoa10 = ['nr' => 10, 'nome'=> 'Lima',   'idade' => '47', 'cidade' => 'Blumenau'];

        $listaPessoas[] = $pessoa1;
        $listaPessoas[] = $pessoa2;
        $listaPessoas[] = $pessoa3;
        $listaPessoas[] = $pessoa4;
        $listaPessoas[] = $pessoa5;
        $listaPessoas[] = $pessoa6;
        $listaPessoas[] = $pessoa7;
        $listaPessoas[] = $pessoa8;
        $listaPessoas[] = $pessoa9;
        $listaPessoas[] = $pessoa10;

        listaPessoasAcima50($listaPessoas);
        listaPessoasGaspar($listaPessoas);
        listaPessoasComecamABC($listaPessoas);
        listaPessoasAcima60DeGaspar($listaPessoas);
        ?>
        <br><br>
        <button class="btn btn-success">Calcular vetor</button>
    </form>
    </body>
</html>