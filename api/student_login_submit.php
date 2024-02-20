<?php
    session_start();
    require("../includes/database_connect.php");
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $password = sha1($password);

    $sql = "SELECT * FROM students WHERE fname = '$fname' AND lname = '$lname' AND email = '$email'";
    $result = mysqli_query($connection, $sql);
    if(!$result){
        $response = array("success" => false, "message" => "An error occurred at student login part of backend.");
        echo json_encode($response);
        return;
    }

    $row_count = mysqli_num_rows($result);
    if($row_count == 0){
        $response = array("success" => false, "message" => "Login unsuccessful. Please enter correct details or create a new account. $fname, $lname, $email, $password");
        echo json_encode($response);
        return;
    }

    $row = mysqli_fetch_assoc($result);
    $_SESSION['user_id'] = $row['roll_no'];
    $_SESSION['fname'] = $row['fname'];
    $_SESSION['lname'] = $row['lname'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['pass'] = $row['pass'];
    $_SESSION['dob'] = $row['dob'];
    $_SESSION['gender'] = $row['gender'];
    $_SESSION['year'] = $row['year'];
    $_SESSION['semester'] = $row['semester'];

    $_SESSION['link'] = 'Student_Dashboard_KJSCE_CFAS';

    $response = array("success" => true, "message" => "Login successful.");
    echo json_encode($response);
    mysqli_close($connection);
?>