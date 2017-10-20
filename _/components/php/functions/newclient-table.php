<?php 
    if(!$con){
        die("Connection Failed");
    }

    $query = "INSERT INTO `clients`(`First_Name`, `Second_Name`, `Last_Name`, `Phone_Number`, `Address`, `Starting_Date`)";


    $query .= "VALUES ('$client_Fname', '$client_Sname', '$client_Lname', '$client_phone', '$client_address', '$client_started_date')";

    
    $query1 = "INSERT INTO `damiins`(`Damiin_FullName`, `Damiin_PhoneNumber`, `Damiin_Address`, `Damiin_Title`)";

    $query1 .= "VALUES ('$damiin_Fname', '$damiin_phone', '$damiin_address', '$damiin_title')";


    $result = mysqli_query($con , $query);
    $result1 = mysqli_query($con , $query1);
    
    if (!$result && !$result1){
        die ("Query Failed: ".mysqli_error($con));
    }
    else {
       echo '<p class="success-submit">You successfully recorded ' . "&#40;". "$client_Fname $client_Sname" . "&#41;".'&#39;s information.</p>';
    }
?>
