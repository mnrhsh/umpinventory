<?php
session_start();

if (isset($_POST['submit'])) {

    include_once("C:/xampp/htdocs/questionnaire/includes/dbh.inc.php");


    $answers = array();


    $uid = $_SESSION['u_id'];

    // Fill the answers array with answers

    $answers[1] = $_POST['stress1'];
    $answers[2] = $_POST['anxiety1'];
    $answers[3] = $_POST['depression1'];
    $answers[4] = $_POST['anxiety2'];
    $answers[5] = $_POST['depression2'];
    $answers[6] = $_POST['stress2'];
    $answers[7] = $_POST['anxiety3'];
    $answers[8] = $_POST['stress3'];
    $answers[9] = $_POST['anxiety4'];
    $answers[10] = $_POST['depression3'];
    $answers[11] = $_POST['stress4'];
    $answers[12] = $_POST['stress5'];
    $answers[13] = $_POST['depression4'];
    $answers[14] = $_POST['stress6'];
    $answers[15] = $_POST['anxiety5'];
    $answers[16] = $_POST['depression5'];
    $answers[17] = $_POST['depression6'];
    $answers[18] = $_POST['stress7'];
    $answers[19] = $_POST['anxiety6'];
    $answers[20] = $_POST['anxiety7'];
    $answers[21] = $_POST['depression7'];


    // loop through the answers array

    for ($i=1;$i<22;$i++) {

        // $i contains the ques_no (1,2,3,4,5,....)
        // $answers[$i] contains the answer value

        $answer = $answers[$i];


        // Let's control the user input

        switch ($answer){
            case 0:
            case 1:
            case 2:
            case 3:
                // OK
                break;
            default:
                // This is abnormal, we might face a hacker, lets reset the answer to nothing.
                $answer = '';
        }

        // all done, ready to insert

        $sql = "INSERT INTO record (user_id, question_no, answer_value)
                VALUES ('$uid', '$i', '$answer');";
mysqli_query($conn, $sql);



    }


    exit ();
}
else {
    header("Location: ../index.php");
    exit ();
}
?>
