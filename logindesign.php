<?php
include 'login.php';
?>


<html>
    <head>
        <title>লগইন - বাংলাদেশ কারিগরি শিক্ষা বোর্ড-গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <link rel="icon" href="image/bd.png">
    </head>
    <body class="index-body">
        <!--NavigationBar-->
        <header class="index-main-view">
            <section class="index-row">
                <!-- here header file -->
                <?php include 'header.php'; ?>
                <div class="login-div">
                    <div class="login-heading">
                        <h2>
                        WELCOME TO LOGIN PANEL</h2>
                                <?php
                                if(isset($_POST['login'])){
                                    $mail = $_POST['email'];
                                    $pass = $_POST['password'];
                                
                                    $login = new Login();
                                    if ($login -> log($mail, $pass)){
                                        $_SESSION['isLogged'] = Login :: $isLogged; // available in all of file in one season
                                        redirect("index.php");
                                         
                                    }
                                    else{ ?>
                                        <p class="login-heading-msg">
                                        Invalid credentials </p>
                                    <?php
                                    }
                                } ?>
                    </div>
                    <div  class="login-form">
                        <form action="" method="post">
                            <table class="login-table">
                                <tr>
                                    <td class="login-table-text">Username/Email:</td>
                                </tr>
                                <tr>
                                    <td><input class="login-table-input" type="text" placeholder="Username/rihan@doe.com" name="email" autocomplete="off"></td>
                                </tr>
                                <tr>
                                    <td class="login-table-text">Password:</td>
                                </tr>
                                <tr>
                                    <td ><input class="login-table-input" type="password" placeholder="secret" name="password" autocomplete="off"></td>
                                </tr>
                            </table>
                            <center><button class="login-table-button" name="login"><a class="login-table-anchor"href="#"></a>Login</button></center>
                        </form>  
                    </div >
                </div>
            </section>
        </header>
        <?php include("footer.php"); ?>
    </body>
</html>