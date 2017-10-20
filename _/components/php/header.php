
<div class="main-content">
    <div class="col-lg-12">
        <header class="clearfix">
            <nav class="navbar">
                <div class="container-fluid">
                    <div class="navbar-header" id="logo">
                        <a class="navbar-brand shadowfilter" href="index.php">
                            <img alt="Admas Classroom" src="images/Misc/librarylogo.png" id="header_logo">
                            <img src="images/Misc/Somalilandnationallibrary.png" alt="Admas Classroom" class="header-text ">
                        </a>
                        <!-- navbar-brand -->
                    </div>
                    <!-- navbar-header -->
                    <nav class="header-nav">
                        <ul class="nav nav-pills pull-right">
                            <li role="presentation" class="profile-header">
                                <a href="#" class="user-info"><img src="images/Misc/user.jpg" class="user-image"><?php echo $_SESSION['Login_userfname']." ". $_SESSION['Login_userlname']; ?>
                                </a>
                            </li>
                            <li role="presentation" class="profile-header logout">
                                <a href="logout.php"><i class="fa fa-sign-out"></i> Log out</a>
                            </li>
                            <!-- dropdown -->
                        </ul>
                        <!-- nav nav-pills -->
                    </nav>
                    <!-- Nav -->
                </div>
                <!-- container-fluid -->
            </nav>
            <!-- navbar -->
        </header>
        <!-- Clearfix -->
    </div>
    <!-- Col-lg-12-->
</div>
<!-- Content and row Classes -->
