<?php

// php code to Delete data from mysql database 

if(isset($_POST['delete']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "test";
    
    // get id to delete
    $id = $_POST['id'];
    
    // connect to mysql
    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
    // mysql delete query 
    $query = "DELETE FROM `v` WHERE `id` = $id";
    
    $result = mysqli_query($connect, $query);
    
    if($result)
    {
        echo 'Data Deleted';
    }else{
        echo 'Data Not Deleted';
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
                    <a href="notification.php"><li>Check Notification</li></a>
                    <a href="help_center.php"><li>Help Center</li></a>
                    <a href="notification.php"><li>Check Notification</li></a>
                    <a href="consumer.php"><li>View Amount</li></a>
                    <a href="security_system.php"><li>Security System</li></a>
                    <a href="logout.php"><li>Logout</li></a>
                    
        </ul>
      </td>
      <td width=80%>
      <h2 align="left">Delete Customer </h2>





        <form action="delete.php" method="post">

            ID TO DELETE:&nbsp;<input type="text" name="id" required><br><br>

            <input type="submit" name="delete" value="Clear Data">

        </form>

    </body>

</html>
