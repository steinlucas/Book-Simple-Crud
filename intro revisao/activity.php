<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <title>Activity 1</title>
    </head>

    <body>
    <div class="container">
        <form method="POST" action="activity1.php" name="formulario">
        <div class="form-group-1">
            <label for="nomeCompleto" class="formulario">Nome completo</label>
            <input type="text" class="form-control required" id="nomeCompleto" name="nomeCompleto" placeholder="Informe seu nome">
        </div>

        <div class="form-group-1">
            <label for="idade" class="formulario">Idade</label>
            <input type="number" class="form-control" id="idade" name="idade" placeholder="Informe sua idade">
        </div>

        <div class="form-group-1">
            <label for="email" class="formulario">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
        </div>

        <div class="form-group-1">
            <label for="genero" class="form-label">Gênero</label>
            <select id="genero" class="form-select">
            <option selected>Selecionar...</option>
            <?php
                $generos = array( "masculino", "feminino", "outro", "prefiroNaoInformar" );
                $descGeneros = array( "Masculino", "Feminino", "Outro", "Prefiro não informar" );

                for ($i = 0; $i < sizeof($generos); $i++) { ?>
                    <option value=<?php echo $generos[$i]?>><?php echo $descGeneros[$i]?></option>
                <?php } ?>
            </select>
        </div>
        
        <div class="form-group-1">
            <label for="curso" class="form-label">Curso</label>
            <select id="curso" class="form-select">
            <option selected>Selecionar...</option>
            <?php
                $cursos = array( "PROGWEB", "PADPROJ", "TESTSOFT" );
                $descCursos = array( "Programação WEB", "Padrões de projeto", "Testes de software" );

                for ($i = 0; $i < sizeof($cursos); $i++) { ?>
                    <option value=<?php echo $cursos[$i]?>><?php echo $descCursos[$i]?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group-1">
            <label for="endereco" class="formulario">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Rua 7 de setembro">
        </div>

        <div class="form-group-1">
            <label for="CEP" class="formulario">CEP</label>
            <input type="number" class="form-control" id="CEP" name="CEP" placeholder="89010000">
        </div>
        
        <div class="form-group-1">
            <label for="municipio" class="formulario">Município</label>
            <input type="text" class="form-control" id="municipio" name="municipio" placeholder="São Paulo">
        </div>

        <div class="form-group-1">
            <label for="estado" class="form-label">Estado</label>
            <select id="estado" class="form-select">
            <option selected>Selecionar...</option>
            <?php
                $estados = array( "AC", "AL", "AP", "AM", "BA", "CE", "DF", "ES", "GO", "MA", "MT", "MS", "MG", "PA", "PB", "PR", "PE", "PI", "RJ", "RN", "RS", "RO", "RR", "SC", "SP", "SE", "TO", "EX" );
                $nomeEstados = array( "Acre", "Alagoas", "Amapá", "Amazonas", "Bahia", "Ceará", "Distrito Federal", "Espírito Santo", "Goiás", "Maranhão", "Mato Grosso", "Mato Grosso do Sul", "Minas Gerais", "Pará", "Paraíba", "Paraná", "Pernambuco", "Piauí", "Rio de Janeiro", "Rio Grande do Norte", "Rio Grande do Sul", "Rondônia", "Roraima", "Santa Catarina", "São Paulo", "Sergipe", "Tocantins", "Estrangeiro" );
                for ($i = 0; $i < sizeof($estados); $i++) { ?>
                    <option value=<?php echo $estados[$i]?>><?php echo $nomeEstados[$i]?></option>
                <?php } ?>
            </select>
        </div></br></br>

        <button class="btn btn-success" type="submit">Enviar</button>
        <button class="btn btn-danger" type="reset">Limpar</button>
        </br></br>
        
        <?php
        if (isset($_POST['nomeCompleto'])) {
            $nomeCompleto = $_POST['nomeCompleto'];
            $email = $_POST['email']; ?>
            <div class="alert alert-success" role="alert">
            <?php
            echo "Prezado(a) $nomeCompleto seu cadastro foi realizado com sucesso! Em breve você receberá mais informações no e-mail $email.";
        }?>
        </div>
        </form>
    </div>
    </body>
</html>