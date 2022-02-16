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
    <h2 style="text-align: center;">My Php From </h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div style="border: 3px solid rgba(86, 165, 70, 0.6); display: flex;padding: 20px;margin: 20px  150px  0  150px;">
              <div style="width: 50%;" >
                <fieldset>
                    <legend style="color: rgba(127, 230, 123, 0.8); border: 2px solid rgb(129, 231, 104);">All Input Type:</legend>
                    <label>Search:</label><br>
                    <input type="search" name="search"><br><br>

                    <label>My Name:</label><br>
                    <input type="text" name="myname"><br><br>

                    <label>Password:</label><br>
                    <input type="password" name="password"><br><br>

                    <label>Radio:</label><br>
                    <input type="radio" name="radio">
                    <label>Female</label><br>
                    <input type="radio" name="radio">
                    <label>Male</label>
                    <br><br>

                    <label>E-mail:</label><br>
                    <input type="email" name="myemail"><br><br>

                    <label>Cheakbox:</label><br>
                    <input type="checkbox" name="cheakbox">
                    <label>6th</label><br>
                    <input type="checkbox" name="cheakbox">
                    <label>7th</label><br>
                    <input type="checkbox" name="cheakbox">
                    <label>8th</label>
                    <br><br>

                    <label>Color:</label><br>
                    <input type="color" name="color"><br><br>

                    <label>Date:</label><br>
                    <input type="date" name="date"><br><br>

                    <label>Datetime:</label><br>
                    <input type="datetime-local" name="datetime"><br><br>

                    <label>Multiple Select:</label><br>
                    <select name="multiple-select" multiple>
                        <option>Biplop</option>
                        <option>Masud</option>
                        <option>Jakir</option>
                        <option>Sagor</option>
                        <option>Sabbir</option>
                        <option>Sojol</option>
                    </select>
                </fieldset>    
             </div>
             <div style="width: 50%;">
                <fieldset>
                    <legend style="color: rgba(127, 230, 123, 0.8); border: 2px solid rgb(129, 231, 104);">All Input Type:</legend>
                    <lable>File:</lable><br>
                    <input type="file" name="file"><br><br>

                    <label>Hidden:</label><br>
                    <input type="hidden" name="hidden"><br><br>
                    
                    <label> Month:</label><br>
                    <input type="month" name="month"><br><br>

                    <label>Number:</label><br>
                    <input type="number" name="number"><br><br>

                    <label>Range:</label><br>
                    <input type="range" name="range"><br><br>

                    <label>Tel:</label><br>
                    <input type="tel" name="tel"><br><br>

                    Time:
                    <input type="time" name="time"><br><br><!--
                    Url:
                    <input type="url" name="url"><br><br>-->
                    Week:
                    <input type="week" name="week"><br><br>
                    Image:
                    <input type="image" src="https://images.unsplash.com/photo-1523712999610-f77fbcfc3843?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" name="image" width="50px" height="40px"><br><br>
                    <label>Select:</label>
                    <select name="select">
                        <option>shohan</option>
                        <option>Rakib</option>
                        <option>Iqbal</option>
                        <option>Bondhon</option>
                        <option>Jony</option>
                        <option>Naim</option>
                    </select><br><br>

                   <button type="button" name="button" onclick="alert('Welcome All Input Type')">Click Me </button><br><br>

                    <label>Coment</label><br>
                    <textarea name="message">
                        
                    </textarea><br><br>

                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="reset" name="reset"value="Reset">
                    <input type="submit" name="submit" value="Submit">

                </fieldset>    
              </div>
        </div>

    </form>
</body>
</html>