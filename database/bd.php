<?php
    function obterConexao() {
        $conexao = mysqli_connect("localhost", "root", "aluno", "estante");
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
        $comandoSQL = "SELECT * FROM LIVRO WHERE ID = ?;";
        
        $stmt = mysqli_prepare($conexao, $comandoSQL);
        mysqli_stmt_bind_param($stmt, "s", $idLivro);
        mysqli_stmt_execute($stmt);

        $resultado = mysqli_stmt_get_result($stmt);
        $resultado_array = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

        return $resultado_array;
    }

    function pesquisarEditora($nomeEditora) {
        $conexao = obterConexao();
        $comandoSQL = "SELECT * FROM EDITORA WHERE NOME LIKE ?;";
        $stmt = mysqli_prepare($conexao, $comandoSQL);
        mysqli_stmt_bind_param($stmt, "s", $nomeEditora);
        mysqli_stmt_execute($stmt);

        $resultado = mysqli_stmt_get_result($stmt);
        $resultado_array = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

        return $resultado_array;
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
        $comandoSQL = "SELECT * FROM LIVRO;";
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