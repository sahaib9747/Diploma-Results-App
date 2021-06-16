<?php
error_reporting(0);
if (isset($_POST['submit'])) {
    $id = $_POST['studentid']; //studentid
    $sem = $_POST['semester']; //semester
    $year = $_POST['year']; //exam year
    $type = $_POST['type'];
    $fileroll = "";
    $cgpa = "";
    $lines = 0;
    if ($type == "1") {
        $etype = "ENG";
        $FileName = "file/$etype$sem$year.txt";
        $file = fopen($FileName,"r");
    }
    elseif ($type == "2") {
        $etype = "AGR";
        $FileName = "file/$etype$sem$year.txt";
        $file = fopen($FileName,"r");
    }
    elseif ($type == "3") {
        $etype = "TOU";
        $FileName = "file/$etype$sem$year.txt";
        $file = fopen($FileName,"r");
    }
    elseif ($type == "4") {
        $etype = "FIS";
        $FileName = "file/$etype$sem$year.txt";
        $file = fopen($FileName,"r");
    }
    elseif ($type == "5") {
        $etype = "LIV";
        $FileName = "file/$etype$sem$year.txt";
        $file = fopen($FileName,"r");
    }
    elseif ($type == "6") {
        $etype = "TEX";
        $FileName = "file/$etype$sem$year.txt";
        $file = fopen($FileName,"r");
    }
    if (!empty($id) && !empty($sem) && !empty($year) && $file == true)
    {
        while(!feof($file)) //condition is while not end of file.
        {
            $content = fgets($file); //read line by line
            $fileroll = "";
            $cgpa = ""; 
            if ( ctype_alpha($content[0]) == false && intval( $content[0]) == false  ) //if value is not alphabet and not int value.
            {
                    $content = ltrim($content, $content[0]);
            }
            for ($i=0; $i < strlen($content); $i++)  //looping until content over
            {
                if($i <= 5) 
                {
                    
                    $fileroll .= $content[$i];

                }
                if($id == $fileroll)
                {
                    if ( strlen($content) == 14 && ( $content[$i] == "("  ||  $content[$i] == ")" )  )
                    {
                        $cgpa = $cgpa;
                    }
                    else if($i > 6 )
                    {
                        $cgpa .= $content[$i];
                    }
                    if ($i == (strlen($content) - 1 ))  //for multiple line result
                    {
                        $cgpa = ltrim($cgpa," ");
                        if ( ($cgpa[0] == "{") && ($content[-2] != "}") )
                        {
                            $arrayfile = file($FileName);
                            
                            while (!feof($file))
                            {
                                $lines += 1;
                                $NewContent = $arrayfile[$lines];
                                for ($n=0; $n < strlen($NewContent) ; $n++) 
                                { 
                                    $cgpa .= $NewContent[$n];
                                }
                                if ($cgpa[-2] == "}")
                                {
                                    break;
                                }
                            }   
                        }
                    }
                }
            }
            $lines++;
            if ($id == $fileroll)
            {
                break;
            }
        }   
    }
}
?>
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

                    <div class="viewresult-table">
                        <?php if (isset($_POST['submit']))
                        {
                            if (empty($id) || empty($sem) || empty($year)) { ?>
                                    <table>
                                        <tr>
                                            <td colspan="2" ><?php echo "Invalid Infromations";  ?>
                                            </td>
                                        </tr>
                                    </table>   
                            <?php } else if ($id == $fileroll)
                            { ?>
                                <table>
                                    <th colspan="2">Result Publication</th>
                                    <tr>
                                        <td>Roll:</td>
                                        <td><b><?php echo "$fileroll"."<br>"; ?></b></td>
                                    </tr>                                
                                    <tr>
                                        <td>Semester:</td>
                                        <td><b><?php echo "$sem"."<br>";?></b></td>
                                    </tr>
                                    <tr>
                                        <td>Exam Year:</td>
                                        <td><b><?php echo "$year"."<br>";?></b></td>
                                    </tr> 
                                    <tr>
                                        <td>Result:</td>
                                        <td><b><?php echo "$cgpa"."<br>";?></b></td>
                                    </tr>                              
                                </table>
                            <?php } else{ ?>
                                <table>
                                    <tr>
                                        <td colspan="2" ><?php echo "Sorry! Your Result is Not Found.";  ?>
                                        </td>
                                    </tr>
                                </table> 
                            <?php } ?>
                        <?php }  ?>
                    </div>
                    <div class="viewresult-btn">
                        <center>
                            <button class="viewresult-button">
                                <a class="viewresult-button" href="result.php">Search Again</a>
                            </button>
                            <button class="viewresult-button">
                                <a class="viewresult-button" href="#" onClick="print()">Print</a>
                            </button>
                        </center>                    
                    </div>
                </div>
            </section>
        </header>
        <?php include("footer.php"); ?>
    </body>
</html>