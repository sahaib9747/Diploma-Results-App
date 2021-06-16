<?php
$ApCode = "2580";
if (isset($_POST['entry'])) {
    if(!empty($_POST)){
        $apcode = $_POST['ApCode'];
        if($ApCode == $apcode){
            header("Location: cpanel.php");
        }
    }
}

?>
 

<html>
    <head>
        <title>ধন্যবাদ - বাংলাদেশ কারিগরি শিক্ষা বোর্ড-গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</title>
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
                        <h3 class="cpanel-heading-text">Result Proccesing Unit</h3> <?php
                        if (isset($_POST['entry'])) {
    if(!empty($_POST)){
        $apcode = $_POST['ApCode'];
        if($ApCode != $apcode){ ?>
            <p style="color: red;"> <?php echo "Warning: Invalid Approval code."; ?> </p>
        <?php
        }
    }
}
?>
                    </div>
                    <div class="baddresult-table-div cpanel-add-result">
                        <form action="" method="post">
                            <table >
                                <tr>
                                    <td class="cpanel-text">ApCode:</td>
                                    <td><input class="cpanel-input" type="text" name="ApCode"></td>
                                </tr>
                            </table>
                            <button class="cpanel-button cpanel-button-save" name="entry" type="submit">Entry</button>
                        </form>
                    </div> 
                </div>
            </section>
        </header>
        <?php include("footer.php"); ?>
    </body>
</html>