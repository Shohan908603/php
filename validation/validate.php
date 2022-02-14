<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
    <div style="padding-top: 8%;">
        <form class="col-md-4 border shadow-sm bg-light" style="margin-top:8%;padding:10px; width: 50%; margin: auto;padding-top: 2%;">
            <div>
                <h2>Sign Up</h2>
            </div>
            <div style="display: flex;" >
                <div style="padding-left:40px ;">
                    <label>Frist Name </label><br>
                    <input type="text" id="fname" placeholder="Your Frist name" name="fristname">
                </div>

                <div style="padding-left: 5px;">
                    <label>Last Name </label><br>
                    <input type="text" id="lname" placeholder="Your Last name" name="lastname">
                </div>
            </div>

            <div style="padding-left:40px ;">
                <label>Gender </label>
                <input type="radio" id="gender"  name="gender">Male
                <input type="radio" id="gender"  name="gender">Female
            </div>

            <div style="display: flex;" >
                <div style="padding-left:40px ;">
                    <label>Mobile </label><br>
                    <input type="number" id="mobile" placeholder="Your Frist name" name="mobile">
                </div>

                <div style="padding-left: 5px;">
                    <label>E-mail Name </label><br>
                    <input type="email" id="email" placeholder="Your E-mail name" name="email">
                </div>
            </div>

            <div style="padding-left: 40px; width: 93%;" >
                <label>Source of funds</label><br>
               <select class="btn btn-#FFFFFF btn-block">
                   <option>Others</option>
                   <option>Student</option>
                   <option>Teacher</option>
                   <option>Engineer</option>
                   <option>Doctor</option>
                   <option>Businessman</option>
               </select>
            </div>

            <div style="display: flex;" >
                <div style="padding-left: 40px;" >
                    <label> Password </label><br>
                    <input type="password" id="password" placeholder="Your Password " name="password">
                </div>

                <div style="padding-left: 5px;">
                    <label>Confirm Password </label><br>
                    <input type="password" id="password" placeholder="Your Confirm Password" name="password"><br>
                </div>
            </div>

            <div style="padding-left: 40px;">
                <input type="checkbox" id="checkbox" name="checkbox">I accept the <span style="color: #4106c9;">Terms and Conditions</span><br>
                <input type="checkbox" id="checkbox" name="checkbox">I accept the <span style="color: #4106c9;">Code of Conduct & Ethics</span>
            </div>

            <div style="padding-left: 40px;width: 93%;">
                <input type="button"  class="btn btn-success btn-block" id="button" name="button" value="Button" >
            </div>
        </form>
    </div>
</body>
</html>