<?php
    include_once("bd.php");

    if (isset($_GET['idLivro']) == false ){
        header('Location: estanteLivros.php');
    }

    $id = $_GET['idLivro'];
    
    $resultado = excluirLivroAutor($id);
    $resultado = excluirLivro($id);
    header('Location: estanteLivros.php');
?>