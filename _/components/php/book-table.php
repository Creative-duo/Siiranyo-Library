<table id="myTable" class="display" cellspacing="0">
    <thead>
        <tr>
            <th>#</th>
            <th>Author Name</th>
            <th>Book Title</th>
            <th>Edition</th>
            <th>Published Date</th>
            <th>Category</th>
            <th>ISBN</th>
            <th>Dewey Decimal</th>
            <th>Quantity</th>
        </tr>
    </thead>
    <tbody>
        <?php
            
        $query = "SELECT * FROM `books`";
        
        $result = mysqli_query($con, $query);
        
        $count = 1;
        while ($row = mysqli_fetch_array($result)){
            
            echo "<tr>
            
            <td>$count</td>
            <td>".$row['Authors_First_Name'].$row['Authors_Last_Name']."</td>
            <td>".$row['Book_Title']."</td>
            <td>".$row['Edition']."</td>
            <td>".$row['Published_Date']."</td>
            <td>".$row['Category']."</td>
            <td>".$row['ISBN_Code']."</td>
            <td>".$row['Dewey_Decimal_Code']."</td>
            <td>".$row['Quantity']."</td>
            
            </tr>";
            $count++;
        };
        
        
        ?>
        
    </tbody>
</table>