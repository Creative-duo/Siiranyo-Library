<?php require 'functions/conection.php';?>


<table id="usersTable" class="display" cellspacing="0">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Started Date</th>
            <th>Username</th>
            <th>Privlage</th>
            <th>Action</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
            
        $query = "SELECT * FROM `users`";
        
        $result = mysqli_query($con, $query);
        
        while ($row = mysqli_fetch_array($result)){
            
            $User_ID = $row['User_ID'];
            $User_First_Name = $row['User_First_Name'];
            $User_Last_Name = $row['User_Last_Name'];
            $User_Phone_Number = $row['User_Phone_Number'];
            $User_Email = $row['User_Email'];
            $User_Started_Date = $row['User_Started_Date'];
            $User_Privlage = $row['User_Privlage'];
            $User_Username = $row['User_Username'];
            
            echo "<tr>
            
            <td>$User_ID</td>
            <td>".$User_First_Name." ".$User_Last_Name."</td>
            <td>$User_Phone_Number</td>
            <td>$User_Email</td>
            <td>$User_Started_Date</td>
            <td>$User_Username</td>
            <td>$User_Privlage</td>
            <td><a href='users.php?update={$User_ID}' class='btn btn-delete btn-danger'>Update</a></td>
            <td><a href='users.php?delete={$User_ID}' class='btn btn-delete btn-danger'>Delete</a></td>
            
            </tr>";
        };
        
        ?>

    </tbody>
</table>

<?php
    
    if(isset($_GET['delete'])){
        $the_userid = $_GET['delete'];
        
        $delete_query = "DELETE FROM `users` WHERE User_ID = $the_userid";
        
        $delete_result = mysqli_query($con, $delete_query);
        
        header('Location: users.php');
    };
        
?>

<?php
if(isset($_GET['update'])){
    
    $_SESSION['update'] = $_GET['update'];
    
    header('Location: update-user.php ');
}

?>
