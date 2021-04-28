<?php 



if($_SERVER["REQUEST_METHOD"] == "GET") {

	$searchKey = $_GET['searchKey'];
	$sql = "SELECT id, email FROM user WHERE id = " . $searchKey;

	if(empty($searchKey)) {
		$sql = "SELECT id, email FROM user";
	}
	
	$conn = new mysqli("localhost", "root", "", "test");

	if($conn -> connect_error) {
		echo "Failed to connect database!";
	}
	else {
		$result = $conn -> query($sql);

		if($result -> num_rows > 0) {

			echo "<ol>";

			while($row = $result -> fetch_assoc()) {

				echo "<li>";
				echo $row["name"] . " " . $row["email"];
				echo "</li>";
			}

			echo "</ol>";
		} 
		else {
			echo "No record found!";
		}
	}
		
	$conn -> close();
}

?>