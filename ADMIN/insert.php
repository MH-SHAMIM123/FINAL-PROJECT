<?php

// php code to Delete data from mysql database 

if(isset($_POST['insert']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "test";
    
    // get id to delete
    
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    
    // connect to mysql
    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
    // mysql delete query 

    
    $query = "INSERT INTO `v`(`name`, `id`,`phone`,`email`) VALUES ('$name','$id','$phone','$email')";
    
    $result = mysqli_query($connect, $query);
    
    if($result)
    {
        echo 'Data Inserted';
    }else{
        echo 'Data Not Inserted';
    }
    mysqli_close($connect);
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>



  <table border ='1' border="2" width="60%" >


       <tr> 
        <td>

                 <a href="home.php"><img src="image/f.png" height="80" ></a>



            </td>
       
            <td colspan='2'align="right">
      
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
      <h2 align="left">Add Customer </h2>





        <form action="insert.php" method="post">

               Name TO Add:&nbsp;<input type="text" name="name" required><br><br>
               ID TO add:&nbsp;<input type="text" name="id" required><br><br>
               PHONE TO add:&nbsp;<input type="text" name="phone" required><br><br>
               EMAIL TO add:&nbsp;<input type="text" name="email" required><br><br>

            <input type="submit" name="insert" value="Add">

        </form>

    </body>

</html>
