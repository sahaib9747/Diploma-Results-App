<?php
if (isset($_POST['newresult'])) {
            header("Location: cpanel.php");
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
                <!-- header -->
                <?php include 'header.php'; ?>
                <div class="cpanel-area-div">
                    <div class="cpanel-heading">
                        <img src="image/bd.png">
                        <h2 class="cpanel-heading-text">Bangladesh Technical Education Board</h2>
                        <h3 class="cpanel-heading-text">Result Proccesing Unit</h3> 
                    </div>
                    <div class="cpanel-add-result">
                        <form action="" method="post">
                            <table>
                                <tr>
                                    <td colspan="2" class="cpanel-text"><center><h3 >Result Successfully Added, Thank You !</h3></center</td>
                                </tr>
                            </table>
                            <button class="cpanel-button cpanel-button-save" name="newresult" type="submit">New Result</button>
                            <button class="cpanel-button cpanel-button-refresh">
                            <a href="index.php">Log Out</a></button>
                        </form>
                    </div> 
                </div>
            </section>
        </header>
        <?php include("footer.php"); ?>
    </body>
</html>