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

                 <a href="home.php"><img src="image/A.png" height="80" ></a>



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
      <h2 align="left">Seach ADMIN</h2>

	<label for="searchKey">Email:</label>
	<input type="email" name="searchKey" id="searchKey">

	<button id="search" onclick="search()">Search</button>

	<p id="p2"></p>

	<script>
		
		function submit() {

			var email = document.getElementById("email").value;
            var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() {
					if(this.readyState == 4 && this.status == 200) {
						document.getElementById("p2").innerHTML = xhttp.responseText;
						document.getElementById("p2").style.color = "green";
					}
				}

				xhttp.open("POST", "select_Admin_Action.php", true);
				xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xhttp.send("email="+email);
			}

		function search() {
			var searchKey = document.getElementById("searchKey").value;

			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if(this.readyState == 4 && this.status == 200) {
					document.getElementById("p2").innerHTML = xhttp.responseText;
				}
			}

			xhttp.open("GET", "select_Admin_Action.php?searchKey=" + searchKey, true);
			xhttp.send();
		}

	</script>

</body>
</html>

     
        </form>
        
    </body>
</html>