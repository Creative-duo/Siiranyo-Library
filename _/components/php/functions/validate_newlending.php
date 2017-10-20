<?php
    $client_id  = null; 
    $dewey_code  = null;
    $book_name  = null;
    $starting_date  = null;
    $duration = null;


    if (isset($_POST['lending_submit'])) {
        
        @$client_id = $_POST['client_id'];
        @$dewey_code = $_POST['dewey_code'];
        @$book_name   = $_POST['book_name'];
        @$starting_date = $_POST['starting_date'];
        @$duration = $_POST['duration'];
        
        if(empty($client_id && $dewey_code && $book_name && $starting_date && $duration))
        {
        
        if ( empty ($client_id)){
            echo "<p class='warning client_id'>Enter Client ID Number</p>";
        }
        if ( empty ($dewey_code)){
            echo "<p class='warning dewey_code1'>Enter The book dewey code</p>";
        }
        if ( empty ($book_name)){
            echo "<p class='warning book_name'>Enter the book title</p>";
        }
        if ( empty ($starting_date)){
            echo "<p class='warning starting_date'>Enter the starting date</p>";
        }
         if ( empty ($duration)){
            echo "<p class='warning duration'>Select the duration</p>";
        }
    }else {
             require '_/components/php/functions/newlending-table.php';
        }
        
       
        
    };

?>