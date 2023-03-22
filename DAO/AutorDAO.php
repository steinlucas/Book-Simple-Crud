<?php

class AutorDAO {
    function create(){
        // recebe um objeto e insere no banco.
    }

    function delete(){
        // recebe um objeto e dropa do banco.
    }

    function update(){
        // recebe um objeto e atualiza no banco.
    }

    function getAutorPorNome($nomeAutor) {
        $comandoSQL = "SELECT * FROM AUTOR WHERE NOME LIKE ".$nomeAutor."";

        $conexao = obterConexao();

        $stmt = mysqli_prepare($conexao, $comandoSQL);

        $dadosPessoa = mysqli_stmt_get_result($stmt);
        
        //$dadosPessoa = $conexao->fetch(PDO::FETCH_ASSOC); #Executa a consulta no banco de dados

        //$query = mysqli_query($conexao, $comandoSQL);
        //$dadosPessoa = mysqli_fetch_all($query, MYSQLI_ASSOC);

        if ($dadosPessoa == false){
        	return NULL;
        }

        return $dadosPessoa;
    }

    function getPessoaPorId($id){
		
		$sql = "SELECT * FROM pessoa where id = :id";    
		$stmt = $this->conexao->prepare($sql);
		$stmt->bindParam(':id', $id);
		$stmt->execute();

        $dadosPessoa = $stmt->fetch(PDO::FETCH_ASSOC); #Executa a consulta no banco de dados
        
        if ($dadosPessoa == false){
        	return NULL;
        }

        else{
        	$pessoa = new Pessoa(); #Cria um objeto pessoa para cada registro do BD
    	    $pessoa->setId($dadosPessoa['id']);
    	    $pessoa->setNome($dadosPessoa['nome']);
    	    $pessoa->setCpf($dadosPessoa['cpf']);
    	    return $pessoa;

    	}
    }

}

?>