<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 02 - POO</title>
    </head>
    <body>
        <pre> 
        <?php            
            require_once 'Caneta.php';
            $c1 = new Caneta;
            $c1->modelo = "Bic cristal";
            $c1->cor = "Azul"; 
            $c1->ponta = 0.5; 
            //var_dump($c1);
            $cprint_r($c1);           
        ?> 
        </pre>        
    </body>
</html>