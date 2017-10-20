<?php
    $client_Fname  = null;
    $client_Sname  = null;
    $client_Lname  = null;
    $client_phone  = null;
    $client_address  = null;
    $client_started_date  = null;
    $damiin_Fname  = null;
    $damiin_phone  = null;
    $damiin_address  = null;
    $damiin_title = null;


    if (isset($_POST['client_submit'])) {
        
        @$client_Fname = $_POST['client_Fname'];
        @$client_Sname = $_POST['client_Sname'];
        @$client_Lname   = $_POST['client_Lname'];
        @$client_phone = $_POST['client_phone'];
        @$client_address = $_POST['client_address'];
        @$client_started_date = $_POST['client_started_date'];
        @$damiin_Fname = $_POST['damiin_Fname'];
        @$damiin_phone = $_POST['damiin_phone'];
        @$damiin_address   = $_POST['damiin_address'];
        @$damiin_title = $_POST['damiin_title'];
        
        if(empty($client_Fname && $client_Sname && $client_Lname && $client_phone && $client_address && $client_started_date && $damiin_Fname && $damiin_phone && $damiin_address && $damiin_title))
        {
        
        if ( empty ($client_Fname)){
            echo "<p class='warning client_Fname'>Enter your First name</p>";
        }
        
        if ( empty ($client_Sname)){
            echo "<p class='warning client_Sname'>Enter your Second name</p>";
        }
            
        if ( empty ($client_Lname)){
            echo "<p class='warning client_Lname'>Enter your Last namer</p>";
        }
            
        if ( empty ($client_phone)){
            echo "<p class='warning client_phone'>Enter your phone number</p>";
        }
            
        if ( empty ($client_address)){
            echo "<p class='warning client_address'>Enter your address </p>";
        }
           
         if ( empty ($client_started_date)){
            echo "<p class='warning client_started_date'>Enter the starting date</p>";
        }
            
        if ( empty ($damiin_Fname)){
            echo "<p class='warning damiin_Fname'>Enter Damiin first name</p>";
        }
        if ( empty ($damiin_phone)){
            echo "<p class='warning damiin_phone'>Enter Damiin phone number</p>";
        }
        if ( empty ($damiin_address)){
            echo "<p class='warning damiin_address'>Enter Damiin address</p>";
        }
        if ( empty ($damiin_title)){
            echo "<p class='warning damiin_title'>Enter Damiin title</p>";
        }
        }else {
             require '_/components/php/functions/newclient-table.php';
        }
        
       
        
    };

?>