<?php
  include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
<script>
function validateForm() {
  var x = document.forms["myForm"]["email"].value;
  var y = document.forms["myForm"]["pass"].value;
 

  if (x == "") {
    alert("email must be filled out");
    return false;
  }

  

  if (y == "") {
    alert("Password must be filled out");
    return false;
  }

  
}
</script>

<link rel="stylesheet" href="style.css"></link>
<title>WEB</title>
<h2 align="center" class="h">Welcome to LOGIN</h2>
</head>
<body id="b">
<center>
<div id="d">
<img src="login.png" class="img"></img>
<center><form name="myForm" action="login.php" method="POST"  onsubmit="return validateForm()">

<b><label>Email</label>
<input name="email" type="email" id="form" placeholder="Enter your email" >
</input>
<b><label>Password</label>
<input name="pass" type="password" id="form" placeholder="Enter your Password" >
</input>

<!button work>

<input name="login" type="submit" id="button" value="LOGIN">
</input>
<a href="register.php"><input name="reg" type="button" id="button" value="REGISTER">
</input>

</form></center>

</center>

<?php

    if(isset($_POST['login'])){
		
		$email= $_POST['email'];
		$pass=$_POST['pass'];
		
		$check = "select*from user where email='$email' AND password ='$pass'";
		$check_work= mysqli_query($con,$check);
		
		if($check_work){
			if(mysqli_num_rows($check_work) > 0 ){
				
				echo"
				<script>
				alert('You are Successfully  Logged in');
				window.location.href='home.php';
				</script>
				";
				
			}
			else{
				
				echo"
				<script>
				alert('Password or Email not Found ');
				window.location.href('register.php');
				</script>
				";
			}
			
			
		}else{
			
			
				echo"
				<script>
				alert('Database Error  ');
				window.location.href('register.php');
				</script>
				";
		}
		
		
		
	}else{
		
		
	}

?>
</div>
</body>
</html>