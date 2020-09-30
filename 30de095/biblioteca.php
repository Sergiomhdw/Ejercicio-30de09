<!DOCTYPE html>
<body>
    <?php

    function ram_num($numero){
        $valores = array();
        for ($i=0;$i<$numero;$i++) {
            $num_ale = rand(1,100);
            array_push($valores,$num_ale);
          }
          print_r ($valores);
        }
    function alto($valores){
        $alto = max ($valores);
        print_r($alto);
    }
    ?>
</body>
</html>