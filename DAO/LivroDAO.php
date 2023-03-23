<?php

include_once "bd.php";
include_once "model\livro.php";

class LivroDAO {

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

        if ($resultado == false){
        	return null;
        } else {
            $livros = array();
            foreach ($resultado as $umLivro){
                $livro = new Livro();

                $livro->setIdLivro($umLivro['ID']);
                //$livro->setNome($umLivro['nome']);
                //$livro->setEmail($umLivro['email']);
                //$livro->setWebsite($umLivro['website']);

                $livros = array($livro);

            }

            return $livros;
        }
    }
}