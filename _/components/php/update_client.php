<?php


            $user_id_update = $_SESSION['update'];
            

            $query = "SELECT * FROM `clients` WHERE ID = $user_id_update";
        
            $result = mysqli_query($con, $query);

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
     
        $user_Fname = $_POST['client_Fname'];
        $user_Lname = $_POST['client_Sname'];
        $user_phone   = $_POST['client_Lname'];
        $user_email = $_POST['client_phone'];
        $user_username = $_POST['client_address'];
        $user_password = $_POST['damiin_Fname'];
        $user_cpassword = $_POST['damiin_phone'];
        $user_privlage = $_POST['damiin_address'];
        $user_privlage = $_POST['damiin_title'];
    
    

        $query = "UPDATE clients SET `User_First_Name`='$user_Fname',`User_Last_Name`='$user_Lname',`User_Phone_Number`='$user_phone',`User_Email`='$user_email',`User_Username`='$user_username',`User_Password`='$user_password',`User_Confirm_Password`='$user_cpassword',`User_Privlage`='$user_privlage' WHERE User_ID = '$user_id_update'";
    

        $update_user = mysqli_query($con, $query);
        if($update_user){
           echo "QUERY FAILED : ". mysqli_error();
        }else {
             header('Location: users.php');
        }
    }
?>   
<div class="form-container client">
    <h3 class="page-header">Register a new Client</h3>
    <form action="new-client.php" method="post">
        <div class="form-group row">
            <div class="col-xs-4">
                <label for="client_Fname">First Name</label>
                <input name="client_Fname" class="form-control" id="client_Fname" type="text" placeholder="Enter Your First Name">
            </div>
            <div class="col-xs-4">
                <label for="client-Sname">Second Name</label>
                <input name="client_Sname" class="form-control" id="client-Sname" type="text" placeholder="Enter Your Second Name">
            </div>
            <div class="col-xs-4">
                <label for="client-Lname">Last Name</label>
                <input name="client_Lname" class="form-control" id="client-Lname" type="text" placeholder="Enter Your Last Name">
            </div>
            <div class="col-xs-4">
                <label for="client_phone">Phone Number</label>
                <input name="client_phone" class="form-control" id="client_phone" type="text" placeholder="Enter Your phone number">
            </div>
            <div class="col-xs-4">
                <label for="client_address">Address</label>
                <input name="client_address" class="form-control" id="client_address" type="text" placeholder="Enter your Address">
            </div>
            <div class="col-xs-4">
                <label for="client_started_date">Started Date</label>
                <input name="client_started_date" class="form-control" id="client_started_date" type="date" placeholder="Enter The date" disabled>
            </div><br><br><br>
            <h4 class="page-header">Damiin Information</h4>

            <div class="col-xs-6">
                <label for="damiin_Fname">Damiin Name</label>
                <input name="damiin_Fname" class="form-control" id="damiin_Fname" type="text" placeholder="Enter Damiin Full name">
            </div>
            <div class="col-xs-6">
                <label for="damiin_phone">Damiin phone number</label>
                <input name="damiin_phone" class="form-control" id="damiin_phone" type="text" placeholder="Enter Damiin Phone number">
            </div>
            <div class="col-xs-6">
                <label for="damiin_address">Damiin Address</label>
                <input name="damiin_address" class="form-control" id="damiin_address" type="text" placeholder="Enter Damiin Address">
            </div>
            <div class="col-xs-6">
                <label for="damiin_title">Damiin Title</label>
                <input name="damiin_title" class="form-control" id="damiin_title" type="text" placeholder="Enter Damiin title">
            </div>
            <div class="btn-container">
                <button id="client_submit" name="client_submit"></button>
            </div>
        </div>

    </form>
</div>
