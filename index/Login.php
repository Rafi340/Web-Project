<!DOCTYPE html>
<html>
<head>
	<title>Log in Form</title>
</head>
<body>

	<?php
	    
		 $email = $password =$S1= "";
		 
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
		
		
		$signinError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["S1"])) {
				  $passwordError = "Didn't sign in";
			}
			else {
				//echo "Password is: " . $_REQUEST["password"];
				echo "<a href='../Web tech/Signin.php'>Signin</a>";
			}
		}
	
        //echo "<hr>";
		
		
        
	?>
	
	<form action="Signin.php" method="post">
     Email <br/>
    <input type="text" name="email" required>
	<br /><br />
    <span><?php echo $emailError; ?></span><br />
    
    Password  <br/>
    <input type="text" name="password" required style=" width:333px">
	<br />       
	
	<br /><br />
	<input type="submit" value="Log In" style="color:green; font-weigt:bold">
	<input type="submit" name="S1" value="Sign In" style="color:green; font-weigt:bold">
	</form>
	
	
	
</body>
</html>