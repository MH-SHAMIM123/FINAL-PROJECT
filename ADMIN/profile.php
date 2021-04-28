<?php



?>



<!DOCTYPE html>
<html>
<head>
    
    <title>profile</title>
</head>
<body>
    
    <table border="2" width="60%">

        <tr>

            <td>

                 <a href="home.php"><img src="image/A.png" height="80" ></a>
            </td>

            <td align="right">
            
            <a href = "home.php" name="name" > <?php echo $_COOKIE['name']; ?></a>

                 
                
            </td>


        </tr>

        <tr>
            
            <td>
                <b>ADMIN</b><hr>
                
                <ul>
                    <a href="home.php"><li>Home Page</li></a>
                    <a href="profile.php"><li>View Profile</li></a>
                    <a href="edit_profile.php"><li>Edit Profile</li></a>
                    <a href="check_data.php"><li>Check Data</li></a>
                    <a href="volunteer.php"><li>View serviceman</li></a>
                    <a href="select_serviceman.php"><li>Select serviceman</li></a>
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
                <legend><b>PROFILE</b></legend>
                <table>
                   
                    <tr>
                        <td> Name</td>
                        <td>:</td>
                            <td><?php echo $_COOKIE['name'];?></td>
                   


                    
                            <tr>
                    <td>DOB</td>
                        <td>:</td>
                   <td><?php echo $_COOKIE['dob'];?></td>
                   </tr>


                   <tr>
                    <td>Gender</td>
                    <td>:</td>
                        <td><?php echo $_COOKIE['gender'];?></td>
                    </tr>


                            <tr>
                    <td>Adress</td>
                        <td>:</td>
                   <td><?php echo $_COOKIE['adress'];?></td>
                   </tr>

                   <tr>
                    <td>Phone Number</td>
                        <td>:</td>
                        <td><?php echo $_COOKIE['phoneNumber'];?></td>
                    </tr>

                            <tr>
                    <td>Email Adress</td>
                        <td>:</td>
                   <td><?php echo $_COOKIE['email'];?></td>
                   </tr>
                   
                   
                    
                    <img src="image/profile.jpg" height="100" align="right" >
                    
                      </td>
                  
                    <tr><td colspan="2"><hr></td></tr>
                    <tr><td colspan="2"><a href="edit_profile.php">Edit Profile</a></td></tr>

                    <tr><td colspan="2"> <a href="https://www.facebook.com/mozammel.hossan.14/" target="_blank">Facebook</a> </td></tr>
                    <tr><td colspan="2"> <a href="https://github.com/MH-SHAMIM123" target="_blank">Github</a> </td></tr>
                    
                </table>
                </fieldset>
                
            </td>
            
        </tr>

       

    </table>
    
</body>
</html>