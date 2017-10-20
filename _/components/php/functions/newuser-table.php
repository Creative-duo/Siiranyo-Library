<?php 
    if(!$con){
        die("Connection Failed");
    }

    $query = "INSERT INTO `users`(`User_First_Name`, `User_Last_Name`, `User_Phone_Number`, `User_Email`, `User_Started_Date`, `User_Username`, `User_Password`, `User_Confirm_Password`, `User_Privlage`)";


    $query .= "VALUES ('$user_Fname', '$user_Lname', '$user_phone', '$user_email', '$user_started_date', '$user_username', '$user_password', '$user_cpassword', '$user_privlage')";

    $result = mysqli_query($con , $query);
    
    if (!$result){
        die ("Query Failed: ".mysqli_error($con));
    }
    else {
       echo '<p class="success-submit">You successfully recorded ' . "&#40;". "$user_Fname $user_Lname" . "&#41;".'&#39;s information.</p>';
    }
?>
