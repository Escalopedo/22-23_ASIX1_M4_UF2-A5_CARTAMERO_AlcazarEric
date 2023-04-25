<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./img/Arkham_Logo.png">
    <link rel="stylesheet" href="./css/styles.css">
    <title>ARKHAM RESTAURANT</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
    <!-- implementamos el fondo en el body porque tengo problemas al implementarlo en el css -->
    <style>
      body {
        background-image: url('./img/fondo4.jpg');
        background-size: cover;
        background-position: center;
        backdrop-filter: blur(5px);
      }
    </style>
    <br>
    <hr class="linea">
    <br>
    <h1><label class="simbolos"> C L d</label> ARKHAM RESTAURANT<label class="simbolos"> A U e</label> </h1>
    <br>
    <hr class="linea">
    <!-- división de las 3 columnas -->
    <div class="container">
        <div class="columna">
            <h2>CURIOSIDADES</h2>
            <?php
            // enlace al xml que nos pone las curiosidades 
            if (file_exists('./xml/menu.xml')) {
                $platos = simplexml_load_file('./xml/menu.xml');
                foreach ($platos->curiosidades as $curiosidades) {
                    echo "<hr class='linea'>";
                    echo "<h3 class='subti'>" . $curiosidades['nombre'] . "  <span class='flecha'> → </span>  " . $curiosidades['precio'] . "€ </h3>";
                    echo "<br>";
                    echo "DESCRIPCIÓN: " . $curiosidades['desc'] . "<br>";
                    echo "<br>";
                    echo "INGREDIENTES:<br>";
                    foreach ($curiosidades->caract->ingredientes as $ingrediente) {
                        echo " · " . $ingrediente['nombre'] . "<br>";
                      }
                    echo "<br>";
                    echo "CALORÍAS: " . $curiosidades['cal'] . "<br>";
                    echo "<br>";
                }
            } else {
                exit('LO SIENTO, EL RESTAURANTE ESTÁ SIENDO ATACADO POR EL COCODRILO');
            }
            ?>
        </div>
    <div class="columna">
        <h2>PIZZAS</h2>
            <?php
            // enlace al xml que nos pone las pizzas 
            if (file_exists('./xml/menu.xml')) {
                $platos = simplexml_load_file('./xml/menu.xml');
                foreach ($platos->pizzas as $pizzas) {
                    echo "<hr class='linea'>";
                    echo "<h3 class='subti'>" . $pizzas['nombre'] . "  <span class='flecha'> → </span>  " . $pizzas['precio'] . "€ </h3>";
                    echo "<br>";
                    echo "DESCRIPCIÓN: " . $pizzas['desc'] . "<br>";
                    echo "<br>";
                    echo "INGREDIENTES:<br>";
                    foreach ($pizzas->caract->ingredientes as $ingrediente) {
                        echo " · " . $ingrediente['nombre'] . "<br>";
                    }
                    echo "<br>";
                    echo "CALORÍAS: " . $pizzas['cal'] . "<br>";
                    echo "<br>";
                }
            } else {
                exit('LO SIENTO, EL RESTAURANTE ESTÁ SIENDO ATACADO POR EL COCODRILO');
            }
            ?>
    </div>
    <div class="columna">
        <h2>POSTRES</h2>
            <?php
            // enlace al xml que nos pone los postres 
            if (file_exists('./xml/menu.xml')) {
                $platos = simplexml_load_file('./xml/menu.xml');
                foreach ($platos->postres as $postres) {
                    echo "<hr class='linea'>";
                    echo "<h3 class='subti'>" . $postres['nombre'] . "  <span class='flecha'> → </span>  " . $postres['precio'] . "€ </h3>";
                    echo "<br>";
                    echo "DESCRIPCIÓN: " . $postres['desc'] . "<br>";
                    echo "<br>";
                    echo "INGREDIENTES:<br>";
                    foreach ($postres->caract->ingredientes as $ingrediente) {
                        echo " · " . $ingrediente['nombre'] . "<br>";
                    }
                    echo "<br>";
                    echo "CALORÍAS: " . $postres['cal'] . "<br>";
                    echo "<br>";
                }
            } else {
                exit('LO SIENTO, EL RESTAURANTE ESTÁ SIENDO ATACADO POR EL COCODRILO');
            }
            ?>
    </div>
    <div class="columna">
    <h2>BEBIDAS</h2>
            <?php
            // enlace al xml que nos pone las bebidas 
            if (file_exists('./xml/menu.xml')) {
                $platos = simplexml_load_file('./xml/menu.xml');
                foreach ($platos->bebida as $bebida) {
                    echo "<hr class='linea'>";
                    echo "<h3 class='subti'>" . $bebida['nombre'] . "  <span class='flecha'> → </span>  " . $bebida['precio'] . "€ </h3>";
                    echo "<br>";
                }
            } else {
                exit('LO SIENTO, EL RESTAURANTE ESTÁ SIENDO ATACADO POR EL COCODRILO');
            }
            ?>
        </div>
</div>
</body>
</html>