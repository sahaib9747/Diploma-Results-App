<?php
session_start();
?>


<html>
    <head>
        <title>বাংলাদেশ কারিগরি শিক্ষা বোর্ড-গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <link rel="icon" href="image/bd.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body class="index-body">
        <!--NavigationBar-->
        <header class="index-main-view">
            <section class="index-row">
                <!-- header -->
                <?php include 'header.php'; ?>
                <div class="index-mid-row">
                    <h1>Welcome to BTEB Results Program</h1>
                    <div class="index-button">
                        <a class="index-btn index-btn-one" href="result.php">Results</a>
                        <a class="index-btn index-btn-two" href="createaccount.php">Create Account</a>
                    </div>
                </div>
            </section>
        </header>
        <?php include("footer.php"); ?>
    </body>
</html>