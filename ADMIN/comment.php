<?php
if($_POST){
	$name=$_POST['name'];
	$comment=$_POST['comment'];
	$handle=fopen("a.txt", "a");
	fwrite($handle,"<b><i><br>" .$name."</i> said:<br>".$comment);
	fclose($handle);
}
	
	 
?>



<!DOCTYPE html>
<html>
<head>
	<title>Comment System</title>
</head>
<body>
	
	<table border ='1' border="2" width="60%" >


			 <tr>	
				<td>

                 <a href="home.php"><img src="image/f.png" height="80" ></a>



            </td>
       
            <td colspan='2'align="right">
			
                 <a href = "home.php" name="name" > <?php echo $_COOKIE['name']; ?></a>
            
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
                    <a href="reason.php"><li>Reason $ Expectation</li></a>
                    <a href="notification.php"><li>Check Notification</li></a>
                    <a href="help_center.php"><li>Help Center</li></a>
                    <a href="notification.php"><li>Check Notification</li></a>
                    <a href="consumer.php"><li>View Amount</li></a>
                    <a href="security_system.php"><li>Security System</li></a>
                    <a href="logout.php"><li>Logout</li></a>
                    
				</ul>
			</td>
			<td width=80%>
			
			<table   >
<h1>Post a Comment:</h1>
			<form action="" method="post"  >
				Name:<br/>
  <input type="text" name="name"  ><br>
  Comment:<br/><textarea rows="10" cols="30" name="comment" ></textarea><br><br>
  <input type="submit" value="Post Comment">
  

    </form>	
   <hr>
   <h2>All Comments</h2>
    <?php
    include "a.txt";
    ?>

    </table>	
</body>
</table>
</html