<?php
    $user_Fname  = null;
    $user_Lname  = null;
    $user_phone  = null;
    $user_email  = null;
    $user_started_date  = null;
    $user_username  = null;
    $user_password  = null;
    $user_cpassword  = null;
    $user_privlage = null;


    if (isset($_POST['user_submit'])) {
        
        @$user_Fname = $_POST['user_Fname'];
        @$user_Lname = $_POST['user_Lname'];
        @$user_phone   = $_POST['user_phone'];
        @$user_email = $_POST['user_email'];
        @$user_started_date = $_POST['user_started_date'];
        @$user_username = $_POST['user_username'];
        @$user_password = $_POST['user_password'];
        @$user_cpassword = $_POST['user_cpassword'];
        @$user_privlage = $_POST['user_privlage'];
        
        if(empty($user_Fname && $user_Lname && $user_phone && $user_email && $user_started_date && $user_username && $user_password && $user_cpassword && $user_privlage))
        {
        
        if ( empty ($user_Fname)){
            echo "<p class='warning Auother-fname'>Enter your First name</p>";
        }
        
        if ( empty ($user_Lname)){
            echo "<p class='warning Auother-lname'>Enter your Last name</p>";
        }
        if ( empty ($user_phone)){
            echo "<p class='warning user_phone'>Enter your phone number</p>";
        }
        if ( empty ($user_email)){
            echo "<p class='warning book_edition'>Enter your email</p>";
        }
        if ( empty ($user_started_date)){
            echo "<p class='warning published_date'>Enter the starting date</p>";
        }
         if ( empty ($user_username)){
            echo "<p class='warning username'>Create a new username</p>";
        }
         if ( empty ($user_password)){
            echo "<p class='warning password'>Create a password</p>";
        }
         if ( empty ($user_cpassword)){
            echo "<p class='warning cpassword'>Confirm your password</p>";
        }
        if ( empty ($user_privlage)){
            echo "<p class='warning user_privlage'>Select the user Privlage</p>";
        }
    }elseif ($user_password != $user_cpassword){
            echo "<p class='confirm-error'> The password does not match</p>";
        
            
            }
        else {
             require '_/components/php/functions/newuser-table.php';
        }
        
       
        
    };

?>