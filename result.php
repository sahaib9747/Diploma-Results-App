<html>
    <head>
        <title>রেজাল্ট - বাংলাদেশ কারিগরি শিক্ষা বোর্ড-গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <link rel="icon" href="image/bd.png">
    </head>
    <body class="index-body">
        <!--NavigationBar-->
        <header class="index-main-view">
            <section class="index-row">
                <!-- header -->
                <?php include 'header.php'; ?>
                <!--Result Form-->
                <div class="result-mid-row">
                    <div class="result-heading">
                        <img src="image/bd.png">
                        <h2 class="result-heading-text">Ministry of Education, Government of Bangladesh</h2>
                        <h3 class="result-heading-text">Bangladesh Technical Education Board</h3>
                    </div>
                    <div class="result-line">

                    </div>
                   <div class="result-div-table">
                        <form class="result-form" action="viewresult.php" method="POST">
                            <table class="result-table">
                                <th colspan="2" style="text-align: center;padding-bottom: 10px;">Result Search</th>
                                <tr>
                                    <td class="result-table-data">Exam Type:</td>
                                    <td class="result-table-input">
                                        <select  name="type" required>
                                            <option>--Click Here to Select--</option>
                                            <option value="1">DIPLOMA IN ENGINEERING</option>
                                            <option value="2">DIPLOMA IN AGRICULTURE</option>
                                            <option value="3">DIPLOMA IN TOURISM</option>
                                            <option value="4">DIPLOMA IN FISHERIES</option>
                                            <option value="5">DIPLOMA IN LIVESTOCK</option>
                                            <option value="6">DIPLOMA IN TEXTILE</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="result-table-data">Board Roll:</td>
                                    <td ><input class="result-table-input" type="text" name="studentid" required ></td>
                                </tr>
                                <tr>
                                    <td class="result-table-data">Semester:</td>
                                    <td ><input class="result-table-input" type="text" name="semester" required></td>
                                </tr>
                                <tr>
                                    <td class="result-table-data">Exam Year:</td>
                                    <td ><input class="result-table-input" type="text" name="year" required></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><center><button class="result-button"  type="submit" name="submit">View Result</button></center></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </section>
        </header>
        <?php include("footer.php"); ?>
    </body>
</html>