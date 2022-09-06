<?php
    include_once("bd.php");

    if (isset($_GET['titulo']) == false ){
        header('Location: estanteLivros.php');
    }

    $titulo = $_GET['titulo'];
    $ISBN = $_GET['ISBN'];
    $numeroPaginas = $_GET['numeroPaginas'];
    $numeroEdicao = $_GET['numeroEdicao'];
    $anoPublicacao = $_GET['anoPublicacao'];
    $idAutor = $_GET['idAutor'];
    $idEditora = $_GET['idEditora'];
    
    /*if (validarNome($titulo) == false){ // funcao em validacoes.php
        header('Location: estanteLivros.php');
    }*/

    $resul = gravarLivro($titulo, $ISBN, $numeroPaginas, $numeroEdicao, $anoPublicacao, $idEditora); // funcao em bd.php
    $resultado2 = gravarLivroAutor($idAutor);
    header('Location: estanteLivros.php');
?>