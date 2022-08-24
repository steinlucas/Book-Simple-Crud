<?php
    function obterConexao() {
        $conexao = mysqli_connect("localhost", "root", "", "estante");
        return $conexao;
    }

    function pesquisarListaAutores() {
        $conexao = obterConexao();
        $comandoSQL = "SELECT * FROM autor";
        $query = mysqli_query($conexao, $comandoSQL);
        $resultado = mysqli_fetch_all($query, MYSQLI_ASSOC);

        return $resultado;
    }

    function pesquisarLivro($idLivro) {
        $conexao = obterConexao();
        $comandoSQL = "SELECT * FROM LIVRO WHERE ID = ".$idLivro;
        $query = mysqli_query($conexao, $comandoSQL);
        $resultado = mysqli_fetch_all($query, MYSQLI_ASSOC);

        return $resultado;
    }

    function pesquisarEditora($nomeEditora) {
        $conexao = obterConexao();
        $comandoSQL = "SELECT * FROM EDITORA WHERE NOME LIKE '".$nomeEditora."';";
        $query = mysqli_query($conexao, $comandoSQL);
        $resultado = mysqli_fetch_all($query, MYSQLI_ASSOC);

        return $resultado;
    }

    function pesquisarAutor($nomeAutor) {
        $conexao = obterConexao();
        $comandoSQL = "SELECT * FROM AUTOR WHERE NOME LIKE '".$nomeAutor."';";
        $query = mysqli_query($conexao, $comandoSQL);
        $resultado = mysqli_fetch_all($query, MYSQLI_ASSOC);

        return $resultado;
    }

    function pesquisarListaLivros() {
        $conexao = obterConexao();
        $comandoSQL = "SELECT * FROM LIVRO";
        $query = mysqli_query($conexao, $comandoSQL);
        $resultado = mysqli_fetch_all($query, MYSQLI_ASSOC);

        return $resultado;
    }

    function pesquisarEstanteLivros() {
        $conexao = obterConexao();
        $comandoSQL = "SELECT L.ID,
                              L.TITULO,
		                      A.NOME as nomeAutor,
		                      E.NOME as nomeEditora
                        FROM LIVRO_AUTOR LA, LIVRO L, AUTOR A, EDITORA E
                       WHERE LA.ID_LIVRO = L.ID
                         AND LA.ID_AUTOR = A.ID
                         AND L.ID_EDITORA = E.ID
                    ORDER BY L.ID;";
        $query = mysqli_query($conexao, $comandoSQL);
        $resultado = mysqli_fetch_all($query, MYSQLI_ASSOC);

        return $resultado;
    }
?>