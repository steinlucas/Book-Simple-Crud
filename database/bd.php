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
?>