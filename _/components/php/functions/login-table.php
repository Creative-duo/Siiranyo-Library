
<?php
$login_error = "";
if(isset($_POST['login'])){
     
    function validateFormData($formData){
        $formData = trim (stripcslashes(htmlspecialchars($formData)));
        
        return $formData;
    }
    
    $formUser = validateFormData($_POST['username']);
    $formPassword = validateFormData($_POST['password']);
    
    $query = "SELECT User_Username, User_Email, User_Password, User_First_Name, User_Last_Name FROM users WHERE User_Username = '$formUser'";
    
    $result = mysqli_query($con, $query);
    
    $login_error = 'h';
    if (mysqli_num_rows ($result) > 0){
        
        while ($row = mysqli_fetch_assoc($result)){
            $username = $row['User_Username'];
            $userpass = $row['User_Password'];
            $useremail = $row['User_Email'];
            $userfname = $row['User_First_Name'];
            $userlname = $row['User_Last_Name'];
        }
        
        if($formUser == $username && $formPassword == $userpass){
            
            $_SESSION['Login_userfname'] = $userfname;
            $_SESSION['Login_userlname'] = $userlname;
            $_SESSION['login_username'] = $username;
            
            header('Location: index.php');
        }else {
            $login_error = "<div class='alert alert-danger text-center' data-dismiss='alert'>Incorect Username / Password.<a class='close' >&times</a></div>";
        }   
    }else{
        
            $login_error = "<div class='alert alert-danger text-center'>No such User on the system. Please Try Again. <a class='close' >&times</a></div>"; 
    }
    
    mysqli_close($con);
    
}
?>