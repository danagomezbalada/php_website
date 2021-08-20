<!--<form action="/1920/codi/activitats/rebre_metode_get.php" method="post">-->
<form action="" method="post">
    <input type="text" name="name" placeholder="Nom"/><br>
    <input type="text" name="age" placeholder="Edat"/><br>
    <input type="text" name="height" placeholder="Alçada"/><br>
    <input type="submit" name="submit" value="Envia">
    <input type="submit" name="search" value="Cerca">
</form>

<?php
    require("./classes/Persona.php");

    function desarPersonaBD($persona){
            require_once("./database/connection.php");
            $sentencia_desar_persona = "INSERT INTO `persones` (`Nom`, `Edat`, `Alçada`) VALUES 
            ('" . $persona->getName() ."', '" . $persona->getAge()*1 . "', '" . $persona->getHeight()*1 . "')";
            mysqli_query($connexio, $sentencia_desar_persona);
            mysqli_close($connexio);
    }

    function carregarPersonaBD(){
            require_once("./database/connection.php");
            $sentencia_desar_persona = "SELECT * FROM `persones`";
            $resultat = mysqli_query($connexio, $sentencia_desar_persona);
            while($fila = mysqli_fetch_assoc($resultat)){
                echo 'Ets el/la: ' . $fila["Nom"] . '. Tens ' . $fila["Edat"] . ' anys. Medeixes: '. $fila["Alçada"] .'cms. <br>';
            }
            
            mysqli_close($connexio);
    }

    /*
        if(isset($_GET["submit"])){
            if($_GET["name"] == "Joel" && $_GET["age"] == "20"){
                echo "<h1>Ei!</h1>";
            } else {
                echo "el teu nom és: " . $_GET["name"] . " i l'edat: " . $_GET["age"];
            }
        }
    */
        if(isset($_POST["submit"])){
            if($_POST["name"] != "" && $_POST["age"] != "" && $_POST["height"] != ""){
                $persona = new Persona($_POST["name"], $_POST["age"], $_POST["height"]);
            } else {
                $persona = new Persona("Ningú", 0, 0);;
            }
            echo 'Ets el/la: ' . $persona->getName() . '. Tens ' . $persona->getAge() . ' anys. Medeixes: '.$persona->getHeight().'cms.';
            desarPersonaBD($persona);
        }

        if(isset($_POST["search"])){
            carregarPersonaBD();
        }
    ?>
