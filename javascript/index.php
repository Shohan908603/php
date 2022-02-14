<?php


 echo "<pre>";
 print_r($_POST);
 echo "</pre>";
 







?>



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

<script type="text/javascript">
	$(document).ready(function(){
		
		$("#fname").keyup(function(){
			if(validatefname()){
			
				$("#fname").css("border","2px solid green");
				
			}else{
				$("#fname").css("border","2px solid red");
				
			}
			buttonState();
		});

        $("#lname").keyup(function(){
			if(validatelname()){
			
				$("#lname").css("border","2px solid green");
				
			}else{
				$("#lname").css("border","2px solid red");
				
			}
			buttonState();
		});

        $("#email").keyup(function(){
			if(validateemail()){
			
				$("#email").css("border","2px solid green");
				
			}else{
				$("#email").css("border","2px solid red");
				
			}
			buttonState();
		});

        $("#mobile").keyup(function(){
            if(validatemobile()){

                $("#mobile").css("border","2px solid green");
            }
            else{
                $("#mobile").css("border","2px solid red");
            }
            buttonSate();
        });

        $("#cpassword").keyup(function(){
            if (validatecpassword()){
                $("#cpassword").css("border","2px solid green");
            }
            else{
                $("#cpassword").css("border","2px solid red");
            }
            buttonSate();
        });

       



		
	});

	
	function validatefname(){
		
		var name=$("#fname").val();
		
		 var reg = /^[a-zA-Z\:-]+$/
		 if(reg.test(name)){
		 	return true;
		 }else{
		 	return false;
		 }
	}

    
	function validatelname(){
		
		var name=$("#lname").val();
		
		 var reg = /^[a-zA-Z\-]+$/
		 if(reg.test(name)){
		 	return true;
		 }else{
		 	return false;
		 }
	}


    function validateemail(){
        var email=$("#email").val();

        var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
        if (reg.test(email)){
            return true;
        }
        else{
            return false;
        }
    }
	 

    function validatemobile(){
        var mobile=$("#mobile").val();

        var reg =/^\d{11}$/;
        if(reg.test(mobile)){
            return true;
        }
        else{
            return false;
        }
    }

    function validatecpassword(){
        var cpassword=$("#cpassword").val();

        var reg =  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
        if(reg.test(cpassword)){
            return true;
        }
        else{
            return false;
        }
    }


    
 
        /*
            var code = document.getElementById("password");

            var strengthbar = document.getElementById("meter");
            var display = document.getElementsByClassName("textbox")[0];

            code.addEventListener("keyup", function() {
            checkpassword(code.value);
            });


            function checkpassword(password) {
                var strength = 0;
                if (password.match(/[a-z]+/)) {
                    strength += 1;
                }
                if (password.match(/[A-Z]+/)) {
                    strength += 1;
                }
                if (password.match(/[0-9]+/)) {
                    strength += 1;
                }
                if (password.match(/[$@#&!]+/)) {
                    strength += 1;

                }

                if (password.length < 6) {
                    display.innerHTML = "minimum number of characters is 6";
                }

                if (password.length > 12) {
                    display.innerHTML = "maximum number of characters is 12";
                }

                switch (strength) {
                    case 0:
                    strengthbar.value = 0;
                    break;

                    case 1:
                    strengthbar.value = 25;
                    break;

                    case 2:
                    strengthbar.value = 50;
                    break;

                    case 3:
                    strengthbar.value = 75;
                    break;

                    case 4:
                    strengthbar.value = 100;
                    break;
                }
            }
            */
    
   

    

</script>



<body>
    <div style="padding-top: 3%;">
        <form class="col-md-4 border shadow-sm bg-light"
         style="margin-top:8%;padding:10px; width: 50%; margin: auto;padding-top: 2%;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);  ?>" method="post">
            <div>
                <h2>Sign Up</h2>
            </div>
            <div style="display: flex;" >
                <div style="padding-left:40px ;">
                    <label>Frist Name </label><br>
                    <input type="text" id="fname" placeholder="Your Frist name" autocomplete="off" name="fname">
                </div>

                <div style="padding-left: 5px;">
                    <label>Last Name </label><br>
                    <input type="text" id="lname" placeholder="Your Last name" autocomplete="off" name="lname">
                </div>
            </div>

            <div style="padding-left:40px ; padding-top: 5%;">
                <label>Gender </label>
                <input type="radio" id="gender"  name="gender">Male
                <input type="radio" id="gender"  name="gender">Female
            </div>

            <div style="display: flex; padding-top: 5%;" >
                <div style="padding-left:40px ; ">
                    <label>Mobile </label><br>
                    <input type="number" id="mobile" placeholder="Your Phone Number" autocomplete="off" name="mobile">
                </div>

                <div style="padding-left: 5px;">
                    <label>E-mail Name </label><br>
                    <input type="email" id="email" placeholder="Your E-mail name" autocomplete="off" name="email">
                    <span id="emailmsg"></span>
                </div>
            </div>

            <div style="padding-left: 40px; width: 93%; padding-top: 5%;" >
                <label>Source of funds</label><br>
               <select class="btn btn-#FFFFFF btn-block" name="select">
                   <option>Others</option>
                   <option>Student</option>
                   <option>Teacher</option>
                   <option>Engineer</option>
                   <option>Doctor</option>
                   <option>Businessman</option>
               </select>
            </div>

            <div style="display: flex; padding-top: 5%;" >
                <div style="padding-left: 40px; " >
                    <label> Password </label><br>
                    <input type="text" id="password" placeholder="Your Password " autocomplete="off" name="password" ><br>
                    <progress max="100" value="0" id="meter"></progress>
                </div>

                <div style="padding-left: 5px;">
                    <label>Confirm Password </label><br>
                    <input type="password" id="cpassword" placeholder="Your Confirm Password" autocomplete="off" name="cpassword"><br>
                </div>
            </div>

            <div style="padding-left: 40px; padding-top: 5%;">
                <input type="checkbox" id="checkbox" name="checkbox">&nbsp;&nbsp; I accept the <span style="color: #4106c9;cursor: pointer;">Terms and Conditions</span><br>
                <input type="checkbox" id="checkbox" name="checkbox">&nbsp;&nbsp; I accept the <span style="color: #4106c9; cursor: pointer;">Code of Conduct & Ethics</span>
            </div>

            <div style="padding-left: 40px;width: 93%; padding-top: 5%;">
                <input type="submit"  class="btn btn-success btn-block" id="button" name="button" value="Button" >
            </div>
        </form>
    </div>
</body>
</html>