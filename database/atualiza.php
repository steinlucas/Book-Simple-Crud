<?php
    include_once("bd.php");

    if (isset($_GET['idLivro']) == false ){
        header('Location: estanteLivros.php');
    }

    $idLivro       = $_GET['idLivroEditado'];
    $titulo        = $_GET['titulo'];
    $isbn          = $_GET['ISBN'];
    $numpaginas    = $_GET['numeroPaginas'];
    $numedicao     = $_GET['numeroEdicao'];
    $anopublicacao = $_GET['anoPublicacao'];
    $idAutor       = $_GET['idAutor'];
    $idEditora     = $_GET['idEditora'];

    $resultado = atualizarLivro($idLivro, $titulo, $isbn, $numpaginas, $numedicao, $anopublicacao, $idEditora);
    $resultado = atualizarLivroAutor($idLivro, $idAutor);
?>