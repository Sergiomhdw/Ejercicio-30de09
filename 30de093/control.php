<!DOCTYPE html>
<body>
    <?php
    
    $numero = $_REQUEST['numero'];

    $lista = array_map('intval', str_split($numero));
    echo "Nuestro numero ".$numero." tiene ";echo strlen($numero); echo " digitos.";
    

    

    ?>
</body>
</html>
