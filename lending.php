<?php require '_/components/php/functions/conection.php';?>
<?php session_start();
if(!$_SESSION['login_username']){
         header('Location: login.php');
     }

?>
<?php if(isset($_POST['search'])){
   $response = "";
    $q = $_POST['q'];
    
    $query = "SELECT `Book_Title` FROM books WHERE `Book_Title` LIKE '%$q%'";
    $result = mysqli_query($con , $query);
        
    if(mysqli_num_rows($result) > 0)
    {
        $response .="<ul class='sugestion'>";
     while($data = mysqli_fetch_array($result)){
         $response .="<li>".$data['Book_Title']."</li>";
     }
        $response .="</ul>";
    }else {
        $response = '<ul class="sugestion"><li>No Data Found</li></ul>';
    }
    
    exit($response);
    
    
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
        
        <?php require '_/components/php/functions/validate_newlending.php';?>
      
       <?php include '_/components/php/lending-form.php'; ?>
    </div>
    
    <?php include '_/components/php/footer.php'; ?>
    
    <script src="_/js/boostrap.js"></script>
    <script src="https:////cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="_/js/myscript.js"></script>
    <script src="_/js/side-bar.js"></script>
    <script src="_/js/lending.js"></script>
    <script>
 $(document).ready(function(){ $('#book_name').keyup(function(){ var query = $('#book_name').val(); if(query.length > 0){ $.ajax( { url: 'lending.php', method: 'POST', data: { search: 1, q: query }, success: function(data){ $('#response').html(data); }, dataType: 'text' }, ); }; }); });
$(document).on('click', 'li', function() {
    var books = $(this).text();
    $('#book_name').val(books);
    $('#response').html("");
});
    $(".sugestion").blur(function(){
         $(document).on('click', function (e) {
        if ($(e.target).is('html')) {
            $(this).hide();
        }
    })
    });
    </script>
</body>

</html>
