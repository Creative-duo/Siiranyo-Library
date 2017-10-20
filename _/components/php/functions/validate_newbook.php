<?php
$Author_Fname = null;
$Author_Lname = null;
$book_title = null;
$book_edition = null;
$published_date = null;
$book_category = null;
$isbn_code = null;
$dewey_code = null;
$book_quantity  = null;  


    if (isset($_POST['book_submit'])) {
        
        @$Author_Fname = $_POST['Author_Fname'];
        @$Author_Lname = $_POST['Author_Lname'];
        @$book_title   = $_POST['book_title'];
        @$book_edition = $_POST['book_edition'];
        @$published_date = $_POST['published_date'];
        @$book_category = $_POST['book_category'];
        @$isbn_code = $_POST['isbn_code'];
        @$dewey_code = $_POST['dewey_code'];
        @$book_quantity = $_POST['book_quantity'];
        
        if(empty($Author_Fname && $Author_Lname && $book_title && $book_edition && $published_date && $book_category && $isbn_code && $dewey_code && $book_quantity))
        {
        
        if ( empty ($Author_Fname)){
            echo "<p class='warning Auother-fname'>Enter Author's First name</p>";
        }
        
        if ( empty ($Author_Lname)){
            echo "<p class='warning Auother-lname'>Enter Author's Last name</p>";
        }
        if ( empty ($book_title)){
            echo "<p class='warning book_title'>Enter the book title</p>";
        }
        if ( empty ($book_edition)){
            echo "<p class='warning book_edition'>Enter the book title</p>";
        }
        if ( empty ($published_date)){
            echo "<p class='warning published_date'>Enter the published date</p>";
        }
         if ( empty ($book_category)){
            echo "<p class='warning book_category'>Select the category</p>";
        }
         if ( empty ($isbn_code)){
            echo "<p class='warning isbn_code'>Enter the ISBN</p>";
        }
         if ( empty ($dewey_code)){
            echo "<p class='warning dewey_code'>Enter value</p>";
        }
         if ( empty ($book_quantity)){
            echo "<p class='warning book_quantity'>Enter Amount</p>";
        }
    }else {
             require '_/components/php/functions/newbook-table.php';
        }
        
       
        
    };

?>