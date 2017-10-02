<?php 
    if(!$con){
        die("Connection Failed");
    }

    $query = "INSERT INTO `books`(`Author's_First_Name`, `Author's_Last_Name`, `Book_Title`, `Edition`, `Published_Date`, `Category`, `ISBN_Code`, `Dewey_Decimal_Code`, `Quantity`)";


    $query .= "VALUES ('$Author_Fname', '$Author_Lname', '$book_title', '$book_edition', '$published_date', '$book_category', '$isbn_code', '$dewey_code', '$book_quantity')";

    $result = mysqli_query($con , $query);
    
    if (!$result){
        die ("Query Failed: ".mysqli_error($con));
    }
    else {
       echo '<p class="success-submit">You successfully recorded the book ' . "&#40;". "$book_title" . "&#41;".'&#39;s information.</p>';
    }
?>
