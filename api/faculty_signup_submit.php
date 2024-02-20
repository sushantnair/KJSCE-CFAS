<?php
    require("../includes/database_connect.php");
    $employee_no = $_POST['employee_no'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $facultypword = $_POST['facultypword'];
    $facultypword = sha1($facultypword);
    $gender = $_POST['gender'];

    $qualification = $_POST['qualification'];
    $degreename = $_POST['degreename'];
    $experience = $_POST['experience'];
    $subject1 = $_POST['subject1'];
    $subject2 = $_POST['subject2'];
    $subject3 = $_POST['subject3'];
    if($_POST['subject1'] == 'AM-I'){
        $subject1_id = 1;
    } elseif ($_POST['subject1'] == 'EC'){
        $subject1_id = 2;
    } elseif ($_POST['subject1'] == 'EEEE'){
        $subject1_id = 3;
    } elseif ($_POST['subject1'] == 'ED'){
        $subject1_id = 4;
    } elseif ($_POST['subject1'] == 'WS-I'){
        $subject1_id = 5;
    } elseif ($_POST['subject1'] == 'AM-II'){
        $subject1_id = 6;
    } elseif ($_POST['subject1'] == 'EP'){
        $subject1_id = 7;
    } elseif ($_POST['subject1'] == 'EM'){
        $subject1_id = 8;
    } elseif ($_POST['subject1'] == 'WS-II'){
        $subject1_id = 9;
    } elseif ($_POST['subject1'] == 'ITVC'){
        $subject1_id = 10;
    } elseif ($_POST['subject1'] == 'DS'){
        $subject1_id = 11;
    } elseif ($_POST['subject1'] == 'COA'){
        $subject1_id = 12;
    } elseif ($_POST['subject1'] == 'OOPM'){
        $subject1_id = 13;
    } elseif ($_POST['subject1'] == 'DSM'){
        $subject1_id = 14;
    } elseif ($_POST['subject1'] == 'PSOT'){
        $subject1_id = 15;
    } elseif ($_POST['subject1'] == 'AOA'){
        $subject1_id = 16;
    } elseif ($_POST['subject1'] == 'RDBMS'){
        $subject1_id = 17;
    } elseif ($_POST['subject1'] == 'TAC'){
        $subject1_id = 18;
    } elseif ($_POST['subject1'] == 'SE'){
        $subject1_id = 19;
    } elseif ($_POST['subject1'] == 'CN'){
        $subject1_id = 20;
    } elseif ($_POST['subject1'] == 'OS'){
        $subject1_id = 21;
    } elseif ($_POST['subject1'] == 'DSIP'){
        $subject1_id = 22;
    } elseif ($_POST['subject1'] == 'IS'){
        $subject1_id = 23;
    } elseif ($_POST['subject1'] == 'AI'){
        $subject1_id = 24;
    } 
    if($_POST['subject2'] == 'AM-I'){
        $subject2_id = 1;
    } elseif ($_POST['subject2'] == 'EC'){
        $subject2_id = 2;
    } elseif ($_POST['subject2'] == 'EEEE'){
        $subject2_id = 3;
    } elseif ($_POST['subject2'] == 'ED'){
        $subject2_id = 4;
    } elseif ($_POST['subject2'] == 'WS-I'){
        $subject2_id = 5;
    } elseif ($_POST['subject2'] == 'AM-II'){
        $subject2_id = 6;
    } elseif ($_POST['subject2'] == 'EP'){
        $subject2_id = 7;
    } elseif ($_POST['subject2'] == 'EM'){
        $subject2_id = 8;
    } elseif ($_POST['subject2'] == 'WS-II'){
        $subject2_id = 9;
    } elseif ($_POST['subject2'] == 'ITVC'){
        $subject2_id = 10;
    } elseif ($_POST['subject2'] == 'DS'){
        $subject2_id = 11;
    } elseif ($_POST['subject2'] == 'COA'){
        $subject2_id = 12;
    } elseif ($_POST['subject2'] == 'OOPM'){
        $subject2_id = 13;
    } elseif ($_POST['subject2'] == 'DSM'){
        $subject2_id = 14;
    } elseif ($_POST['subject2'] == 'PSOT'){
        $subject2_id = 15;
    } elseif ($_POST['subject2'] == 'AOA'){
        $subject2_id = 16;
    } elseif ($_POST['subject2'] == 'RDBMS'){
        $subject2_id = 17;
    } elseif ($_POST['subject2'] == 'TAC'){
        $subject2_id = 18;
    } elseif ($_POST['subject2'] == 'SE'){
        $subject2_id = 19;
    } elseif ($_POST['subject2'] == 'CN'){
        $subject2_id = 20;
    } elseif ($_POST['subject2'] == 'OS'){
        $subject2_id = 21;
    } elseif ($_POST['subject2'] == 'DSIP'){
        $subject2_id = 22;
    } elseif ($_POST['subject2'] == 'IS'){
        $subject2_id = 23;
    } elseif ($_POST['subject2'] == 'AI'){
        $subject2_id = 24;
    } 
    if($_POST['subject3'] == 'AM-I'){
        $subject3_id = 1;
    } elseif ($_POST['subject3'] == 'EC'){
        $subject3_id = 2;
    } elseif ($_POST['subject3'] == 'EEEE'){
        $subject3_id = 3;
    } elseif ($_POST['subject3'] == 'ED'){
        $subject3_id = 4;
    } elseif ($_POST['subject3'] == 'WS-I'){
        $subject3_id = 5;
    } elseif ($_POST['subject3'] == 'AM-II'){
        $subject3_id = 6;
    } elseif ($_POST['subject3'] == 'EP'){
        $subject3_id = 7;
    } elseif ($_POST['subject3'] == 'EM'){
        $subject3_id = 8;
    } elseif ($_POST['subject3'] == 'WS-II'){
        $subject3_id = 9;
    } elseif ($_POST['subject3'] == 'ITVC'){
        $subject3_id = 10;
    } elseif ($_POST['subject3'] == 'DS'){
        $subject3_id = 11;
    } elseif ($_POST['subject3'] == 'COA'){
        $subject3_id = 12;
    } elseif ($_POST['subject3'] == 'OOPM'){
        $subject3_id = 13;
    } elseif ($_POST['subject3'] == 'DSM'){
        $subject3_id = 14;
    } elseif ($_POST['subject3'] == 'PSOT'){
        $subject3_id = 15;
    } elseif ($_POST['subject3'] == 'AOA'){
        $subject3_id = 16;
    } elseif ($_POST['subject3'] == 'RDBMS'){
        $subject3_id = 17;
    } elseif ($_POST['subject3'] == 'TAC'){
        $subject3_id = 18;
    } elseif ($_POST['subject3'] == 'SE'){
        $subject3_id = 19;
    } elseif ($_POST['subject3'] == 'CN'){
        $subject3_id = 20;
    } elseif ($_POST['subject3'] == 'OS'){
        $subject3_id = 21;
    } elseif ($_POST['subject3'] == 'DSIP'){
        $subject3_id = 22;
    } elseif ($_POST['subject3'] == 'IS'){
        $subject3_id = 23;
    } elseif ($_POST['subject3'] == 'AI'){
        $subject3_id = 24;
    } 

    $sql = "SELECT * FROM faculty WHERE employee_no='$employee_no'";
    $result = mysqli_query($connection, $sql);
    if(!$result){
        $response = array("success" => false, "message" => "An error occurred at faculty signup part of backend.");
        echo json_encode($response);
        return;
    }

    $row_count = mysqli_num_rows($result);
    if($row_count != 0){
        $response = array("success" => false, "message" => "This employee number is already registered.");
        echo json_encode($response);
        return;
    }

    $sql = "INSERT INTO faculty (employee_no, fname, lname, dob, email, pass, gender, qualification, field, experience, subject1, subject2, subject3, subject1_id, subject2_id, subject3_id) 
            VALUES ('$employee_no', '$fname', '$lname', '$dob', '$email', '$facultypword', '$gender', '$qualification', '$degreename', '$experience', '$subject1', '$subject2', '$subject3', '$subject1_id', '$subject2_id', '$subject3_id')";
    $result = mysqli_query($connection, $sql);
    if(!$result){
        $response = array("success" => false, "message" => "An error occurred at faculty signup part of backend, while trying to insert faculty data into the database.");
        echo json_encode($response);
        return;
    }
    
    $response = array("success" => true, "message" => "Faculty account created successfully.");
    echo json_encode($response);
    mysqli_close($connection);
    //CONSTRAINT: one subject may be taught by ONLY ONE faculty member.
?>