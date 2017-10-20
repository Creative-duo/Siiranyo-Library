<div class="login_logo shadowfilter">
        <img alt="Admas Classroom" src="images/Misc/librarylogo.png" id="header_logo">
        <img src="images/Misc/Somalilandnationallibrary.png" alt="Admas Classroom" class="header-text ">
    </div>
    <?php echo $login_error;?>
    <div class="login">
        <h1>WELCOME. PLEASE LOG IN.</h1>
        
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" autocomplete="off" autocorrect="off" spellcheck="false">
            <p><input required type="text" name="username" value="" placeholder="Enter your username"></p>
            <p><input required type="password" name="password" value="" placeholder="Enter your password"></p>
            <p class="remember_me">
                <label>
                <input type="checkbox" name="remember_me" id="remember_me">Remember me 
                </label>
            </p>
            <p class="submit"><input type="submit" name="login" value="LOG IN"></p>
        </form>
    </div>