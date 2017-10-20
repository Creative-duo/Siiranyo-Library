<?php 
        session_start();
        
        $_SESSION['Login_userfname'] = null;
        $_SESSION['Login_userlname'] = null;
        $_SESSION['login_username'] = null;

        header('Location: login.php');
?>