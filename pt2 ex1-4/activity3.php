<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <title>Activity 3</title>
    </head>

    <body>
    <div class="container">
        <?php
            function ImprimeMatriz($matriz){
                for ($i = 0; $i < sizeof($matriz); $i++) {
                    for ($j = 0; $j < 2; $j++) {
                        echo " [";
                        print_r($matriz[$i][$j]);
                        echo "]";
                    }
                    echo "<br/>";
                }
            }

            $matriz = array(
                array("Jhon"  ,"30332211"),
                array("Bob"   ,"20221212"),
                array("Clara" ,"98223311"),
                array("Linda" ,"44330293"),
                array("James" ,"38343321")
            );

            ImprimeMatriz($matriz);
        ?>
    </div>
    </body>
</html>