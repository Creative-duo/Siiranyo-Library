<div class="form-container">
    <h3 class="page-header">Register a new Book</h3>
    <form action="new-books.php" method="post">
        <div class="form-group row">
            <div class="col-xs-6">
                <label for="Author-FirstName">Author's First Name:</label>
                <input name="Author_Fname" class="form-control" id="Author-FirstName" type="text" placeholder="Enter Author's First Name" value="<?php echo $Author_Fname;?>">
            </div>
            <div class="col-xs-6">
                <label for="Author-LastName">Author's Last Name:</label>
                <input name="Author_Lname" class="form-control" id="Author-LastName" type="text" placeholder="Enter Author's First Name" value="<?php echo $Author_Lname;?>">
            </div><br><br><br>
            <h4 class="page-header">Book Information</h4>

            <div class="col-xs-4">
                <label for="Author-LastName">Title</label>
                <input name="book_title" class="form-control" id="Author-LastName" type="text" placeholder="Enter Book Title" value="<?php echo $book_title;?>">
            </div>
            <div class="col-xs-4">
                <label for="Author-LastName">Edition:</label>
                <input name="book_edition" class="form-control" id="Author-LastName" type="number" placeholder="Enter Book Edition" value="<?php echo $book_edition;?>">
            </div>
            <div class="col-xs-4">
                <label for="Author-LastName">Published Date:</label>
                <input name="published_date" class="form-control" id="Author-LastName" type="date" placeholder="Enter Published Date" value="<?php echo $published_date;?>">
            </div>
            <div class="col-xs-4">
                <label for="Author_LastName">Category</label>
                <select class="form-control" id="sel1" name="book_category">
                    <option selected disabled>Select The Category</option>
                    <option>General References</option>
                    <option>Philosophy</option>
                    <option>Religion</option>
                    <option>Social Sciences</option>
                    <option>Language</option>
                    <option>Natural Science</option>
                    <option>Technology and Applied Science</option>
                    <option>Fine Arts and Recreation</option>
                    <option>Literature</option>
                    <option>History and Biography</option>
                </select>
            </div>
            <div class="col-xs-3">
                <label for="Author-LastName">ISBN Code:</label>
                <input name="isbn_code" class="form-control" id="Author-LastName" type="text" placeholder="ISBN Code" value="<?php echo $isbn_code;?>">
            </div>
            <div class="col-xs-3">
                <label for="Author-LastName">Dewey Decimal:</label>
                <input name="dewey_code" class="form-control" id="Author-LastName" type="text" placeholder="Dewey Code" value="<?php echo $dewey_code;?>">
            </div>
            <div class="col-xs-2">
                <label for="Author-LastName">Quantity:</label>
                <input name="book_quantity" class="form-control" id="Author-LastName" type="number" value="<?php echo $book_quantity;?>">
            </div>
            <div class="btn-container">
                <button id="book_submit" name="book_submit"></button>
            </div>
        </div>

    </form>
</div>
