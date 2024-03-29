<?php

include_once "model\autor.php";

class AutorDAO {

    function getAutorPorNome($nomeAutor) {
        $conexao = obterConexao();

        $comandoSQL = "SELECT * FROM AUTOR WHERE NOME LIKE ?";

        $stmt = mysqli_prepare($conexao, $comandoSQL);

        mysqli_stmt_bind_param($stmt, "s", $nomeAutor);
        mysqli_stmt_execute($stmt);

        $resultado = mysqli_stmt_get_result($stmt);
        $resultado_array = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

        if ($resultado == false){
        	return null;
        } else {
            foreach ($resultado_array as $umAutor ){
                $autor = new Autor();
                $autor->setId($umAutor['id']);
                $autor->setNome($umAutor['nome']);
                $autor->setEmail($umAutor['email']);
                $autor->setWebsite($umAutor['website']);
            }

            return $autor;
        }
    }

}

?>