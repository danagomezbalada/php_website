<html>
<body>
    <h2>Welcome</h2>
    <?php
        //condicional, si es compleix boto per canviar pagina, si es compleix un boto per tornar
        include("canviarpagina.php");
        echo $botons[2];
        echo "Name: " . $_GET["name"] . "<br>" . "Age: " . $_GET["age"] . "<br>" . "Height: " . $_GET["height"] . "<br>";
    ?>
</body>
</html>