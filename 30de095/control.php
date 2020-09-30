<!DOCTYPE html>
<body>
    <?php
    
    include_once "biblioteca.php";

    $numero =$_REQUEST['numero'];
    

    $valores = ram_num($numero);
    print_r($values);
    //echo $valores;
    echo alto($valores);

    
    ?>
</body>
</html>
