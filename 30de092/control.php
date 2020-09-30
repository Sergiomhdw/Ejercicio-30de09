<!DOCTYPE html>
<body>
    <?php
    
    $numero=$_REQUEST['numero'];

    if ($numero == 1){
        echo ("El numero ".$numero." corresponde al Lunes");
    }
    else if($numero == 2){
        echo ("El numero ".$numero." corresponde al Martes");
    }
    else if($numero == 3){
        echo ("El numero ".$numero." corresponde al Miercoles");
    }
    else if($numero == 4){
        echo ("El numero ".$numero." corresponde al Jueves");
    }
    else if($numero == 5){
        echo ("El numero ".$numero." corresponde al Viernes");
    }
    else if($numero == 6){
        echo ("El numero ".$numero." corresponde al Sabado");
    }
    else if($numero == 7){
        echo ("El numero ".$numero." corresponde al Domingo");
    }
    else{
        echo ("Ese número no está entre el 1 y el 7");
    }


    ?>
</body>
</html>
