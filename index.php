<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $text =" shohan";
    echo"My name is ".$text ;
    
     $x=20;
     $y=15;
     echo $x+$y;

     $a=20;
     $b=10;

     function myTest(){
         global $a,$b;
         $c=$a+$b;
     }

     myTest();
     echo $y;


     $t =date("H");
     if($t<"20");{
     echo"have a good day ! Have a good night !hello how are u ";
     }
     


      
    

    ?>
</body>
</html>