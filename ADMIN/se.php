<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];

    $query = "SELECT * FROM `v` WHERE CONCAT(`name`, `id`, `phone`, `email`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `v`";
    $search_result = filterTable($query);
}


function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "test");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
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
        
        <form action="se.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
            <table>
                <tr>
                    <th>NAME</th>
                    <th>ID</th>
                    <th>PHONE</th>
                    <th>EMAIL</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['phone'];?></td>
                    <td><?php echo $row['email'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>