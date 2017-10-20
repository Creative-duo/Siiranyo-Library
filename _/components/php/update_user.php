<?php


            $user_id_update = $_SESSION['update'];
            

            $query = "SELECT * FROM `users` WHERE User_ID = $user_id_update";
        
            $result = mysqli_query($con, $query);
            
            $query_very = "SELECT User_Username FROM `users`";
        
            $result_very = mysqli_query($con, $query_very);

            $row1 = mysqli_fetch_array($result_very);
        
            while ($row = mysqli_fetch_array($result)){
            
            $db_User_ID = $row['User_ID'];
            $db_User_First_Name = $row['User_First_Name'];
            $db_User_Last_Name = $row['User_Last_Name'];
            $db_User_Phone_Number = $row['User_Phone_Number'];
            $db_User_Email = $row['User_Email'];
            $db_User_Started_Date = $row['User_Started_Date'];
            $db_User_Privlage = $row['User_Privlage'];
            $db_User_Username = $row['User_Username'];
            }

if(isset($_POST['update_user'])){
     
        $user_Fname = $_POST['user_Fname'];
        $user_Lname = $_POST['user_Lname'];
        $user_phone   = $_POST['user_phone'];
        $user_email = $_POST['user_email'];
        $user_username = $_POST['user_username'];
        $user_password = $_POST['user_password'];
        $user_cpassword = $_POST['user_cpassword'];
        $user_privlage = $_POST['user_privlage'];
    
    

        $query = "UPDATE users SET `User_First_Name`='$user_Fname',`User_Last_Name`='$user_Lname',`User_Phone_Number`='$user_phone',`User_Email`='$user_email',`User_Username`='$user_username',`User_Password`='$user_password',`User_Confirm_Password`='$user_cpassword',`User_Privlage`='$user_privlage' WHERE User_ID = '$user_id_update'";
    

        $update_user = mysqli_query($con, $query);
        if($update_user){
            header('Location: users.php');
        }
        if($db_User_Username == $row1['User_Username']){
            
            echo "<p class='warning user_update'>This username is allready Choosen</p>";
        }
    }
?>   
<div class="form-container">
    <h3 class="page-header">Upate User</h3>
    <form action="" method="post">
        <div class="form-group row">
            <div class="col-xs-6">
                <label for="user_Fname">First Name:</label>
                <input name="user_Fname" value="<?php echo $db_User_First_Name?>" class="form-control" id="user_Fname" type="text" placeholder="Enter Your First Name">
            </div>
            <div class="col-xs-6">
                <label for="user-LastName">Last Name:</label>
                <input name="user_Lname" value="<?php echo $db_User_Last_Name?>" class="form-control" id="user-LastName" type="text" placeholder="Enter Your First Name">
            </div><br><br><br>
            <h4 class="page-header">User Information</h4>

            <div class="col-xs-4">
                <label for="user_phone">Phone Number</label>
                <input name="user_phone" value="<?php echo $db_User_Phone_Number?>" class="form-control" id="user_phone" type="text" placeholder="Enter Your phone number">
            </div>
            <div class="col-xs-4">
                <label for="user_email">Email:</label>
                <input name="user_email" value="<?php echo $db_User_Email?>" class="form-control" id="user_email" type="email" placeholder="Enter your email">
            </div>
            <div class="col-xs-4">
                <label for="user_started_date">Started Date:</label>
                <input name="user_started_date" value="<?php echo $db_User_Started_Date?>" class="form-control" id="user_started_date" type="date" placeholder="Enter The date" disabled>
            </div>
            <div class="col-xs-3">
                <label for="user_username">Username:</label>
                <input name="user_username" value="<?php echo $db_User_Username?>" class="form-control" id="user_username" type="text" placeholder="Enter a username">
            </div>
            <div class="col-xs-3">
                <label for="user_password">Password:</label>
                <input name="user_password" value="<?php echo $db_User_First_Name?>" class="form-control" id="user_password" type="password" placeholder="Enter password">
            </div>
            <div class="col-xs-3">
                <label for="user_password">Confirm Password:</label>
                <input name="user_cpassword" value="<?php echo $db_User_First_Name?>" class="form-control" id="user_password" type="password" placeholder="Re type your password">
            </div>
            <div class="col-xs-3">
                <label for="user_privlage">Privlage:</label>
                <select class="form-control" value="" name="user_privlage" id="user_privlage">
                    <option>Admin</option>
                    <option>Employee</option>
                </select>
            </div>
            <div class="btn-container">
                <button id="user_submit" name="update_user"></button>
            </div>
        </div>

    </form>
</div>
