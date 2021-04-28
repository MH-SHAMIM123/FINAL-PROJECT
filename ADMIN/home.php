<?php
 include 'config.php';
 
 
?>

<html>
<head>
<link rel="stylesheet" href="style.css"></link>
<title>WEB</title>
<h2 align="center" class="h">Welcome to HOME</h2>
</head>
<body id="b">
<center>
<div id="d">

<center><form action="home.php" method="POST">


 <table border ='1' border="2" width="100%"  >
       <tr> 
        <td>

                 <a href="home.php"><img src="image/A.png" height="80"></a>



            </td>
       
            <td colspan='2'align="right">
      
                 <a href = "home.php"  > </a>
            
        </td>
    </tr>
    
    <tr>    
      <td>
      <b>ADMIN</b>
      <hr>
        <ul>
                    <a href="home.php"><li>Home Page</li></a>
                    <a href="edit_profile.php"><li>Edit Profile</li></a>
                    <a href="check_data.php"><li>Check Data</li></a>
                    <a href="del.php"><li>Delete Data</li></a>
                    <a href="delete.php"><li>Delete Customer</li></a>
                    <a href="volunteer.php"><li>View Customer</li></a>
                    <a href="select_Admin.php"><li>View Admin</li></a>
                    <a href="insert.php"><li>Insert Customer</li></a>
                    <a href="select_serviceman.php"><li>Select Customer</li></a>
                    <a href="comment.php"><li>Can comments</li></a>
                    <a href="post.php"><li>Can Seek Help</li></a>
                    <a href="notification.php"><li>Check Notification</li></a>
                    <a href="help_center.php"><li>Help Center</li></a>
                    <a href="notification.php"><li>Check Notification</li></a>
                    <a href="consumer.php"><li>View Amount</li></a>
                    <a href="logout.php"><li>Logout</li></a>
                    
        </ul>
      </td>
      <td width=80%><h3>"We try our best to help you"</h3>

     

      </tr>      

</form></center>

</center>

<?php
  if(isset($_POST['logout'])){
    
    echo"
        <script>
        alert('You are Successfully  Logged out');
        window.location.href='login.php';
        </script>
        ";
        
    
    
  }else{}





?>




</div>
</body>

</html>