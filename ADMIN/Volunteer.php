<?php
session_start();
  
   


  $conn = mysqli_connect('localhost', 'root', '', 'test');
  $sql = "select * from v";
  $result = mysqli_query($conn, $sql);
?>


<!DOCTYPE html>
<html>
<head>
  <title>Home Page, <?php echo $_COOKIE['flag'];?></title>
</head>
<body>
  
  <table border ='1' border="2" width="60%" >
       <tr> 
        <td>

                 <a href="home.php"><img src="image/A.png" height="80"></a>



            </td>
       
            <td colspan='2'align="right">
      
                 <a href = "home.php"></a>
            
        </td>
    </tr>
    
    <tr>    
      <td>
      <b>Customer</b>
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
      
      
            
<h2 align="center">View Customer </h2>
<table border ='1' border="2" width="60%" align="center" >
  <th colspan="4">
    <h3>Customer</h3>
  <tr>
    <th>NAME</th>
    <th>ID</th>
    <th>PHONE NUMBER</th>
    <th>EMAIL</th>
     
  </tr>

    <?php 
      while($data = mysqli_fetch_assoc($result)){
    ?>
        <tr>
          <td><?= $data['name'] ?></td>
          <td><?= $data['id'] ?></td>
          <td><?= $data['phone'] ?></td>
          <td><?= $data['email'] ?></td>
          
        </tr>

    <?php } ?>

  </table>
<a href="home.php" align="right"><li> Go Home</li></a>
</body>
</html>