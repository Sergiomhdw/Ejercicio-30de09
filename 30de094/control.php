<!DOCTYPE html>
<body>
    <?php
   
    $numero = $_REQUEST['numero'];
    $i = 0;
        print("<h2>La tabla de multiplicar del numero $numero </h2>");
        while($i<=10){
            print("$numero x $i = ".$numero*$i."<br>");
            $i++;
        }

    ?>
</body>
</html>