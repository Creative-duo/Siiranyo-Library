
<div class="form-container lending-container">
    <h3 class="page-header">Register a new Lending Book</h3>
    <form action="lending.php" method="post" autocomplete="off">
        <div class="col-xs-4">
            <label for="cleint_id">Cleint ID</label>
            <input name="client_id" class="form-control" id="client_id" type="text" placeholder="Enter Cleint ID" value="<?php echo $client_id;?>" autocorrect="off">
        </div>
        <div class="col-xs-4">
            <label for="dewey_code">Dewey Decimal Code</label>
            <input name="dewey_code" class="form-control" id="dewey_code" type="text" placeholder="Enter Dewey Code" value="<?php echo $dewey_code;?>" autocorrect="off">
        </div>
        <div class="col-xs-4">
            <label for="book_name">Book Name</label>
            <input name="book_name" class="form-control" id="book_name" type="text" placeholder="Enter The Book Name" value="<?php echo $book_name;?>" autocorrect="off">
            <div id="response">
               
            </div>
        </div>
        <div class="col-xs-6">
            <label for="starting_date">Starting Date</label>
            <input name="starting_date" class="form-control" id="starting_date" type="date" value="<?php echo $starting_date;?>" autocorrect="off">
        </div>
        <div class="col-xs-6">
            <label for="duration">Duration</label>
            <input name="duration" class="form-control" id="duration" type="number" placeholder="Enter the number of days" value="<?php echo $duration?>" autocorrect="off">
        </div>
        <div class="btn-container lending-btn">
            <button id="lending_submit" name="lending_submit"></button>
        </div>
    </form>
</div>
