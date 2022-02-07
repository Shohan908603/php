<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //function familyName($fname){
      //  echo "$fname Refsnes.<br>";
    //}
    //familyName("shohan");
    //familyName("nasim");
    //familyName("rakib");
    //familyName("Ikbal");
    //familyName("sagor");
    //familyName("jony");//

    function familyName($name, $year) {
        echo "$name Refsnes. Born in $year <br>";
      }
      
      familyName("shohan","2002");
      familyName("rakib","2000");
      familyName("Ikbal","1999");


    ?>
</body>
</html>