<!DOCTYPE html>
<body>
    <?php

    include_once "biblioteca.php";
    $radio=$_REQUEST['radio'];

        echo "El Perímetro de nuestro circulo es ".perimetro($radio)." Cm";
        echo " y el Area de nuestro circulo es ".area($radio)." Cm Cuadrados";

    ?>
</body>
</html>
