<div class="form-container">
    <h3 class="page-header">Register a new User</h3>
    <form action="new-user.php" method="post">
        <div class="form-group row">
            <div class="col-xs-6">
                <label for="user_Fname">First Name:</label>
                <input name="user_Fname" class="form-control" id="user_Fname" type="text" placeholder="Enter Your First Name" value="<?php echo $user_Fname;?>">
            </div>
            <div class="col-xs-6">
                <label for="user-LastName">Last Name:</label>
                <input name="user_Lname" class="form-control" id="user-LastName" type="text" placeholder="Enter Your First Name" value="<?php echo $user_Lname;?>">
            </div><br><br><br>
            <h4 class="page-header">User Information</h4>

            <div class="col-xs-4">
                <label for="user_phone">Phone Number</label>
                <input name="user_phone" class="form-control" id="user_phone" type="text" placeholder="Enter Your phone number" value="<?php echo $user_phone;?>">
            </div>
            <div class="col-xs-4">
                <label for="user_email">Email:</label>
                <input name="user_email" class="form-control" id="user_email" type="email" placeholder="Enter your email" value="<?php echo $user_email;?>">
            </div>
            <div class="col-xs-4">
                <label for="user_started_date">Started Date:</label>
                <input name="user_started_date" class="form-control" id="user_started_date" type="date" placeholder="Enter The date" value="<?php echo $user_started_date;?>">
            </div>
            <div class="col-xs-3">
                <label for="user_username">Username:</label>
                <input name="user_username" class="form-control" id="user_username" type="text" placeholder="Enter a username" value="<?php echo $user_username;?>">
            </div>
            <div class="col-xs-3">
                <label for="user_password">Password:</label>
                <input name="user_password" class="form-control" id="user_password" type="password" placeholder="Enter password">
            </div>
            <div class="col-xs-3">
                <label for="user_password">Confirm Password:</label>
                <input name="user_cpassword" class="form-control" id="user_password" type="password" placeholder="Re type your password">
            </div>
            <div class="col-xs-3">
                <label for="user_privlage">Privlage:</label>
                <select class="form-control" name="user_privlage" id="user_privlage">
                    <option>Admin</option>
                    <option>Employee</option>
                </select>
            </div>
            <div class="btn-container">
                <button id="user_submit" name="user_submit"></button>
            </div>
        </div>

    </form>
</div>
