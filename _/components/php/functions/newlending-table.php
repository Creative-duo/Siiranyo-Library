<?php 
    if(!$con){
        die("Connection Failed");
    }

    $query = "INSERT INTO `lending`(`Cleint_ID`, `Starting_Date`, `Duration`, `Dewi_Code`, `Book_Name`) ";


    $query .= "VALUES ('$client_id','$starting_date', '$duration','$dewey_code', '$book_name' )";

    $result = mysqli_query($con , $query);
    
    if (!$result){
        die ("Query Failed: ".mysqli_error($con));
    }
    else {
       echo '<p class="success-submit">You successfully recorded the Transection of' . "&#40;". "$book_name" . "&#41;".'&#39;s information.</p>';
    }
?>
