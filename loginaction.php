<?php
$db_host = "localhost";
$db_user = "id12308139_diplomaresults";
$db_pass = "01854487";
$db_name = "id12308139_bteb";

$connect = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

$UserName = "";
$Password= "";
$Email = "";
if(isset($_POST['login'])){
	if(!empty($_POST)){
     $username=$_POST['UserNameOrEmail'];
     $password = $_POST['password'];
    }
 else{
 	$username = "";
 	$password = "";
 }

$data_catch = "SELECT UNAME,EMAIL,PASSWORD FROM account WHERE (UNAME = '$username' or EMAIL = '$username')";
$query = mysqli_query($connect,$data_catch);
while($data = mysqli_fetch_array($query)) 
     {
         $UserName = $data['UNAME'];
         $Email = $data['EMAIL'];
         $Password = $data['PASSWORD'];
    } 
}
?>
<html>
    <head>
        <title>বাংলাদেশ কারিগরি শিক্ষা বোর্ড-গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <link rel="icon" href="image/bd.png">
    </head>
    <body class="index-body">
        <!--NavigationBar-->
        <header class="index-main-view">
            <section class="index-row">
                <div class="index-nav-bar-menu">
                    <img src="image/bteb.png" alt="logo"/>
                    <ul class="index-main-nav">
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="result.php">RESULT</a></li>
                        <li><a href="contact.php">CONTACT US</a></li>
                        <li><a href="login.php">LOG IN</a></li>
                        <li><a href="createaccount.php">CREATE ACCOUNT</a></li>
                    </ul>
                </div>
                <div class="login-div">
                    <div class="login-heading">
                        <h2>
                        WELCOME TO LOGIN PANEL</h2>
                    </div>
                    <div  class="login-form">
                        <form action="" method="post">
                            <table class="login-table">
                                <tr>
                                    <td class="login-table-text">Username/Email:</td>
                                </tr>
                                <tr>
                                    <td><input class="login-table-input" type="text" placeholder="Username/rihan@doe.com" name="UserNameOrEmail" autocomplete="off"></td>
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