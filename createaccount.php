<?php
$db_host = "localhost";
$db_user = "id12308139_diplomaresults";
$db_pass = "01854487";
$db_name = "id12308139_bteb";

$ExistUName =  "0";
$uname = "1";

$ExistEmail="0";
$email = "1";

$connect = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
if(isset($_POST['create'])){
    if(!empty($_POST))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $uname = $_POST['uname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $ExistUName = "";
        $ExistEmail = "";

        $data_catch = "SELECT UNAME,EMAIL FROM account WHERE (UNAME = '$uname')";
        $data_query = mysqli_query($connect,$data_catch);
        while ($data = mysqli_fetch_array($data_query)){
            $ExistUName = $data['UNAME'];
        }
        $data_catch = "SELECT UNAME,EMAIL FROM account WHERE (EMAIL = '$email')";
        $data_query = mysqli_query($connect,$data_catch);
        while ($data = mysqli_fetch_array($data_query)){
            $ExistEmail = $data['EMAIL'];
        }
        if($ExistUName != $uname and $ExistEmail != $email){

            $insert = "INSERT INTO account(FNAME,LNAME,UNAME,EMAIL,PASSWORD) VALUES('$fname','$lname','$uname','$email','$password')";
            if(mysqli_query($connect,$insert)){
                header("Location: logindesign.php");
            }
        }
    }
}
?>

<html>
    <head>
        <title>নিবন্ধন - বাংলাদেশ কারিগরি শিক্ষা বোর্ড-গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <link rel="icon" href="image/bd.png">
    </head>
    <body class="index-body">
        <!--NavigationBar-->
        <header class="index-main-view">
            <section class="index-row">
                <!-- header -->
                <?php include 'header.php'; ?>
                <div class="create-area-div">
                    <div class="create-heading">
                        <h2>CREATE AN ACCOUNT !</h2>
                    </div>
                    <div class="create-form">
                        <form method="post">
                            <table class="create-table">
                                <tr>
                                    <td class="create-table-text">First Name: </td>
                                </tr>
                                <tr>
                                    <td ><input class="create-table-input" type="text" name="fname" placeholder="Rihan"></td>
                                </tr>
                                <tr>
                                    <td class="create-table-text">Last Name:</td>
                                </tr>
                                <tr>
                                    <td><input class="create-table-input" type="text" name="lname" placeholder="Khan"></td>
                                </tr>
                                <tr>
                                    <td class="create-table-text">User Name: <?php
                                          if($ExistUName == $uname){
                                            echo "Already Exist";
                                          }
                                         ?> </td>                                 
                                </tr>
                                <tr>
                                    <td ><input class="create-table-input" type="text" name="uname" placeholder="rihan9747"></td>
                                </tr>
                                <tr>
                                    <td  class="create-table-text">Email Address:
                                        <?php
                                          if($ExistEmail == $email){
                                            echo "Already Exist";
                                          }
                                         ?> 
                                    </td>
                                </tr>
                                <tr>
                                    <td><input class="create-table-input" type="email" name="email" placeholder="rihan9747@yahoo.com"></td>
                                </tr>
                                <tr>
                                    <td class="create-table-text">Password:</td>
                                </tr>
                                <tr>
                                    <td><input class="create-table-input" type="password" name="password" placeholder="secret"></td>
                                </tr>
                            </table>
                            <center><button class="create-button" name="create">Create Acccount</button></center>
                        </form>
                    </div>
                </div>
            </section>
        </header>
        <?php include("footer.php"); ?>
    </body>
</html>