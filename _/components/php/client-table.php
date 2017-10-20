<table id="myTable" class="display" cellspacing="0">
    <thead>
        <tr>
            <th>#</th>
            <th>Client Name</th>
            <th>Phone Number</th>
            <th>Address</th>
            <th>Started Date</th>
            <th>Action</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
         <?php
            
        $query = "SELECT * FROM `clients`";
        
        $result = mysqli_query($con, $query);
    
        while ($row = mysqli_fetch_array($result)){
            
            $db_clientid = $row['Client_ID'];
            $db_First_Name = $row['First_Name'];
            $db_Second_Name = $row['Second_Name'];
            $db_Last_Name = $row['Last_Name'];
            $db_Phone_Number = $row['Phone_Number'];
            $db_Address = $row['Address'];
            $db_Starting_Date = $row['Starting_Date'];
            
            echo "<tr>
            
            <td>$db_clientid</td>
            <td>".$db_First_Name.$db_Second_Name.$db_Last_Name."</td>
            <td>$db_Phone_Number</td>
            <td>$db_Address</td>
            <td>$db_Starting_Date</td>
            <td><a href='client.php?error=$db_clientid' class='btn btn-delete btn-danger'>Update</a></td>
            <td><a href='client.php?delete=$db_clientid' class='btn btn-delete btn-danger'>Delete</a></td>
            
            </tr>";
        };
        ?>
<?php
    
    if(isset($_GET['delete'])){
        
        $the_clientid = $_GET['delete'];
        
        $query = "DELETE FROM `clients` WHERE ID = {$the_clientid}";
        
        $delete_query = mysqli_query($con, $query);
        
        header('Location: client.php');
        
    };
    if(isset($_GET['error'])){
    
    $_SESSION['update'] = $_GET['update'];
    
    header('Location: update-client.php ');
}

?>
        
?>

        
    </tbody>
</table>