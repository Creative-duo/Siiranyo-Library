<div class="header">
    <a href="#" class="nav-trigger shadowfilter">
        <img alt="Admas Classroom" src="images/Misc/librarylogo1.png" id="sidebar_logo">
    </a>

    <div class="side-nav">
        <nav class="main">
            <h5>Welcome! <?php echo $_SESSION['Login_userfname'];?></h5>
            <ul class="nav-container">
                <li class="nav-item open">
                    <a href="index.php"><span><i class="fa fa-home"></i> Home</span></a>
                </li>
                <li class="nav-item">
                    <span><i class="fa fa-book"></i> Books</span>
                    <ul class="subnav">
                        <li><a href="book.php">Search Book</a></li>
                        <li><a href="new-books.php">New Books</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <span><i class="fa fa-user-secret "></i> User Control</span>
                    <ul class="subnav">
                        <li><a href="users.php">List of Users</a></li>
                        <li><a href="new-user.php">Create new User</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <span><i class="fa fa-users"></i> Client</span>
                    <ul class="subnav">
                        <li><a href="client.php">Client list</a></li>
                        <li><a href="new-client.php">Register new Client</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <span><i class="fa fa-table"></i> Reports</span>
                    <ul class="subnav">
                        <li><a href="book-report.php">Barrowed Book Report</a></li>
                        <li><a href="client-report.php">Client Report</a></li>
                    </ul>
                </li>
                <li class="nav-item open">
                    <a href="lending.php"><span><i class="fa fa-exchange"></i> Lending Books</span></a>
                </li>
            </ul>
        </nav>
    </div>

</div>
