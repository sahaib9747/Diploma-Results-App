<?php
$db_host = "localhost";
$db_user = "id12308139_diplomaresults";
$db_pass = "01854487";
$db_name = "id12308139_bteb";
$connect = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
?>



<html>
    <head>
        <title>যোগাযোগ - বাংলাদেশ কারিগরি শিক্ষা বোর্ড-গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <link rel="icon" href="image/bd.png">
    </head>
    <body class="index-body">
        <!--NavigationBar-->
        <header class="index-main-view">
            <section class="index-row">
                <!-- header -->
                <?php include 'header.php'; ?>
                <div class="contact-area-div">
                    <div class="contact-heading">
                        <h2>Send us a message</h2>
                        <?php if(isset($_POST['send'])){
                        if(!empty($_POST))
                        {
                            $email = $_POST['email'];
                            $message = $_POST['message'];
                            $insert = "INSERT INTO contact(EMAIL,MESSAGE) VALUES('$email','$message')";
                            if(mysqli_query($connect,$insert)){ ?>
                               <p style="color: green; margin-top: 15px; font-size: 18px;"> <?php echo "Thanks for contact us!"; ?> </p>
                               <?php 
                            }
                            else{
                                echo "failed";
                            }
                        }

                    } 
                    ?>
                    </div>
                    <div class="contact-table-div">
                        <form action="" method="post">
                            <table>
                                <tr class="contact-text">
                                    <td>Email Address:</td>
                                </tr>
                                <tr>
                                    <td class="contact-email-td"><input class="email-input" type="email" name="email"></td>
                                </tr>
                                <tr>
                                    <td class="contact-text">Your Message:</td>
                                </tr>
                                <tr>
                                    <td class="contact-message-td" rowspan="6" colspan="2"> <textarea class="input-message" name="message"></textarea></td>
                                </tr>
                            </table>
                            <button type="submit" name="send" class="cpanel-button">Send</button>

                        </form>
                    </div>
                </div>
            </section>
        </header>
        <?php include("footer.php"); ?>
    </body>
</html>