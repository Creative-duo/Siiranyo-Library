<?php 
session_start();

if(!$_SESSION['loginusername']){
    header("location:index.php");
}
include('connection\connection.php');
include('connection\function1.php');
$message ="";
$titleErr="";
$memberErr ="";
$durErr="";
$startDate="";
if (isset($_POST['burrowbook'])){
$bookID = $memberID = $time = null;
  
//Check the BookId input
if(!$_POST["bookid"]){
    $titleErr="Enter book <br>";
}else{
    $bookTitle =  validateformdata($_POST["bookid"]);
      // query ID
$query="SELECT * FROM books WHERE Title='$bookTitle'";
        
        $result = mysqli_query($conn, $query);    
    $row = mysqli_fetch_array($result);
  $bookID = validateformdata($row['ID']);

}
  
//Check the memberID input    
if(!$_POST["memberid"]){
    $memberErr="Enter the member <br>";
}else{
        if (!is_numeric($_POST["memberid"]))
        {
   $memberErr ="*Invalid input*";
    }else{
    $memberID = validateformdata($_POST["memberid"]);
    }
}
    
    //check startin time
    if(!$_POST["start-date"]){
    $durErr="Enter the date <br>";
}else{
        $startDate = validateformdata($_POST["start-date"]);
    }
//check the duration input
if(!$_POST["span"]){
    $durErr="Enter the duration <br>";
}else{
        if (!is_numeric($_POST["span"]))
{
   $durErr ="*Invalid input*";
}else{
    $time = validateformdata($_POST["span"]);
    }
}


    
  
      
      
if ($bookID && $memberID && $time && $startDate){
    
    
    $start = strtotime("$startDate");
    $end = strtotime("+$time days", $start);
    $display =date("y-m-d H:i:s", $end);

    $query ="INSERT INTO `book_burrowing` (`burrowing_ID`, `Book_fk`, `Client_fk`, `Start_Date`, `Duration`, `EndDate`) VALUES (NULL, '$bookID', '$memberID', '$startDate' , '$time', '$display')  ";
    
    $result = mysqli_query($conn, $query);
    
    if ($result){
       $message =  '<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
  <strong> Saved!</strong> 
</div>';
    }else{
        echo "Error : " .$query. "<br>".mysqli_error($conn);
    }
}
    
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lending</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       <link rel="stylesheet" type="text/css" href="burrowform/form2.css" />
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="font-awesome.min.css" rel="stylesheet">
    <link href="bootstrap.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
     <link href="tablecss/header.css" rel="stylesheet">
      <link href="side-bar.css" rel="stylesheet">
    <link href="side-bar1.css" rel="stylesheet">
        <link href="footer.css" rel="stylesheet">
    <link href="alert.css" rel="stylesheet">

</head>
<body>
               <div class="headerside">
     <a href="#" class="nav-trigger shadowfilter">
        <img alt="Admas Classroom" src="librarylogo1.png" id="sidebar_logo">
    </a>

    <div class="side-nav">
        <nav class="main">
            <h5>Welcome</h5>
            <ul class="nav-container">
                <li class="nav-item open">
                    <span><i class="fa fa-book"></i> Books</span>
                    <ul class="subnav">
                        <li><a href="booktable.php">Search Book</a></li>
                        <li><a href="bookreg.php">New Books</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <span><i class="fa fa-user-secret "></i> User Control</span>
                    <ul class="subnav">
                        <li><a href="userstable.php">List of Users</a></li>
                        <li><a href="user.php">Create new User</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <span><i class="fa fa-users"></i> Client</span>
                    <ul class="subnav">
                        <li><a href="clienttable.php">Client list</a></li>
                        <li><a href="clientreg.php">Register new Client</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <span><i class="fa fa-table"></i> Reports</span>
                    <ul class="subnav">
                        <li><a href="bookreport.php">Book Report</a></li>
                        <li><a href="#">Client Report</a></li>
                        <li><a href="burrow-report.php">Burrow book report</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                   <span><i class="fa fa-exchange"></i> <a href ="burrowreg.php">Lending Books</a></span>
                </li>
            </ul>
        </nav>
    </div>

</div>
    
 <div class="books-body">
       <div class="header">
            
    <div class="col-lg-12">
        <header class="clearfix">
            <nav class="navbar">
                <div class="container-fluid">
                    <div class="navbar-header" id="logo">
                        <a class="navbar-brand shadowfilter" href="index.php">
                            <img alt="Admas Classroom" src="librarylogo.png" id="header_logo">
                            <img src="Somalilandnationallibrary.png" alt="Admas Classroom" class="header-text ">
                        </a>
                        <!-- navbar-brand -->
                    </div>
                    <!-- navbar-header -->
                    <nav class="header-nav">
                        <ul class="nav nav-pills pull-right">
                            <li role="presentation" class="dropdown profile-header">
                                <a href="#" class="dropdown-toggle user-info" data-toggle="dropdown"><img src="user.jpg" class="user-image"><?php echo $_SESSION['loginusername']?> <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                    <li>
                                        <a tabindex="-1" href="index.php">Log out  <i class="fa fa-sign-out pull-right"></i></a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Profile  <i class="fa fa-cog pull-right"></i></a>
                                    </li>
                                </ul>
                                <!-- dropdown-menu -->
                            </li>
                            <!-- dropdown -->
                        </ul>
                        <!-- nav nav-pills -->
                    </nav>
                    <!-- Nav -->
                </div>
                <!-- container-fluid -->
            </nav>
            <!-- navbar -->
        </header>
        <!-- Clearfix -->
    </div>
    <!-- Col-lg-12-->

<!-- Content and row Classes -->
        </div>


    
<div class="container-fluid ">
    <div class="row">
   
   
    <div class="col-sm-5 col-md-4 col-lg-5  dinac-bidix">
        
        

 
  <form action="<?= $_SERVER['PHP_SELF'] ?>" class="form-horizontal form" method="post" autocomplete="off">
      <h2 style="color:#73879c; font-size:20px">Burrow book</h2>
      <div class="line1"></div>
      
          <h4 class="member-name" style="color:#73879c; font-size:13px">Info.</h4>
      <div class="form-group margin-input">
      <label for="email" class="control-label col-sm-3 col-md-3 col-lg-3">Book:</label>
        <div class="col-sm-6 col-md-6 col-lg-6">
          <span class="error" style="color:red;"> <?php echo $titleErr;?></span>
          <input type="text" class="form-control" id="book-filter" placeholder="book.." name="bookid">
            
        </div>
      </div>
     
             
    <div class="form-group margin-input">
      <label for="email" class="control-label col-sm-3 col-md-3 col-lg-3">MemberID:</label>
        <div class="col-sm-6 col-md-6 col-lg-6">
          <span class="error" style="color:red;"> <?php echo $memberErr;?></span>
          <input type="text" class="form-control" id="email" placeholder="member.." name="memberid">
            
        </div>
      </div>
       <div class="form-group margin-input">
      <label for="email" class="control-label col-sm-3 col-md-3 col-lg-3">Starting:</label>
        <div class="col-sm-6 col-md-6 col-lg-6">
            
          <span class="error" style="color:red;"> <?php echo $durErr;?></span>
          <input type="date" class="form-control" id="email" placeholder="time.." name="start-date">
            
        </div>
      </div>
        
     <div class="form-group margin-input">
      <label for="email" class="control-label col-sm-3 col-md-3 col-lg-3">Duration:</label>
        <div class="col-sm-6 col-md-6 col-lg-6">
            
          <span class="error" style="color:red;"> <?php echo $durErr;?></span>
          <input type="text" class="form-control" id="email" placeholder="time.." name="span">
            
        </div>
      </div>
      
         
                   
       
      
      <div class="line"></div>
        
        
    
      
      <div class="button-area">
    <button type="submit" class=" oho" name="burrowbook">Save</button>
          </div>
       <?php
    echo $message
  
    ?>
  </form>

</div>
        
        
           
    </div>
   
</div>
    
    </div>
         <div class="footer">
    <p>SNL System designed and created by <span>Mohamed Cutte</span> © 2017 </p>
</div>
    <script src="side-bar.js"></script>
    <script type="text/javascript">

                                    $(function() 
                                {
                                 $( "#book-filter" ).autocomplete({
                                  source: 'autocomplete.php'
                                 });
                                });
    
    </script>
    
</body>
</html>