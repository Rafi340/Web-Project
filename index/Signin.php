<!DOCTYPE html>
<html>
<head>
	<title>Sign in Form</title>
</head>
<body>

	<?php
	    
		$name = $email = $gender = $password = "";
        $nameError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["name"])) {
				  $nameError = "Name is required";
			}
			else {
				// echo "Name is: " . $_REQUEST["name"];

			}
		}
        echo "<br>";
        $genderError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["gender"])) {
				  $gernderError = "Gender is required";
			}
			else {
				//echo "Gender is: " . $_REQUEST["gender"];
			}
		}
        
        echo "<br>";
		
        $emailError = "";
		
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["email"])) {
				  $emailError = "Email is required";
			}
			else {  
				// echo "Email is: " . $_REQUEST["email"];
		    }
		}

        
        echo "<br>";
        $passwordError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["password"])) {
				  $passwordError = "Password is required";
			}
			else {
				//echo "Password is: " . $_REQUEST["password"];
			}
		}
    
        //echo "<hr>";
        
	?>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        
	 Name <br/>
    <input type="text" name="name" required>
	<br /><br />
    <span><?php echo $nameError; ?></span><br />

	Gender <br/>
    <input type="radio" name="gender" value="male" required>Male
    <br/>
	<input type="radio" name="gender" value="female" required>Female
    <br/><br/>
    <span><?php echo $genderError; ?></span><br />
    
        
     Email <br/>
    <input type="text" name="email" required>
	<br /><br />
    <span><?php echo $emailError; ?></span><br />
    
    Password  <br/>
    <input type="text" name="password" required style=" width:333px">
	<br />       
	
	<br /><br />
	<input type="submit" value="Create account" style="color:green; font-weigt:bold">
	</form>
</body>
</html>