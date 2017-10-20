<div class="form-container client">
    <h3 class="page-header">Register a new Client</h3>
    <form action="new-client.php" method="post">
        <div class="form-group row">
            <div class="col-xs-4">
                <label for="client_Fname">First Name</label>
                <input name="client_Fname" class="form-control" id="client_Fname" type="text" placeholder="Enter Your First Name" value="<?php echo $client_Fname;?>">
            </div>
            <div class="col-xs-4">
                <label for="client-Sname">Second Name</label>
                <input name="client_Sname" class="form-control" id="client-Sname" type="text" placeholder="Enter Your Second Name" value="<?php echo $client_Sname;?>">
            </div>
            <div class="col-xs-4">
                <label for="client-Lname">Last Name</label>
                <input name="client_Lname" class="form-control" id="client-Lname" type="text" placeholder="Enter Your Last Name" value="<?php echo $client_Lname;?>">
            </div>
            <div class="col-xs-4">
                <label for="client_phone">Phone Number</label>
                <input name="client_phone" class="form-control" id="client_phone" type="text" placeholder="Enter Your phone number" value="<?php echo $client_phone;?>">
            </div>
            <div class="col-xs-4">
                <label for="client_address">Address</label>
                <input name="client_address" class="form-control" id="client_address" type="text" placeholder="Enter your Address" value="<?php echo $client_address;?>">
            </div>
            <div class="col-xs-4">
                <label for="client_started_date">Started Date</label>
                <input name="client_started_date" class="form-control" id="client_started_date" type="date" placeholder="Enter The date" value="<?php echo $client_started_date;?>">
            </div><br><br><br>
            <h4 class="page-header">Damiin Information</h4>

            <div class="col-xs-6">
                <label for="damiin_Fname">Damiin Name</label>
                <input name="damiin_Fname" class="form-control" id="damiin_Fname" type="text" placeholder="Enter Damiin Full name" value="<?php echo $damiin_Fname;?>">
            </div>
            <div class="col-xs-6">
                <label for="damiin_phone">Damiin phone number</label>
                <input name="damiin_phone" class="form-control" id="damiin_phone" type="text" placeholder="Enter Damiin Phone number" value="<?php echo $damiin_phone;?>">
            </div>
            <div class="col-xs-6">
                <label for="damiin_address">Damiin Address</label>
                <input name="damiin_address" class="form-control" id="damiin_address" type="text" placeholder="Enter Damiin Address" value="<?php echo $damiin_address;?>">
            </div>
            <div class="col-xs-6">
                <label for="damiin_title">Damiin Title</label>
                <input name="damiin_title" class="form-control" id="damiin_title" type="text" placeholder="Enter Damiin title" value="<?php echo $damiin_title;?>">
            </div>
            <div class="btn-container">
                <button id="client_submit" name="client_submit"></button>
            </div>
        </div>

    </form>
</div>
