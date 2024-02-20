<?php
    session_start();
    require("../includes/database_connect.php");
    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : NULL;
    $form_id = $_GET['form_id'];
    $dashboard_link = $_SESSION['link'];
    $q1_response = $_POST['q1_response'];
    $q2_response = $_POST['q2_response'];
    $q3_response = $_POST['q3_response'];
    $q4_response = $_POST['q4_response'];
    $q5_response = $_POST['q5_response'];
    $q6_response = $_POST['q6_response'];
    $q7_response = $_POST['q7_response'];
    $q8_response = $_POST['q8_response'];
    $q9_response = $_POST['q9_response'];
    $q10_response = $_POST['q10_response'];
    $q11_response = $_POST['q11_response'];
    $q12_response = $_POST['q12_response'];
    $q13_response = $_POST['q13_response'];
    $q14_response = $_POST['q14_response'];
    $q15_response = $_POST['q15_response'];
    $q16_response = $_POST['q16_response'];
    $q17_response = $_POST['q17_response'];
    $q18_response = $_POST['q18_response'];
    $q19_response = $_POST['q19_response'];
    $q20_response = $_POST['q20_response'];
    $sql_1 = "UPDATE responses
              SET q1 = '$q1_response',
              q2 = '$q2_response',
              q3 = '$q3_response',
              q4 = '$q4_response',
              q5 = '$q5_response',
              q6 = '$q6_response',
              q7 = '$q7_response',
              q8 = '$q8_response',
              q9 = '$q9_response',
              q10 = '$q10_response',
              q11 = '$q11_response',
              q12 = '$q12_response',
              q13 = '$q13_response',
              q14 = '$q14_response',
              q15 = '$q15_response',
              q16 = '$q16_response',
              q17 = '$q17_response',
              q18 = '$q18_response',
              q19 = '$q19_response',
              q20 = '$q20_response',
              flag = 1
              WHERE student_no = $user_id  AND subject_no = $form_id";
    $result_1 = mysqli_query($connection, $sql_1);
    if (!$result_1) {
        echo "Something went wrong with the connection!";
        return;
    }
    $response = array("success" => true, "message" => "Responses storage successful.");
    echo json_encode($response);
?>
<html>
    <body>
        <p>
            <a href = "http://127.0.0.1/KJSCE_CFAS/<?= $dashboard_link ?>.php"> Click here </a> to go back to your dashboard. Do not press the back button to go to your dashboard.
        </p>
    </body>
</html>
