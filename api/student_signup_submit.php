<?php
    require("../includes/database_connect.php");
    $roll_no = $_POST['roll_no'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $password = sha1($password);
    $gender = $_POST['gender'];
    $year = $_POST['year'];
    $semester = $_POST['semester'];

    $sql = "SELECT * FROM students WHERE roll_no='$roll_no'";
    $result = mysqli_query($connection, $sql);
    if(!$result){
        $response = array("success" => false, "message" => "An error occurred at student signup part of backend.");
        echo json_encode($response);
        return;
    }

    $row_count = mysqli_num_rows($result);
    if($row_count != 0){
        $response = array("success" => false, "message" => "This roll number is already registered.");
        echo json_encode($response);
        return;
    }

    if($semester == 1) {
        $sql = "INSERT INTO students (roll_no, fname, lname, dob, email, pass, gender, year, semester, subject1, subject2, subject3, subject4, subject5)
                VALUES ('$roll_no', '$fname', '$lname', '$dob', '$email', '$password', '$gender', '$year', '$semester', 'AM-I', 'EC', 'EEEE', 'ED', 'WS-I')";
    } elseif($semester == 2) {
        $sql = "INSERT INTO students (roll_no, fname, lname, dob, email, pass, gender, year, semester, subject1, subject2, subject3, subject4)
                VALUES ('$roll_no', '$fname', '$lname', '$dob', '$email', '$password', '$gender', '$year', '$semester', 'AM-II', 'EP', 'EM', 'WS-II')";
    } elseif($semester == 3) {
        $sql = "INSERT INTO students (roll_no, fname, lname, dob, email, pass, gender, year, semester, subject1, subject2, subject3, subject4, subject5)
                VALUES ('$roll_no', '$fname', '$lname', '$dob', '$email', '$password', '$gender', '$year', '$semester', 'ITVC', 'DS', 'COA', 'OOPM', 'DSM')";
    } elseif($semester == 4) {
        $sql = "INSERT INTO students (roll_no, fname, lname, dob, email, pass, gender, year, semester, subject1, subject2, subject3, subject4)
                VALUES ('$roll_no', '$fname', '$lname', '$dob', '$email', '$password', '$gender', '$year', '$semester', 'PSOT', 'AOA', 'RDBMS', 'TAC')";
    } elseif($semester == 5) {
        $sql = "INSERT INTO students (roll_no, fname, lname, dob, email, pass, gender, year, semester, subject1, subject2, subject3)
                VALUES ('$roll_no', '$fname', '$lname', '$dob', '$email', '$password', '$gender', '$year', '$semester', 'SE', 'CN', 'OS')";
    } elseif($semester == 6) {
        $sql = "INSERT INTO students (roll_no, fname, lname, dob, email, pass, gender, year, semester, subject1, subject2, subject3)
                VALUES ('$roll_no', '$fname', '$lname', '$dob', '$email', '$password', '$gender', '$year', '$semester', 'DSIP', 'IS', 'AI')";
    } else {
        $response = array("success" => false, "message" => "An incorrect semester number has been entered. Please try again.");   
    }

    $result = mysqli_query($connection, $sql);
    if(!$result){
        $response = array("success" => false, "message" => "An error occurred at student signup part of backend, while trying to insert student subject data into the database.");
        echo json_encode($response2);
        return;
    }
    
    $response = array("success" => true, "message" => "Student account created successfully.");
    echo json_encode($response);
    //prerequisite for this query to successfully run ---
    //1) student data must be present in student table
    //2) faculty data must be present in faculty table
    //3) form data must be present in form table
    /*$sql__2 = "SELECT * FROM responses WHERE roll_no='$roll_no'";
    $result__2 = mysqli_query($connection, $sql__2);
    if(!$result__2){
        $response = array("success" => false, "message" => "An error occurred at responses part of student signup part of backend.");
        echo json_encode($response);
        return;
    }

    $row_count = mysqli_num_rows($result__2);
    if($row_count != 0){
        $response = array("success" => false, "message" => "This response is already registered in responses table. Please contact database admin.");
        echo json_encode($response);
        return;
    }

    $sql__3 = "SELECT * FROM responses WHERE roll_no='$roll_no'";
    $result__3 = mysqli_query($connection, $sql__3);
    if(!$result__3){
        $response = array("success" => false, "message" => "An error occurred at responses part of student signup part of backend.");
        echo json_encode($response);
        return;
    }

    $row_count = mysqli_num_rows($result__3);
    if($row_count != 0){
        $response = array("success" => false, "message" => "This response is already registered in responses table. Please contact database admin.");
        echo json_encode($response);
        return;
    }

    $sql__4 = "SELECT * FROM responses WHERE roll_no='$roll_no'";
    $result__4 = mysqli_query($connection, $sql__4);
    if(!$result__4){
        $response = array("success" => false, "message" => "An error occurred at responses part of student signup part of backend.");
        echo json_encode($response);
        return;
    }

    $row_count = mysqli_num_rows($result__4);
    if($row_count != 0){
        $response = array("success" => false, "message" => "This response is already registered in responses table. Please contact database admin.");
        echo json_encode($response);
        return;
    }

    $sql__5 = "SELECT * FROM responses WHERE roll_no='$roll_no'";
    $result__5 = mysqli_query($connection, $sql__5);
    if(!$result__5){
        $response = array("success" => false, "message" => "An error occurred at responses part of student signup part of backend.");
        echo json_encode($response);
        return;
    }

    $row_count = mysqli_num_rows($result__5);
    if($row_count != 0){
        $response = array("success" => false, "message" => "This response is already registered in responses table. Please contact database admin.");
        echo json_encode($response);
        return;
    }

    $sql__6 = "SELECT * FROM responses WHERE roll_no='$roll_no'";
    $result__6 = mysqli_query($connection, $sql__6);
    if(!$result__6){
        $response = array("success" => false, "message" => "An error occurred at responses part of student signup part of backend.");
        echo json_encode($response);
        return;
    }

    $row_count = mysqli_num_rows($result__6);
    if($row_count != 0){
        $response = array("success" => false, "message" => "This response is already registered in responses table. Please contact database admin.");
        echo json_encode($response);
        return;
    }
    
    $sql__7 = "SELECT * FROM responses WHERE roll_no='$roll_no'";
    $result__7 = mysqli_query($connection, $sql__7);
    if(!$result__7){
        $response = array("success" => false, "message" => "An error occurred at responses part of student signup part of backend.");
        echo json_encode($response);
        return;
    }

    $row_count = mysqli_num_rows($result__7);
    if($row_count != 0){
        $response = array("success" => false, "message" => "This response is already registered in responses table. Please contact database admin.");
        echo json_encode($response);
        return;
    }*/

    if($semester == 1) {
        $sql__2 = "INSERT INTO responses
                    SET student_no = '$roll_no',
                    faculty_no = (
                    SELECT employee_no
                    FROM faculty
                    WHERE subject1 = 'AM-I' OR subject2 = 'AM-I' OR subject3 = 'AM-I'),
                    subject_no = (
                    SELECT subject_id
                    FROM forms
                    WHERE subject = 'AM-I'),
                    subject_name = 'AM-I',
                    flag = 0";
        $sql__3 = "INSERT INTO responses
                    SET student_no = '$roll_no',
                    faculty_no = (
                    SELECT employee_no
                    FROM faculty
                    WHERE subject1 = 'EC' OR subject2 = 'EC' OR subject3 = 'EC'),
                    subject_no = (
                    SELECT subject_id
                    FROM forms
                    WHERE subject = 'EC'),
                    subject_name = 'EC',
                    flag = 0";
        $sql__4 = "INSERT INTO responses
                    SET student_no = '$roll_no',
                    faculty_no = (
                    SELECT employee_no
                    FROM faculty
                    WHERE subject1 = 'EEEE' OR subject2 = 'EEEE' OR subject3 = 'EEEE'),
                    subject_no = (
                    SELECT subject_id
                    FROM forms
                    WHERE subject = 'EEEE'),
                    subject_name = 'EEEE',
                    flag = 0";
        $sql__5 = "INSERT INTO responses
                    SET student_no = '$roll_no',
                    faculty_no = (
                    SELECT employee_no
                    FROM faculty
                    WHERE subject1 = 'ED' OR subject2 = 'ED' OR subject3 = 'ED'),
                    subject_no = (
                    SELECT subject_id
                    FROM forms
                    WHERE subject = 'ED'),
                    subject_name = 'ED',
                    flag = 0";
        $sql__6 = "INSERT INTO responses
                    SET student_no = '$roll_no',
                    faculty_no = (
                    SELECT employee_no
                    FROM faculty
                    WHERE subject1 = 'WS-I' OR subject2 = 'WS-I' OR subject3 = 'WS-I'),
                    subject_no = (
                    SELECT subject_id
                    FROM forms
                    WHERE subject = 'WS-I'),
                    subject_name = 'WS-I',
                    flag = 0";
    } elseif($semester == 2) {
        $sql__2 = "INSERT INTO responses
                    SET student_no = '$roll_no',
                    faculty_no = (
                    SELECT employee_no
                    FROM faculty
                    WHERE subject1 = 'AM-II' OR subject2 = 'AM-II' OR subject3 = 'AM-II'),
                    subject_no = (
                    SELECT subject_id
                    FROM forms
                    WHERE subject = 'AM-II'),
                    subject_name = 'AM-II',
                    flag = 0";
        $sql__3 = "INSERT INTO responses
                    SET student_no = '$roll_no',
                    faculty_no = (
                    SELECT employee_no
                    FROM faculty
                    WHERE subject1 = 'EP' OR subject2 = 'EP' OR subject3 = 'EP'),
                    subject_no = (
                    SELECT subject_id
                    FROM forms
                    WHERE subject = 'EP'),
                    subject_name = 'EP',
                    flag = 0";
        $sql__4 = "INSERT INTO responses
                    SET student_no = '$roll_no',
                    faculty_no = (
                    SELECT employee_no
                    FROM faculty
                    WHERE subject1 = 'EM' OR subject2 = 'EM' OR subject3 = 'EM'),
                    subject_no = (
                    SELECT subject_id
                    FROM forms
                    WHERE subject = 'EM'),
                    subject_name = 'EM',
                    flag = 0";
        $sql__5 = "INSERT INTO responses
                    SET student_no = '$roll_no',
                    faculty_no = (
                    SELECT employee_no
                    FROM faculty
                    WHERE subject1 = 'WS-II' OR subject2 = 'WS-II' OR subject3 = 'WS-II'),
                    subject_no = (
                    SELECT subject_id
                    FROM forms
                    WHERE subject = 'WS-II'),
                    subject_name = 'WS-II',
                    flag = 0";
            
    } elseif($semester == 3) {
        $sql__2 = "INSERT INTO responses
                    SET student_no = '$roll_no',
                    faculty_no = (
                    SELECT employee_no
                    FROM faculty
                    WHERE subject1 = 'ITVC' OR subject2 = 'ITVC' OR subject3 = 'ITVC'),
                    subject_no = (
                    SELECT subject_id
                    FROM forms
                    WHERE subject = 'ITVC'),
                    subject_name = 'ITVC',
                    flag = 0";
        $sql__3 = "INSERT INTO responses
                    SET student_no = '$roll_no',
                    faculty_no = (
                    SELECT employee_no
                    FROM faculty
                    WHERE subject1 = 'DS' OR subject2 = 'DS' OR subject3 = 'DS'),
                    subject_no = (
                    SELECT subject_id
                    FROM forms
                    WHERE subject = 'DS'),
                    subject_name = 'DS',
                    flag = 0";
        $sql__4 = "INSERT INTO responses
                    SET student_no = '$roll_no',
                    faculty_no = (
                    SELECT employee_no
                    FROM faculty
                    WHERE subject1 = 'COA' OR subject2 = 'COA' OR subject3 = 'COA'),
                    subject_no = (
                    SELECT subject_id
                    FROM forms
                    WHERE subject = 'COA'),
                    subject_name = 'COA',
                    flag = 0";
        $sql__5 = "INSERT INTO responses
                    SET student_no = '$roll_no',
                    faculty_no = (
                    SELECT employee_no
                    FROM faculty
                    WHERE subject1 = 'OOPM' OR subject2 = 'OOPM' OR subject3 = 'OOPM'),
                    subject_no = (
                    SELECT subject_id
                    FROM forms
                    WHERE subject = 'OOPM'),
                    subject_name = 'OOPM',
                    flag = 0";
        $sql__6 = "INSERT INTO responses
                    SET student_no = '$roll_no',
                    faculty_no = (
                    SELECT employee_no
                    FROM faculty
                    WHERE subject1 = 'DSM' OR subject2 = 'DSM' OR subject3 = 'DSM'),
                    subject_no = (
                    SELECT subject_id
                    FROM forms
                    WHERE subject = 'DSM'),
                    subject_name = 'DSM',
                    flag = 0";
        
    } elseif($semester == 4) {
        $sql__2 = "INSERT INTO responses
                    SET student_no = '$roll_no',
                    faculty_no = (
                    SELECT employee_no
                    FROM faculty
                    WHERE subject1 = 'PSOT' OR subject2 = 'PSOT' OR subject3 = 'PSOT'),
                    subject_no = (
                    SELECT subject_id
                    FROM forms
                    WHERE subject = 'PSOT'),
                    subject_name = 'PSOT',
                    flag = 0";
        $sql__3 = "INSERT INTO responses
                    SET student_no = '$roll_no',
                    faculty_no = (
                    SELECT employee_no
                    FROM faculty
                    WHERE subject1 = 'AOA' OR subject2 = 'AOA' OR subject3 = 'AOA'),
                    subject_no = (
                    SELECT subject_id
                    FROM forms
                    WHERE subject = 'AOA'),
                    subject_name = 'AOA',
                    flag = 0";
        $sql__4 = "INSERT INTO responses
                    SET student_no = '$roll_no',
                    faculty_no = (
                    SELECT employee_no
                    FROM faculty
                    WHERE subject1 = 'RDBMS' OR subject2 = 'RDBMS' OR subject3 = 'RDBMS'),
                    subject_no = (
                    SELECT subject_id
                    FROM forms
                    WHERE subject = 'RDBMS'),
                    subject_name = 'RDBMS',
                    flag = 0";
        $sql__5 = "INSERT INTO responses
                    SET student_no = '$roll_no',
                    faculty_no = (
                    SELECT employee_no
                    FROM faculty
                    WHERE subject1 = 'TAC' OR subject2 = 'TAC' OR subject3 = 'TAC'),
                    subject_no = (
                    SELECT subject_id
                    FROM forms
                    WHERE subject = 'TAC'),
                    subject_name = 'TAC',
                    flag = 0";
        
    } elseif($semester == 5) {
        $sql__2 = "INSERT INTO responses
                    SET student_no = '$roll_no',
                    faculty_no = (
                    SELECT employee_no
                    FROM faculty
                    WHERE subject1 = 'SE' OR subject2 = 'SE' OR subject3 = 'SE'),
                    subject_no = (
                    SELECT subject_id
                    FROM forms
                    WHERE subject = 'SE'),
                    subject_name = 'SE',
                    flag = 0";
        $sql__3 = "INSERT INTO responses
                    SET student_no = '$roll_no',
                    faculty_no = (
                    SELECT employee_no
                    FROM faculty
                    WHERE subject1 = 'CN' OR subject2 = 'CN' OR subject3 = 'CN'),
                    subject_no = (
                    SELECT subject_id
                    FROM forms
                    WHERE subject = 'CN'),
                    subject_name = 'CN',
                    flag = 0";
        $sql__4 = "INSERT INTO responses
                    SET student_no = '$roll_no',
                    faculty_no = (
                    SELECT employee_no
                    FROM faculty
                    WHERE subject1 = 'OS' OR subject2 = 'OS' OR subject3 = 'OS'),
                    subject_no = (
                    SELECT subject_id
                    FROM forms
                    WHERE subject = 'OS'),
                    subject_name = 'OS',
                    flag = 0";
        
    } elseif($semester == 6) {
        $sql__2 = "INSERT INTO responses
                    SET student_no = '$roll_no',
                    faculty_no = (
                    SELECT employee_no
                    FROM faculty
                    WHERE subject1 = 'DSIP' OR subject2 = 'DSIP' OR subject3 = 'DSIP'),
                    subject_no = (
                    SELECT subject_id
                    FROM forms
                    WHERE subject = 'DSIP'),
                    subject_name = 'DSIP',
                    flag = 0";
        $sql__3 = "INSERT INTO responses
                    SET student_no = '$roll_no',
                    faculty_no = (
                    SELECT employee_no
                    FROM faculty
                    WHERE subject1 = 'IS' OR subject2 = 'IS' OR subject3 = 'IS'),
                    subject_no = (
                    SELECT subject_id
                    FROM forms
                    WHERE subject = 'IS'),
                    subject_name = 'IS',
                    flag = 0";
         $sql__4 = "INSERT INTO responses
                    SET student_no = '$roll_no',
                    faculty_no = (
                    SELECT employee_no
                    FROM faculty
                    WHERE subject1 = 'AI' OR subject2 = 'AI' OR subject3 = 'AI'),
                    subject_no = (
                    SELECT subject_id
                    FROM forms
                    WHERE subject = 'AI'),
                    subject_name = 'AI',
                    flag = 0";
                    
    } else {
        $response = array("success" => false, "message" => "An incorrect semester number has been entered. Please try again.");   
    }

    if($sql__2 != NULL){
        $result__8 = mysqli_query($connection, $sql__2);
        if(!$result__8){
            $response__2 = array("success" => false, "message" => "An error occurred at student signup part of backend, while trying to insert student responses data into the database.");
            echo json_encode($response__2);
            return;
        } 
    }
    if($sql__3 != NULL){
        $result__9 = mysqli_query($connection, $sql__3);
        if (!$result__9) {
            $response__2 = array("success" => false, "message" => "An error occurred at student signup part of backend, while trying to insert student responses data into the database.");
            echo json_encode($response__2);
            return;
        }
    }
    if($sql__4 != NULL){
        $result__10 = mysqli_query($connection, $sql__4);
        if (!$result__10) {
            $response__2 = array("success" => false, "message" => "An error occurred at student signup part of backend, while trying to insert student responses data into the database.");
            echo json_encode($response__2);
            return;
        }
    }
    if($sql__5 != NULL){
        $result__11 = mysqli_query($connection, $sql__5);
        if (!$result__11) {
            $response__2 = array("success" => false, "message" => "An error occurred at student signup part of backend, while trying to insert student responses data into the database.");
            echo json_encode($response__2);
            return;
        }
    }
    if($sql__6 != NULL){
        $result__12 = mysqli_query($connection, $sql__6);
        if (!$result__12) {
            $response__2 = array("success" => false, "message" => "An error occurred at student signup part of backend, while trying to insert student responses data into the database.");
            echo json_encode($response__2);
            return;
        }
    }
    $response__2 = array("success" => true, "message" => "Responses table updated successfully.");
    echo json_encode($response);

    mysqli_close($connection);
?>