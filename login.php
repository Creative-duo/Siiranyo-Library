<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Somaliland National Library | Log in</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https:////cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="_/css/bootstrap.css" rel="stylesheet">
    <link href="_/css/font-awesome.min.css" rel="stylesheet">
    <link href="_/css/login.css" rel="stylesheet">
    <link href="_/css/book-form.css" rel="stylesheet">
    <link href="_/css/footer.css" rel="stylesheet">
    


</head>

<body id="login">
      
    <?php require '_/components/php/functions/conection.php';?>
    <?php require '_/components/php/functions/login-table.php';?>
    <?php include '_/components/php/login-form.php'; ?>
    <?php include '_/components/php/footer.php'; ?>
    
    <div class="table-footer">
        <?php include  '_/components/php/footer.php';?>
    </div>
</body>

</html>
