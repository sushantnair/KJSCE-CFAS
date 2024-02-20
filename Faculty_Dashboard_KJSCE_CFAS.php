<?php
    session_start();
    require "includes/database_connect.php";
    if (!isset($_SESSION["user_id"])) {
        header("location: Home_KJSCE_CFAS.php");
        die();
    }
    $user_id = $_SESSION['user_id'];

    $sql = "SELECT * 
            FROM faculty 
            WHERE employee_no = $user_id";
    $result_1 = mysqli_query($connection, $sql);
    if (!$result_1) {
        echo "There is some problem in connection.";
        return;
    }
    $user = mysqli_fetch_assoc($result_1);
    if (!$user) {
        echo "There is a problem in fetch assoc.";
        return;
    }
    $subject1 = $user['subject1'];
    $subject2 = $user['subject2'];
    $subject3 = $user['subject3'];
    $subject1_id = $user['subject1_id'];
    $subject2_id = $user['subject2_id'];
    $subject3_id = $user['subject3_id'];
    if($subject1_id != NULL || $subject1_id != ""){
        $display_q1 = 'block';
        $sql_teaching_s1 = "SELECT *
                            FROM responses
                            WHERE faculty_no = $user_id AND subject_no = $subject1_id";
        $result_teaching_s1 = mysqli_query($connection, $sql_teaching_s1);
        if(!$result_teaching_s1){
            echo "There was an error in fetching student responses for subject 1.";
            return;
        }
        $forms_teaching_s1 = mysqli_fetch_all($result_teaching_s1, MYSQLI_ASSOC);
    } else {
        $display_q1 = 'none';
    }
    if($subject2_id != NULL || $subject2_id != ""){
        $display_q2 = 'block';
        $sql_teaching_s2 = "SELECT *
                            FROM responses
                            WHERE faculty_no = $user_id AND subject_no = $subject2_id";
        $result_teaching_s2 = mysqli_query($connection, $sql_teaching_s2);
        if(!$result_teaching_s2){
            echo "There was an error in fetching student responses for subject 2.";
            return;
        }
        $forms_teaching_s2 = mysqli_fetch_all($result_teaching_s2, MYSQLI_ASSOC);
    } else {
        $display_q2 = 'none';
    }
    if($subject3_id != NULL || $subject3_id != ""){
        $display_q3 = 'block';
        $sql_teaching_s3 = "SELECT *
                            FROM responses
                            WHERE faculty_no = $user_id AND subject_no = $subject3_id";
        $result_teaching_s3 = mysqli_query($connection, $sql_teaching_s3);
        if(!$result_teaching_s3){
            echo "There was an error in fetching student responses for subject 3.";
            return;
        }
        $forms_teaching_s3 = mysqli_fetch_all($result_teaching_s3, MYSQLI_ASSOC);
    } else {
        $display_q3 = 'none';
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name = "viewport" content = "width = device-width, initial-scale = 1">
        <?php
            include "includes/head_links.php";
        ?>
        <title>Faculty | KJSCE CFAS</title>
    </head>
    <body>
        <?php
            include "includes/header.php";
        ?>
        <div class = "page-container container bg-img">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb" style = "background-color:white">
                    <li class="breadcrumb-item breadcrumb-item-styling" aria-current = "page"><a href="Home_KJSCE_CFAS.php">Home</a></li>
                    <li class="breadcrumb-item breadcrumb-item-styling active" aria-current = "page">Faculty Dashboard</li>
                </ol>
            </nav>
            <div class = "my-profile profile-container" style="margin-top:50px">
                <h1>My Profile</h1>
                <div class = "row">
                    <div class = "col-md-3 profile-img-container">
                        <i class = "fas fa-user profile-img"></i>
                    </div>
                    <div class = "col-md-9">
                        <div class = "row no-gutters justify-content-between align-items-end">
                            <div class = "profile">
                                <div class = "name">Name: <?= $user['fname'] ?>&nbsp;&nbsp;&nbsp;&nbsp;<?= $user['lname'] ?></div>
                                <div class = "email">Email: <?= $user['email'] ?></div>
                                <div class = "eno">Employee No.: <?= $user['employee_no'] ?></div>
                                <div class = "course">Teaching Courses: 
                                    <?php 
                                        if($user['subject1'] != 'NULL'){
                                            echo $user['subject1'];
                                            echo " ";
                                        }
                                        if($user['subject2'] != 'NULL'){
                                            echo $user['subject2'];
                                            echo " ";
                                        }
                                        if($user['subject3'] != 'NULL'){
                                            echo $user['subject3'];
                                            echo " ";
                                        }
                                    ?>
                                    
                                </div>
                                &nbsp;
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class = "form-module" style="margin:50px">
                <h2 class="form-module-title">View Responses</h2>
                <div class="panel-group" id="accordion">
                    <?php
                        if($user['subject1_id'] != NULL || $user['subject1_id'] != ""){
                    ?>
                    <div class="panel panel-default panel-styling-custom" style="display:<?=$display_q1?>">
                        <?php
                            $sa = $a = $pa = $d = $psa = $p_a = $ppa = $pd = 0;
                            if(count($forms_teaching_s1) > 0){
                                foreach($forms_teaching_s1 as $teaching_s1){
                                    if($teaching_s1['q1'] == 'strongly agree'){
                                        $sa++;
                                    } elseif ($teaching_s1['q1'] == 'agree'){
                                        $a++;
                                    } elseif ($teaching_s1['q1'] == 'partially agree'){
                                        $pa++;
                                    } elseif ($teaching_s1['q1'] == 'disagree'){
                                        $d++;
                                    } else{
                                        //do nothing
                                    }
                                    if($teaching_s1['q2'] == 'strongly agree'){
                                        $sa++;
                                    } elseif ($teaching_s1['q2'] == 'agree'){
                                        $a++;
                                    } elseif ($teaching_s1['q2'] == 'partially agree'){
                                        $pa++;
                                    } elseif ($teaching_s1['q2'] == 'disagree'){
                                        $d++;
                                    } else{
                                        //do nothing
                                    }
                                    if($teaching_s1['q3'] == 'strongly agree'){
                                        $sa++;
                                    } elseif ($teaching_s1['q3'] == 'agree'){
                                        $a++;
                                    } elseif ($teaching_s1['q3'] == 'partially agree'){
                                        $pa++;
                                    } elseif ($teaching_s1['q3'] == 'disagree'){
                                        $d++;
                                    } else{
                                        //do nothing
                                    }
                                    if($teaching_s1['q4'] == 'strongly agree'){
                                        $sa++;
                                    } elseif ($teaching_s1['q4'] == 'agree'){
                                        $a++;
                                    } elseif ($teaching_s1['q4'] == 'partially agree'){
                                        $pa++;
                                    } elseif ($teaching_s1['q4'] == 'disagree'){
                                        $d++;
                                    } else{
                                        //do nothing
                                    }
                                    if($teaching_s1['q5'] == 'strongly agree'){
                                        $sa++;
                                    } elseif ($teaching_s1['q5'] == 'agree'){
                                        $a++;
                                    } elseif ($teaching_s1['q5'] == 'partially agree'){
                                        $pa++;
                                    } elseif ($teaching_s1['q5'] == 'disagree'){
                                        $d++;
                                    } else{
                                        //do nothing
                                    }
                                    if($teaching_s1['q6'] == 'strongly agree'){
                                        $sa++;
                                    } elseif ($teaching_s1['q6'] == 'agree'){
                                        $a++;
                                    } elseif ($teaching_s1['q6'] == 'partially agree'){
                                        $pa++;
                                    } elseif ($teaching_s1['q6'] == 'disagree'){
                                        $d++;
                                    } else{
                                        //do nothing
                                    }
                                    if($teaching_s1['q7'] == 'strongly agree'){
                                        $sa++;
                                    } elseif ($teaching_s1['q7'] == 'agree'){
                                        $a++;
                                    } elseif ($teaching_s1['q7'] == 'partially agree'){
                                        $pa++;
                                    } elseif ($teaching_s1['q7'] == 'disagree'){
                                        $d++;
                                    } else{
                                        //do nothing
                                    }
                                    if($teaching_s1['q8'] == 'strongly agree'){
                                        $sa++;
                                    } elseif ($teaching_s1['q8'] == 'agree'){
                                        $a++;
                                    } elseif ($teaching_s1['q8'] == 'partially agree'){
                                        $pa++;
                                    } elseif ($teaching_s1['q8'] == 'disagree'){
                                        $d++;
                                    } else{
                                        //do nothing
                                    }
                                    if($teaching_s1['q9'] == 'strongly agree'){
                                        $sa++;
                                    } elseif ($teaching_s1['q9'] == 'agree'){
                                        $a++;
                                    } elseif ($teaching_s1['q9'] == 'partially agree'){
                                        $pa++;
                                    } elseif ($teaching_s1['q9'] == 'disagree'){
                                        $d++;
                                    } else{
                                        //do nothing
                                    }
                                    if($teaching_s1['q10'] == 'strongly agree'){
                                        $sa++;
                                    } elseif ($teaching_s1['q10'] == 'agree'){
                                        $a++;
                                    } elseif ($teaching_s1['q10'] == 'partially agree'){
                                        $pa++;
                                    } elseif ($teaching_s1['q10'] == 'disagree'){
                                        $d++;
                                    } else{
                                        //do nothing
                                    }
                                    if($teaching_s1['q11'] == 'strongly agree'){
                                        $sa++;
                                    } elseif ($teaching_s1['q11'] == 'agree'){
                                        $a++;
                                    } elseif ($teaching_s1['q11'] == 'partially agree'){
                                        $pa++;
                                    } elseif ($teaching_s1['q11'] == 'disagree'){
                                        $d++;
                                    } else{
                                        //do nothing
                                    }
                                    if($teaching_s1['q12'] == 'strongly agree'){
                                        $sa++;
                                    } elseif ($teaching_s1['q12'] == 'agree'){
                                        $a++;
                                    } elseif ($teaching_s1['q12'] == 'partially agree'){
                                        $pa++;
                                    } elseif ($teaching_s1['q12'] == 'disagree'){
                                        $d++;
                                    } else{
                                        //do nothing
                                    }
                                    if($teaching_s1['q13'] == 'strongly agree'){
                                        $sa++;
                                    } elseif ($teaching_s1['q13'] == 'agree'){
                                        $a++;
                                    } elseif ($teaching_s1['q13'] == 'partially agree'){
                                        $pa++;
                                    } elseif ($teaching_s1['q13'] == 'disagree'){
                                        $d++;
                                    } else{
                                        //do nothing
                                    }
                                    if($teaching_s1['q14'] == 'strongly agree'){
                                        $sa++;
                                    } elseif ($teaching_s1['q14'] == 'agree'){
                                        $a++;
                                    } elseif ($teaching_s1['q14'] == 'partially agree'){
                                        $pa++;
                                    } elseif ($teaching_s1['q14'] == 'disagree'){
                                        $d++;
                                    } else{
                                        //do nothing
                                    }
                                    if($teaching_s1['q15'] == 'strongly agree'){
                                        $sa++;
                                    } elseif ($teaching_s1['q15'] == 'agree'){
                                        $a++;
                                    } elseif ($teaching_s1['q15'] == 'partially agree'){
                                        $pa++;
                                    } elseif ($teaching_s1['q15'] == 'disagree'){
                                        $d++;
                                    } else{
                                        //do nothing
                                    }
                                    if($teaching_s1['q16'] == 'strongly agree'){
                                        $sa++;
                                    } elseif ($teaching_s1['q16'] == 'agree'){
                                        $a++;
                                    } elseif ($teaching_s1['q16'] == 'partially agree'){
                                        $pa++;
                                    } elseif ($teaching_s1['q16'] == 'disagree'){
                                        $d++;
                                    } else{
                                        //do nothing
                                    }
                                    if($teaching_s1['q17'] == 'strongly agree'){
                                        $sa++;
                                    } elseif ($teaching_s1['q17'] == 'agree'){
                                        $a++;
                                    } elseif ($teaching_s1['q17'] == 'partially agree'){
                                        $pa++;
                                    } elseif ($teaching_s1['q17'] == 'disagree'){
                                        $d++;
                                    } else{
                                        //do nothing
                                    }
                                    if($teaching_s1['q18'] == 'strongly agree'){
                                        $sa++;
                                    } elseif ($teaching_s1['q18'] == 'agree'){
                                        $a++;
                                    } elseif ($teaching_s1['q18'] == 'partially agree'){
                                        $pa++;
                                    } elseif ($teaching_s1['q18'] == 'disagree'){
                                        $d++;
                                    } else{
                                        //do nothing
                                    }
                                    if($teaching_s1['q19'] == 'strongly agree'){
                                        $sa++;
                                    } elseif ($teaching_s1['q19'] == 'agree'){
                                        $a++;
                                    } elseif ($teaching_s1['q19'] == 'partially agree'){
                                        $pa++;
                                    } elseif ($teaching_s1['q19'] == 'disagree'){
                                        $d++;
                                    } else{
                                        //do nothing
                                    }
                                    if($teaching_s1['q20'] == 'strongly agree'){
                                        $sa++;
                                    } elseif ($teaching_s1['q20'] == 'agree'){
                                        $a++;
                                    } elseif ($teaching_s1['q20'] == 'partially agree'){
                                        $pa++;
                                    } elseif ($teaching_s1['q20'] == 'disagree'){
                                        $d++;
                                    } else{
                                        //do nothing
                                    }
                                }
                            }
                            if($sa > 0 && $a > 0 && $pa > 0 && $d > 0){
                                $psa = ($sa/($sa + $a + $pa + $d))*100;
                                $p_a = ($a/($sa + $a + $pa + $d))*100;
                                $ppa = ($pa/($sa + $a + $pa + $d))*100;
                                $pd = ($d/($sa + $a + $pa + $d))*100;
                            }
                        ?>
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <button class = "btn btn-block btn-outline-info">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#<?=$subject1?>-detail" style="color:black;font-size:50px"><?=$subject1?></a>
                                </button>
                            </h4>
                        </div>
                        <div id="<?=$subject1?>-detail" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <p>View responses to this form up to the time this page was loaded.</p>
                                
                                <div class="row" style="justify-content: space-around;">
                                    <div class="card col-md-auto" style="width: 25rem; height: 25rem; margin-bottom:20px; margin-top: 20px;">
                                        <div class="card-body">
                                            <h5 class="card-title">Analysis of <?=$subject1?></h5>
                                            <div style="width:auto;height:auto">
                                                <canvas id="<?=$subject1?>"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    new Chart($("#<?=$subject1?>"), {
                                        type: 'pie',
                                        options: {
                                            legend: { display: true },
                                            indexAxis: 'x',
                                        },
                                        data: {
                                            labels: ["Strongly Agree", "Agree", "Partially Agree", "Disagree"],
                                            datasets: [
                                                {
                                                    label: "Number of selections",
                                                    backgroundColor: ["#FFC0CB", "#0000FF",
                                                        "#00FFFF", "#FFA500"],
                                                    data: [<?=$sa?>, <?=$a?>, <?=$pa?>, <?=$d?>]
                                                },
                                                {
                                                    label: "Percentage",
                                                    backgroundColor: ["#FFC0CB", "#0000FF",
                                                        "#00FFFF", "#FFA500"],
                                                    data: [<?=$psa?>, <?=$p_a?>, <?=$ppa?>, <?=$pd?>]
                                                }
                                            ]
                                        }            
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                        if($user['subject2_id'] != NULL || $user['subject2_id'] != ""){
                    ?>
                    <div class="panel panel-default panel-styling-custom" style="display:<?=$display_q2?>">
                        <?php
                            $sa = $a = $pa = $d = $psa = $p_a = $ppa = $pd = 0;
                            if(count($forms_teaching_s2) > 0){
                                foreach($forms_teaching_s2 as $teaching_s1){//I have not changed the name of $teaching_s1 to
                                                                            // $teaching_s2 as ultimately it does not matter.
                                    if($teaching_s1['q1'] == 'strongly agree'){
                                        $sa++;
                                    } elseif ($teaching_s1['q1'] == 'agree'){
                                        $a++;
                                    } elseif ($teaching_s1['q1'] == 'partially agree'){
                                        $pa++;
                                    } elseif ($teaching_s1['q1'] == 'disagree'){
                                        $d++;
                                    } else{
                                        //do nothing
                                    }
                                    if($teaching_s1['q2'] == 'strongly agree'){
                                        $sa++;
                                    } elseif ($teaching_s1['q2'] == 'agree'){
                                        $a++;
                                    } elseif ($teaching_s1['q2'] == 'partially agree'){
                                        $pa++;
                                    } elseif ($teaching_s1['q2'] == 'disagree'){
                                        $d++;
                                    } else{
                                        //do nothing
                                    }
                                    if($teaching_s1['q3'] == 'strongly agree'){
                                        $sa++;
                                    } elseif ($teaching_s1['q3'] == 'agree'){
                                        $a++;
                                    } elseif ($teaching_s1['q3'] == 'partially agree'){
                                        $pa++;
                                    } elseif ($teaching_s1['q3'] == 'disagree'){
                                        $d++;
                                    } else{
                                        //do nothing
                                    }
                                    if($teaching_s1['q4'] == 'strongly agree'){
                                        $sa++;
                                    } elseif ($teaching_s1['q4'] == 'agree'){
                                        $a++;
                                    } elseif ($teaching_s1['q4'] == 'partially agree'){
                                        $pa++;
                                    } elseif ($teaching_s1['q4'] == 'disagree'){
                                        $d++;
                                    } else{
                                        //do nothing
                                    }
                                    if($teaching_s1['q5'] == 'strongly agree'){
                                        $sa++;
                                    } elseif ($teaching_s1['q5'] == 'agree'){
                                        $a++;
                                    } elseif ($teaching_s1['q5'] == 'partially agree'){
                                        $pa++;
                                    } elseif ($teaching_s1['q5'] == 'disagree'){
                                        $d++;
                                    } else{
                                        //do nothing
                                    }
                                    if($teaching_s1['q6'] == 'strongly agree'){
                                        $sa++;
                                    } elseif ($teaching_s1['q6'] == 'agree'){
                                        $a++;
                                    } elseif ($teaching_s1['q6'] == 'partially agree'){
                                        $pa++;
                                    } elseif ($teaching_s1['q6'] == 'disagree'){
                                        $d++;
                                    } else{
                                        //do nothing
                                    }
                                    if($teaching_s1['q7'] == 'strongly agree'){
                                        $sa++;
                                    } elseif ($teaching_s1['q7'] == 'agree'){
                                        $a++;
                                    } elseif ($teaching_s1['q7'] == 'partially agree'){
                                        $pa++;
                                    } elseif ($teaching_s1['q7'] == 'disagree'){
                                        $d++;
                                    } else{
                                        //do nothing
                                    }
                                    if($teaching_s1['q8'] == 'strongly agree'){
                                        $sa++;
                                    } elseif ($teaching_s1['q8'] == 'agree'){
                                        $a++;
                                    } elseif ($teaching_s1['q8'] == 'partially agree'){
                                        $pa++;
                                    } elseif ($teaching_s1['q8'] == 'disagree'){
                                        $d++;
                                    } else{
                                        //do nothing
                                    }
                                    if($teaching_s1['q9'] == 'strongly agree'){
                                        $sa++;
                                    } elseif ($teaching_s1['q9'] == 'agree'){
                                        $a++;
                                    } elseif ($teaching_s1['q9'] == 'partially agree'){
                                        $pa++;
                                    } elseif ($teaching_s1['q9'] == 'disagree'){
                                        $d++;
                                    } else{
                                        //do nothing
                                    }
                                    if($teaching_s1['q10'] == 'strongly agree'){
                                        $sa++;
                                    } elseif ($teaching_s1['q10'] == 'agree'){
                                        $a++;
                                    } elseif ($teaching_s1['q10'] == 'partially agree'){
                                        $pa++;
                                    } elseif ($teaching_s1['q10'] == 'disagree'){
                                        $d++;
                                    } else{
                                        //do nothing
                                    }
                                    if($teaching_s1['q11'] == 'strongly agree'){
                                        $sa++;
                                    } elseif ($teaching_s1['q11'] == 'agree'){
                                        $a++;
                                    } elseif ($teaching_s1['q11'] == 'partially agree'){
                                        $pa++;
                                    } elseif ($teaching_s1['q11'] == 'disagree'){
                                        $d++;
                                    } else{
                                        //do nothing
                                    }
                                    if($teaching_s1['q12'] == 'strongly agree'){
                                        $sa++;
                                    } elseif ($teaching_s1['q12'] == 'agree'){
                                        $a++;
                                    } elseif ($teaching_s1['q12'] == 'partially agree'){
                                        $pa++;
                                    } elseif ($teaching_s1['q12'] == 'disagree'){
                                        $d++;
                                    } else{
                                        //do nothing
                                    }
                                    if($teaching_s1['q13'] == 'strongly agree'){
                                        $sa++;
                                    } elseif ($teaching_s1['q13'] == 'agree'){
                                        $a++;
                                    } elseif ($teaching_s1['q13'] == 'partially agree'){
                                        $pa++;
                                    } elseif ($teaching_s1['q13'] == 'disagree'){
                                        $d++;
                                    } else{
                                        //do nothing
                                    }
                                    if($teaching_s1['q14'] == 'strongly agree'){
                                        $sa++;
                                    } elseif ($teaching_s1['q14'] == 'agree'){
                                        $a++;
                                    } elseif ($teaching_s1['q14'] == 'partially agree'){
                                        $pa++;
                                    } elseif ($teaching_s1['q14'] == 'disagree'){
                                        $d++;
                                    } else{
                                        //do nothing
                                    }
                                    if($teaching_s1['q15'] == 'strongly agree'){
                                        $sa++;
                                    } elseif ($teaching_s1['q15'] == 'agree'){
                                        $a++;
                                    } elseif ($teaching_s1['q15'] == 'partially agree'){
                                        $pa++;
                                    } elseif ($teaching_s1['q15'] == 'disagree'){
                                        $d++;
                                    } else{
                                        //do nothing
                                    }
                                    if($teaching_s1['q16'] == 'strongly agree'){
                                        $sa++;
                                    } elseif ($teaching_s1['q16'] == 'agree'){
                                        $a++;
                                    } elseif ($teaching_s1['q16'] == 'partially agree'){
                                        $pa++;
                                    } elseif ($teaching_s1['q16'] == 'disagree'){
                                        $d++;
                                    } else{
                                        //do nothing
                                    }
                                    if($teaching_s1['q17'] == 'strongly agree'){
                                        $sa++;
                                    } elseif ($teaching_s1['q17'] == 'agree'){
                                        $a++;
                                    } elseif ($teaching_s1['q17'] == 'partially agree'){
                                        $pa++;
                                    } elseif ($teaching_s1['q17'] == 'disagree'){
                                        $d++;
                                    } else{
                                        //do nothing
                                    }
                                    if($teaching_s1['q18'] == 'strongly agree'){
                                        $sa++;
                                    } elseif ($teaching_s1['q18'] == 'agree'){
                                        $a++;
                                    } elseif ($teaching_s1['q18'] == 'partially agree'){
                                        $pa++;
                                    } elseif ($teaching_s1['q18'] == 'disagree'){
                                        $d++;
                                    } else{
                                        //do nothing
                                    }
                                    if($teaching_s1['q19'] == 'strongly agree'){
                                        $sa++;
                                    } elseif ($teaching_s1['q19'] == 'agree'){
                                        $a++;
                                    } elseif ($teaching_s1['q19'] == 'partially agree'){
                                        $pa++;
                                    } elseif ($teaching_s1['q19'] == 'disagree'){
                                        $d++;
                                    } else{
                                        //do nothing
                                    }
                                    if($teaching_s1['q20'] == 'strongly agree'){
                                        $sa++;
                                    } elseif ($teaching_s1['q20'] == 'agree'){
                                        $a++;
                                    } elseif ($teaching_s1['q20'] == 'partially agree'){
                                        $pa++;
                                    } elseif ($teaching_s1['q20'] == 'disagree'){
                                        $d++;
                                    } else{
                                        //do nothing
                                    }
                                }
                            }
                            if($sa > 0 && $a > 0 && $pa > 0 && $d > 0){
                                $psa = ($sa/($sa + $a + $pa + $d))*100;
                                $p_a = ($a/($sa + $a + $pa + $d))*100;
                                $ppa = ($pa/($sa + $a + $pa + $d))*100;
                                $pd = ($d/($sa + $a + $pa + $d))*100;
                            }
                        ?>
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <button class = "btn btn-block btn-outline-info">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#<?=$subject2?>-detail" style="color:black;font-size:50px"><?=$subject2?></a>
                                </button>
                            </h4>
                        </div>
                        <div id="<?=$subject2?>-detail" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <p>View responses to this form up to the time this page was loaded.</p>
                                
                                <div class="row" style="justify-content: space-around;">
                                    <div class="card col-md-auto" style="width: 25rem; height: 25rem; margin-bottom:20px; margin-top: 20px;">
                                        <div class="card-body">
                                            <h5 class="card-title">Analysis of <?=$subject2?></h5>
                                            <div style="width:auto;height:auto">
                                                <canvas id="<?=$subject2?>"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    new Chart($("#<?=$subject2?>"), {
                                        type: 'pie',
                                        options: {
                                            legend: { display: true },
                                            indexAxis: 'x',
                                        },
                                        data: {
                                            labels: ["Strongly Agree", "Agree", "Partially Agree", "Disagree"],
                                            datasets: [
                                                {
                                                    label: "Number of selections",
                                                    backgroundColor: ["#FFC0CB", "#0000FF",
                                                        "#00FFFF", "#FFA500"],
                                                    data: [<?=$sa?>, <?=$a?>, <?=$pa?>, <?=$d?>]
                                                },
                                                {
                                                    label: "Percentage",
                                                    backgroundColor: ["#FFC0CB", "#0000FF",
                                                        "#00FFFF", "#FFA500"],
                                                    data: [<?=$psa?>, <?=$p_a?>, <?=$ppa?>, <?=$pd?>]
                                                }
                                            ]
                                        }            
                                    });
                                </script>
                            </div>
                        </div>    
                    </div>
                    <?php
                        }
                        if($user['subject3_id'] != NULL || $user['subject3_id'] != ""){
                    ?>
                        <div class="panel panel-default panel-styling-custom" style="display:<?=$display_q3?>">
                            <?php
                                $sa = $a = $pa = $d = $psa = $p_a = $ppa = $pd = 0;
                                if(count($forms_teaching_s3) > 0){
                                    foreach($forms_teaching_s3 as $teaching_s1){
                                        if($teaching_s1['q1'] == 'strongly agree'){
                                            $sa++;
                                        } elseif ($teaching_s1['q1'] == 'agree'){
                                            $a++;
                                        } elseif ($teaching_s1['q1'] == 'partially agree'){
                                            $pa++;
                                        } elseif ($teaching_s1['q1'] == 'disagree'){
                                            $d++;
                                        } else{
                                            //do nothing
                                        }
                                        if($teaching_s1['q2'] == 'strongly agree'){
                                            $sa++;
                                        } elseif ($teaching_s1['q2'] == 'agree'){
                                            $a++;
                                        } elseif ($teaching_s1['q2'] == 'partially agree'){
                                            $pa++;
                                        } elseif ($teaching_s1['q2'] == 'disagree'){
                                            $d++;
                                        } else{
                                            //do nothing
                                        }
                                        if($teaching_s1['q3'] == 'strongly agree'){
                                            $sa++;
                                        } elseif ($teaching_s1['q3'] == 'agree'){
                                            $a++;
                                        } elseif ($teaching_s1['q3'] == 'partially agree'){
                                            $pa++;
                                        } elseif ($teaching_s1['q3'] == 'disagree'){
                                            $d++;
                                        } else{
                                            //do nothing
                                        }
                                        if($teaching_s1['q4'] == 'strongly agree'){
                                            $sa++;
                                        } elseif ($teaching_s1['q4'] == 'agree'){
                                            $a++;
                                        } elseif ($teaching_s1['q4'] == 'partially agree'){
                                            $pa++;
                                        } elseif ($teaching_s1['q4'] == 'disagree'){
                                            $d++;
                                        } else{
                                            //do nothing
                                        }
                                        if($teaching_s1['q5'] == 'strongly agree'){
                                            $sa++;
                                        } elseif ($teaching_s1['q5'] == 'agree'){
                                            $a++;
                                        } elseif ($teaching_s1['q5'] == 'partially agree'){
                                            $pa++;
                                        } elseif ($teaching_s1['q5'] == 'disagree'){
                                            $d++;
                                        } else{
                                            //do nothing
                                        }
                                        if($teaching_s1['q6'] == 'strongly agree'){
                                            $sa++;
                                        } elseif ($teaching_s1['q6'] == 'agree'){
                                            $a++;
                                        } elseif ($teaching_s1['q6'] == 'partially agree'){
                                            $pa++;
                                        } elseif ($teaching_s1['q6'] == 'disagree'){
                                            $d++;
                                        } else{
                                            //do nothing
                                        }
                                        if($teaching_s1['q7'] == 'strongly agree'){
                                            $sa++;
                                        } elseif ($teaching_s1['q7'] == 'agree'){
                                            $a++;
                                        } elseif ($teaching_s1['q7'] == 'partially agree'){
                                            $pa++;
                                        } elseif ($teaching_s1['q7'] == 'disagree'){
                                            $d++;
                                        } else{
                                            //do nothing
                                        }
                                        if($teaching_s1['q8'] == 'strongly agree'){
                                            $sa++;
                                        } elseif ($teaching_s1['q8'] == 'agree'){
                                            $a++;
                                        } elseif ($teaching_s1['q8'] == 'partially agree'){
                                            $pa++;
                                        } elseif ($teaching_s1['q8'] == 'disagree'){
                                            $d++;
                                        } else{
                                            //do nothing
                                        }
                                        if($teaching_s1['q9'] == 'strongly agree'){
                                            $sa++;
                                        } elseif ($teaching_s1['q9'] == 'agree'){
                                            $a++;
                                        } elseif ($teaching_s1['q9'] == 'partially agree'){
                                            $pa++;
                                        } elseif ($teaching_s1['q9'] == 'disagree'){
                                            $d++;
                                        } else{
                                            //do nothing
                                        }
                                        if($teaching_s1['q10'] == 'strongly agree'){
                                            $sa++;
                                        } elseif ($teaching_s1['q10'] == 'agree'){
                                            $a++;
                                        } elseif ($teaching_s1['q10'] == 'partially agree'){
                                            $pa++;
                                        } elseif ($teaching_s1['q10'] == 'disagree'){
                                            $d++;
                                        } else{
                                            //do nothing
                                        }
                                        if($teaching_s1['q11'] == 'strongly agree'){
                                            $sa++;
                                        } elseif ($teaching_s1['q11'] == 'agree'){
                                            $a++;
                                        } elseif ($teaching_s1['q11'] == 'partially agree'){
                                            $pa++;
                                        } elseif ($teaching_s1['q11'] == 'disagree'){
                                            $d++;
                                        } else{
                                            //do nothing
                                        }
                                        if($teaching_s1['q12'] == 'strongly agree'){
                                            $sa++;
                                        } elseif ($teaching_s1['q12'] == 'agree'){
                                            $a++;
                                        } elseif ($teaching_s1['q12'] == 'partially agree'){
                                            $pa++;
                                        } elseif ($teaching_s1['q12'] == 'disagree'){
                                            $d++;
                                        } else{
                                            //do nothing
                                        }
                                        if($teaching_s1['q13'] == 'strongly agree'){
                                            $sa++;
                                        } elseif ($teaching_s1['q13'] == 'agree'){
                                            $a++;
                                        } elseif ($teaching_s1['q13'] == 'partially agree'){
                                            $pa++;
                                        } elseif ($teaching_s1['q13'] == 'disagree'){
                                            $d++;
                                        } else{
                                            //do nothing
                                        }
                                        if($teaching_s1['q14'] == 'strongly agree'){
                                            $sa++;
                                        } elseif ($teaching_s1['q14'] == 'agree'){
                                            $a++;
                                        } elseif ($teaching_s1['q14'] == 'partially agree'){
                                            $pa++;
                                        } elseif ($teaching_s1['q14'] == 'disagree'){
                                            $d++;
                                        } else{
                                            //do nothing
                                        }
                                        if($teaching_s1['q15'] == 'strongly agree'){
                                            $sa++;
                                        } elseif ($teaching_s1['q15'] == 'agree'){
                                            $a++;
                                        } elseif ($teaching_s1['q15'] == 'partially agree'){
                                            $pa++;
                                        } elseif ($teaching_s1['q15'] == 'disagree'){
                                            $d++;
                                        } else{
                                            //do nothing
                                        }
                                        if($teaching_s1['q16'] == 'strongly agree'){
                                            $sa++;
                                        } elseif ($teaching_s1['q16'] == 'agree'){
                                            $a++;
                                        } elseif ($teaching_s1['q16'] == 'partially agree'){
                                            $pa++;
                                        } elseif ($teaching_s1['q16'] == 'disagree'){
                                            $d++;
                                        } else{
                                            //do nothing
                                        }
                                        if($teaching_s1['q17'] == 'strongly agree'){
                                            $sa++;
                                        } elseif ($teaching_s1['q17'] == 'agree'){
                                            $a++;
                                        } elseif ($teaching_s1['q17'] == 'partially agree'){
                                            $pa++;
                                        } elseif ($teaching_s1['q17'] == 'disagree'){
                                            $d++;
                                        } else{
                                            //do nothing
                                        }
                                        if($teaching_s1['q18'] == 'strongly agree'){
                                            $sa++;
                                        } elseif ($teaching_s1['q18'] == 'agree'){
                                            $a++;
                                        } elseif ($teaching_s1['q18'] == 'partially agree'){
                                            $pa++;
                                        } elseif ($teaching_s1['q18'] == 'disagree'){
                                            $d++;
                                        } else{
                                            //do nothing
                                        }
                                        if($teaching_s1['q19'] == 'strongly agree'){
                                            $sa++;
                                        } elseif ($teaching_s1['q19'] == 'agree'){
                                            $a++;
                                        } elseif ($teaching_s1['q19'] == 'partially agree'){
                                            $pa++;
                                        } elseif ($teaching_s1['q19'] == 'disagree'){
                                            $d++;
                                        } else{
                                            //do nothing
                                        }
                                        if($teaching_s1['q20'] == 'strongly agree'){
                                            $sa++;
                                        } elseif ($teaching_s1['q20'] == 'agree'){
                                            $a++;
                                        } elseif ($teaching_s1['q20'] == 'partially agree'){
                                            $pa++;
                                        } elseif ($teaching_s1['q20'] == 'disagree'){
                                            $d++;
                                        } else{
                                            //do nothing
                                        }
                                    }
                                }
                                if($sa > 0 && $a > 0 && $pa > 0 && $d > 0){
                                    $psa = ($sa/($sa + $a + $pa + $d))*100;
                                    $p_a = ($a/($sa + $a + $pa + $d))*100;
                                    $ppa = ($pa/($sa + $a + $pa + $d))*100;
                                    $pd = ($d/($sa + $a + $pa + $d))*100;
                                }
                            ?>
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <button class = "btn btn-block btn-outline-info">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#<?=$subject3?>-detail" style="color:black;font-size:50px"><?=$subject3?></a>
                                    </button>
                                </h4>
                            </div>
                            <div id="<?=$subject3?>-detail" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>View responses to this form up to the time this page was loaded.</p>
                                    
                                    <div class="row" style="justify-content: space-around;">
                                        <div class="card col-md-auto" style="width: 25rem; height: 25rem; margin-bottom:20px; margin-top: 20px;">
                                            <div class="card-body">
                                                <h5 class="card-title">Analysis of <?=$subject3?></h5>
                                                <div style="width:auto;height:auto">
                                                    <canvas id="<?=$subject3?>"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        new Chart($("#<?=$subject3?>"), {
                                            type: 'pie',
                                            options: {
                                                legend: { display: true },
                                                indexAxis: 'x',
                                            },
                                            data: {
                                                labels: ["Strongly Agree", "Agree", "Partially Agree", "Disagree"],
                                                datasets: [
                                                    {
                                                        label: "Number of selections",
                                                        backgroundColor: ["#FFC0CB", "#0000FF",
                                                            "#00FFFF", "#FFA500"],
                                                        data: [<?=$sa?>, <?=$a?>, <?=$pa?>, <?=$d?>]
                                                    },
                                                    {
                                                        label: "Percentage",
                                                        backgroundColor: ["#FFC0CB", "#0000FF",
                                                            "#00FFFF", "#FFA500"],
                                                        data: [<?=$psa?>, <?=$p_a?>, <?=$ppa?>, <?=$pd?>]
                                                    }
                                                ]
                                            }            
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                </div> 
            </div>
        </div>
        <div class = "container footer-styling" style = "margin-top:0px"> <!--bottom part of page-->
            <div class = "footer-options">
                <div class = "footer-specific-option">
                    <button class = "btn btn-primary">
                        <img src = "img/dashboard_icon.svg" class = "footer-links">&nbsp;&nbsp;&nbsp;&nbsp;<a href = "#" target = "_blank"><span style = "color:black">Logout</span></a>
                    </button>
                </div>
            </div>
            <div class = "footer-copyright">
                © 2023 K.J. Somaiya College of Engineering, Somaiya Vidyavihar University Information Systems. All Rights Reserved.
            </div>
        </div>
        <script type = "text/javascript" src = "js/jquery.js"></script>
        <script type = "text/javascript" src = "js/bootstrap.min.js"></script>
    </body>
</html>