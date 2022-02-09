<?php

echo ("<pre>");
print_r($_POST);
echo ("</pre>");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php From</title>
</head>
<body>
    <h2>My Php From </h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        My Name :
        <input type="text" name="myName"><br><br>
        My E-mail :
        <input type="email" name="mymail"><br><br><br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <input type="submit" name="submitbtn" value="Submit">

    </form>
</body>
</html>