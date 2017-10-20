<?php session_start();
if(!$_SESSION['login_username']){
         header('Location: login.php');
     }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Somaliland National Library | New Books</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https:////cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="_/css/bootstrap.css" rel="stylesheet">
    <link href="_/css/font-awesome.min.css" rel="stylesheet">
    <link href="_/css/side-bar.css" rel="stylesheet">
    <link href="_/css/side-bar1.css" rel="stylesheet">
    <link href="_/css/header.css" rel="stylesheet">
    <link href="_/css/book-form.css" rel="stylesheet">
    <link href="_/css/footer.css" rel="stylesheet">
    
    
    
</head>

<body id="books">
       <?php include '_/components/php/side-bar1.php'; ?>
    
    <div class="books-body">
        <div class="top-header">
            <?php include  '_/components/php/header.php'; ?>
        </div>
        
        <?php require '_/components/php/functions/conection.php';?>
        <?php require '_/components/php/functions/validate_newclient.php';?>
      
       <?php include '_/components/php/client-form.php'; ?>
    </div>
    
    <?php include '_/components/php/footer.php'; ?>

    
    <script src="_/js/boostrap.js"></script>
    <script src="https:////cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="_/js/myscript.js"></script>
    <script src="_/js/side-bar.js"></script>
    <script src="_/js/submit.js"></script>
</body>

</html>
