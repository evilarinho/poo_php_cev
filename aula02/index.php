<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 02 - POO</title>
    </head>
    <body>
        <?php 
            require_once 'Caneta.php';
            $c1 = new Caneta;
            $c1->cor = "Azul";
            $c1->ponta = 0.5;
            // $c1->tampada = false;
            $c1->tampar();
            print_r($c1);
            echo "<br/>";

            // var_dump($c1);
            // echo "<br>";
            
            $c2 = new Caneta;
            $c2->cor = "Verde";
            $c2->carga = 50;
            $c2->tampar();
            print_r($c2);



            //$c1->rabiscar();          
               

           
        ?> 
        <!--<h1>Teste</h1>-->
    </body>
</html>