<?php

$error = [];
if ($_POST) {
    $name_pattern = '/^[a-zA-Z-\' ]*$/';
    $email_pattern = '/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/';
    

    $uppercase = preg_match('@[A-Z]@', ($_POST['password']));
    $lowercase = preg_match('@[a-z]@', ($_POST['password']));
    $number    = preg_match('@[0-9]@', ($_POST['password']));


    if (!preg_match($name_pattern, ($_POST['fristname']))) {
        $error['fristname'] = 'Enter your valid name [a-z/A-Z]';
        

    }
    if (!preg_match($name_pattern, ($_POST['lastname']))) {
        $error['lastname'] = 'Enter your valid name [a-z/A-Z ]';

    }
    if (!preg_match($email_pattern, ($_POST['email']))) {
        $error['email'] = 'Enter vaild email [a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}';
    }

    if (!$uppercase || !$lowercase || !$number || strlen($_POST['password']) < 10) {
        $error['password'] = 'Enter vaild password ([A-Z/a-z/0-9]<10)';
    }

    echo ("<pre>");
    print_r($_POST);
    echo ("</pre>");
}


 
/*function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}*/
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation From</title>
</head>
<body>
    <div class="main">
        <h2 style="text-align: center;">Validation From</h2>
        <form class="from-section" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

            <b><label>Frist Name :<br></label></b>
            <input type="text" class="text" name="fristname" placeholder="Enter your name"><br><br>

            <b><p style="color:white;">
            <?php echo $error['fristname'] ?? '' ?>
            </p></b>




            <b><label>Last Name :<br></label></b>
            <input type="text" class="text" name="lastname" placeholder="Enter your name"><br><br>

            <b><p  style="color:white;">
                <?php echo $error['lastname'] ?? '' ?>
            </p></b>


            <b><label>Password :<br></label></b>
            <input type="password" class="text" name="password" placeholder="Enter your password"><br><br>

            <b><p  style="color:white;">
                <?php echo $error['password'] ?? '' ?>
            </p></b>

            <b><label>E-mail :<br></label></b>
            <input type="email" class="text"  name="email" placeholder="Enter your email"><br><br>

           <b> <p  style="color:white;">
                <?php echo $error['email'] ?? '' ?>
            </p></b>

            <b><label>Gender :<br></label></b>
            <input type="radio" name="Female" >Female<br>
            <input type="radio" name="Male" >Male<br>
            <input type="radio" name="Other">Other<br><br>

            <b><label>Age :<br></label></b>
            <input type="number" class="text" name="Age" placeholder="Enter your age"><br><br>


            <b><label>Choose Your Option :</label><br></b>
            <select name="Select" class="text">
                <option>Student</option>
                <option>Doctor</option>
                <option>Teacher</option>
                <option>Engineer</option>
                <option>Busniess</option>
            </select><br><br>


            <b><label>Choose Your Subject :</label><br></b>
            <input type="checkbox" name="Bangla">Bangla<br>
            <input type="checkbox" name="English">English<br>
            <input type="checkbox" name="Mathematics">Mathematics<br>
            <input type="checkbox" name="Physics" >Physics<br>
            <input type="checkbox" name="Chemistry" >Chemistry<br>
            <input type="checkbox" name="Biology" >Biology<br><br>

            <b><label>Message :<br></label></b>
            <textarea name="Message" class="text" placeholder="Enter your comment"></textarea><br><br>

            <input type="reset" class="button" name="Reset" value="Reset">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit" class="button" name="Submit" value="Submit">
        </form>
    </div>
</body>
</html>