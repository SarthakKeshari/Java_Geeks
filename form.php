<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
    $studentname = $_POST['studentname'];
    $ans1 = addslashes($_POST['ans1']);
    $ans2 = addslashes($_POST['ans2']);
    $ans3 = addslashes($_POST['ans3']);
    $ans4 = addslashes($_POST['ans4']);
    $ans5 = addslashes($_POST['ans5']);
    


    // $host = "localhost";
    // $dbUsername = "root";
    // $dbPassword = "";
    // $dbname = "javageeks";

    $host = "remotemysql.com";
    $dbUsername = "qoLLIPn21m";
    $dbPassword = "PXCdSn6Gjf";
    $dbname = "qoLLIPn21m";

        //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error()) {
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } 
    else
    {
        $query = "INSERT Into answers (studentname,answer1,answer2,answer3,answer4,answer5) values('$studentname','$ans1','$ans2','$ans3','$ans4','$ans5')";
        $res=mysqli_query($conn,$query);
        if($res)
        {
            header("Location: thanks.php");
        }
        else
        {
            echo "OOPS!!!!!";
            echo mysqli_error($conn);
        }
    }
}
?>