<!DOCTYPE html>
<html>
<body>
    <?php
        /*print("hello world1");
        echo "hello world2";
        print "hello world3";
        echo "hello" . "eii" . "world4";
        echo "<br>";

        $a = 1; //variable
        $b = 1;
        $c = 1;
        $d = array(1,2,3); //array
        imprimirValor($a);
        imprimirValor($d[0]);
        imprimirValor($a);
        imprimirValor($a);

        while($a<10){
            $a=augmentarValor($a);
            imprimirValor($a);
        }
        do{
            $a++;
            echo "el valor és: " . $a . "<br>";
        }while($a<10);

        function augmentarValor($a){
            $a++;
            return $a;
        }
        function imprimirValor($a){
            echo "el valor és: " . $a . "<br>";*/
        /*
        hola
        */
        
       /* $num=0;
        while($num<20){
            $num=augmentarDoble($num);
            imprimirDoble($num);
        }
        function augmentarDoble($num){
            $num=$num+2;
            return $num;
        }
        function imprimirDoble($num){
            echo "<h1>El valor és: " . $num . "</h1>";
        }

        //array de 4 paraules, fer totes combos possibles
        $words = array("Hola","Adeu","So","Fi");

        for($x=0;$x<count($words);$x++){
            for ($y=$x+1;$y<count($words);$y++){
                    echo $words[$x] . $words[$y] . "<br>";
            }
        }*/

        //condicionals
        $nom=0;
        if ($nom==0):
    ?>
      <!---  <button type=button>Si es compleix</button> --->
    <?php
        else:
    ?>
        <h2>No es compleix</h2> 
    <?php
        endif;
    ?>

    <h2>Hello</h2>
    <?php
        //agafar el codi del altre fitxer sense escrivir-ho de nou
        //condicional, si es compleix boto per canviar pagina, si es compleix un boto per tornar
        $variable=0;
        if ($variable==0){
            include("canviarpagina.php");
            echo $botons[2];
        }
        else{
            echo "No.";
        }
    ?>
</body>
</html>