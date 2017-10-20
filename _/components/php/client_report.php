<table id="bookReport" class="display" cellspacing="0">
    <thead>
        <tr>
            <th>#</th>
            <th>Cleint Name</th>
            <th>Cleint Address</th>
            <th>Clinet Phone</th>
            <th>Damiin Name</th>
            <th>Damiin Phone Number</th>
            <th>Started Date</th>
        
            
        </tr>
    </thead>
    <tbody>
        <?php
            
        $query = "SELECT clients.First_Name, clients.Second_Name, clients.Last_Name, clients.Phone_Number, lending.Book_Name, lending.Duration,lending.Starting_Date
        FROM clients, lending
        WHERE clients.Client_ID=Cleint_ID";

        $result = mysqli_query($con, $query);
        
        if (!$result){
        die ("Query Failed: ".mysqli_error($con));
            }
        
        
        $count = 1;
        while ($row = mysqli_fetch_array($result)){
            
            echo "<tr>
            
            <td>$count</td>
            <td>".$row['First_Name']." ".$row['Second_Name']." ".$row['Last_Name']."</td>
            <td>".$row['Phone_Number']."</td>
            <td>".$row['Book_Name']."</td>
            <td>".$row['Starting_Date']."</td>
            <td>".$row['Duration']."</td>
            
    
            </tr>";
            $count++;
        };
        
        
        ?>
        
    </tbody>
</table>