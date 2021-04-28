<!DOCTYPE html>
<html>
<head>
	<title>edit_profile</title>
</head>
<body>
     <form action="checkeditprofile.php" method="POST">
		<br/>
		<table border ='1'   border="2" width="60%" >
			<tr>
				<td>
				<a href="home.php"><img src="image/A.png" height="80" ></a>
				</td>
				<td align="right" >
					 <a href = "home.php" ></a>
			</td>
			</tr>
			<tr>		
				<td>
				<b>ADMIN</b>
				<hr>
					<ul>
					<a href="home.php"><li>Home Page</li></a>
                    <a href="profile.php"><li>View Profile</li></a>
                    <a href="edit_profile.php"><li>Edit Profile</li></a>
                    <a href="check_data.php"><li>Check Data</li></a>
                    <a href="del.php"><li>Delete Data</li></a>
                    <a href="delete.php"><li>Delete Customer</li></a>
                    <a href="volunteer.php"><li>View Customer</li></a>
                    <a href="insert.php"><li>Insert Customer</li></a>
                    <a href="select_serviceman.php"><li>Select Customer</li></a>
                    <a href="comment.php"><li>Can comments</li></a>
                    <a href="post.php"><li>Can Seek Help</li></a>
                    <a href="notification.php"><li>Check Notification</li></a>
                    <a href="help_center.php"><li>Help Center</li></a>
                    <a href="notification.php"><li>Check Notification</li></a>
                    <a href="consumer.php"><li>View Amount</li></a>
                    <a href="security_system.php"><li>Security System</li></a>
                    <a href="logout.php"><li>Logout</li></a>
                    
                    
					</ul>
				</td>
				<td width=80%> 
					<fieldset>
						<legend><b>EDIT PROFILE</b></legend>
						<table>
                            <tr>
								<td> Name</td>
								<td>:</td>
								<td><input name="name" type="text"  placeholder="Enter your name"  required  >   </td>
							</tr>	

							


							<tr>
								<td> DOB</td>
								<td>:</td>
								<td><input name="dob" type="date"></td>
							</tr>


							<tr>
								<td> Gender</td>
								<td>:</td>
								<td> <input type="radio" name="gender" value="Male" > Male 
                                     <input type="radio" name="gender" value="Female" > Female
                                     <input type="radio" name="gender" value="Other" > Other <br></td>
							</tr>

							<tr>
								<td>Adress</td>
								<td>:</td>
								<td><input name="adress" type="text" placeholder="Enter your address"  required   ></td>
							</tr>

							<tr>
								<td> Phone Number</td>
								<td>:</td>
								<td><input name="phoneNumber" type="number"   placeholder="Enter your number"  required      ></td>
							</tr>
	
							
							<tr>
								<td>Email</td>
								<td>:</td>
								<td> <input type="email" name="email"  placeholder="Enter your email"  required  > 
            <button title="hint:sample@example.com" style= "color:blue;" > <b>i</b></button> <br>
</td>
							</tr>	



							 

							



							
					
							<img src="image/profile.jpg" height="100" align="right" >
						</table>	
						<hr/>
						
					<input type="submit" name= "submit" value="Submit">
					
				</fieldset>
				</tr>			
            
			</table>
				
    </form>		
</body>
</html