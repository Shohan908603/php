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
		
	});

	
	function validatefname(){
		
		var name=$("#fname").val();
		
		 var reg = /^[a-zA-Z\-]+$/
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
	
</script>



<body>
    <div style="padding-top: 3%;">
        <form class="col-md-4 border shadow-sm bg-light" style="margin-top:8%;padding:10px; width: 50%; margin: auto;padding-top: 2%;">
            <div>
                <h2>Sign Up</h2>
            </div>
            <div style="display: flex;" >
                <div style="padding-left:40px ;">
                    <label>Frist Name </label><br>
                    <input type="text" id="fname" placeholder="Your Frist name" autocomplete="off" name="">
                </div>

                <div style="padding-left: 5px;">
                    <label>Last Name </label><br>
                    <input type="text" id="lname" placeholder="Your Last name" autocomplete="off" name="">
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
                    <input type="number" id="mobile" placeholder="Your Phone Number" autocomplete="off" name="">
                </div>

                <div style="padding-left: 5px;">
                    <label>E-mail Name </label><br>
                    <input type="email" id="email" placeholder="Your E-mail name" autocomplete="off" name="">
                    <span id="emailmsg"></span>
                </div>
            </div>

            <div style="padding-left: 40px; width: 93%; padding-top: 5%;" >
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

            <div style="display: flex; padding-top: 5%;" >
                <div style="padding-left: 40px; " >
                    <label> Password </label><br>
                    <input type="password" id="password" placeholder="Your Password " autocomplete="off" name="">
                </div>

                <div style="padding-left: 5px;">
                    <label>Confirm Password </label><br>
                    <input type="password" id="password" placeholder="Your Confirm Password" autocomplete="off" name=""><br>
                </div>
            </div>

            <div style="padding-left: 40px; padding-top: 5%;">
                <input type="checkbox" id="checkbox" name="checkbox">I accept the <span style="color: #4106c9;cursor: pointer;">Terms and Conditions</span><br>
                <input type="checkbox" id="checkbox" name="checkbox">I accept the <span style="color: #4106c9; cursor: pointer;">Code of Conduct & Ethics</span>
            </div>

            <div style="padding-left: 40px;width: 93%; padding-top: 5%;">
                <input type="button"  class="btn btn-success btn-block" id="button" name="" value="Button" >
            </div>
        </form>
    </div>
</body>
</html>