<?php
$db_host = "localhost";
$db_user = "id12308139_diplomaresults";
$db_pass = "01854487";
$db_name = "id12308139_bteb";

$connect = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
$ExistRoll = "0";
$ExistExamYear = "1";
$roll = "1";
$examyear = "0";

if(isset($_POST['save'])){

    if (!empty($_POST)) {
        $name = $_POST['name'];
        $roll = $_POST['roll'];
        $reg = $_POST['reg'];
        $examyear = $_POST['examyear'];
        $result = $_POST['result'];
        $cgpa = $_POST['cgpa'];
        $referred = $_POST['referred'];
        $data_fetch = "SELECT ROLL,EXAM_YEAR FROM result WHERE (ROLL = '$roll' and EXAM_YEAR = '$examyear')";
        $fetch_query = mysqli_query($connect,$data_fetch);
        while ($data = mysqli_fetch_array($fetch_query)) {
            $ExistRoll = $data['ROLL'];
            $ExistExamYear = $data['EXAM_YEAR'];
        }
        if($ExistRoll != $roll and $ExistExamYear != $examyear){
            if($referred == ""){
                $referred = "none";
            }
            $insert = "INSERT INTO result(NAME,ROLL,REG,EXAM_YEAR,RESULT,CGPA,REFERRED) VALUES('$name','$roll','$reg','$examyear','$result','$cgpa','$referred')";
            if(mysqli_query($connect,$insert)){
                header("Location: aaddresult.php");
            }
        }    
    }
}

?>



<html>
    <head>
        <title>এডমিন - বাংলাদেশ কারিগরি শিক্ষা বোর্ড-গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</title>
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
                        <?php
                            if($ExistRoll == $roll and $ExistExamYear == $examyear){ ?>
                                  <p style="color: red;"> <?php echo "Result Exits"; ?> </p>
                            <?php } ?>
                    </div>
                    <div class="cpanel-add-result">
                        <form action="" method="post">
                            <table>
                                <tr>
                                    <td class="cpanel-text">Name:</td>
                                    <td><input class="cpanel-input" type="text" name="name"></td>
                                </tr>
                                <tr>
                                    <td  class="cpanel-text">Roll:</td>
                                    <td><input class="cpanel-input" type="text" name="roll"></td>
                                </tr>
                                <tr>
                                    <td  class="cpanel-text">Reg:</td>
                                    <td><input class="cpanel-input" type="text" name="reg"></td>
                                </tr>
                                <tr>
                                    <td  class="cpanel-text">Exam Year:</td>
                                    <td><input class="cpanel-input" type="text" name="examyear"></td>
                                </tr>
                                <tr>
                                    <td  class="cpanel-text">Result:</td>
                                    <td ><input class="cpanel-input" type="text" name="result"></td>
                                </tr>
                                <tr>
                                    <td  class="cpanel-text">CGPA:</td>
                                    <td><input class="cpanel-input" type="text" name="cgpa"></td>
                                </tr>
                                <tr>
                                    <td  class="cpanel-text">Referred:</td>
                                    <td><input class="cpanel-input" type="text" name="referred"></td>
                                </tr>
                            </table>
                            <button class="cpanel-button cpanel-button-save" name="save" type="submit">Save</button>
                            <button class="cpanel-button cpanel-button-refresh">
                           <a href="cpanel.php"> Refresh</a></button>
                        </form>
                    </div> 
                </div>
            </section>
        </header>
        <?php include("footer.php"); ?>
    </body>
</html>