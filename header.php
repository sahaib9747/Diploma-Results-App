<?php 
error_reporting(0); 
session_start();
?>
<div class="index-nav-bar-menu">
    <img src="image/bteb.png" alt="logo"/>
    <ul class="index-main-nav">
        <li><a href="index.php">HOME</a></li>
        <li><a href="result.php">RESULT</a></li>
        <li><a href="contact.php">CONTACT US</a></li>

        <!-- Header Logic: Start -->
        <?php if ($_SESSION['isLogged']){ ?>
            <li>
                <form method="GET" action="">
                    <input type='hidden' name="logout" value="LOG OUT">
                    <a style="cursor: pointer" onclick="this.parentNode.submit();">LOG OUT</a>
                </form>
            </li>
            <li><a href="cpanel.php">CPANEL</a></li>
        <?php } else{ ?>
            <li><a href="logindesign.php">LOG IN</a></li>
            <li><a href="createaccount.php">CREATE ACCOUNT</a></li>
        <?php } ?>
        <!-- Header Logic: End -->
    </ul>
</div>


<?php
    if(isset($_GET['logout'])){
        session_unset();
        session_destroy();
        header("Location: index.php");
    }
?>
