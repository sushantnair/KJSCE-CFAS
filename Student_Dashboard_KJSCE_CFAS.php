<?php
    session_start();
    require "includes/database_connect.php";
    if (!isset($_SESSION["user_id"])) {
        header("location: Home_KJSCE_CFAS.php");
        die();
    }
    $user_id = $_SESSION['user_id'];

    $sql_1 = "SELECT * FROM students WHERE roll_no = $user_id";
    $result_1 = mysqli_query($connection, $sql_1);
    if (!$result_1) {
        echo "There is some problem in connection.";
        return;
    }
    $user = mysqli_fetch_assoc($result_1);
    if (!$user) {
        echo "There is a problem in fetch assoc.";
        return;
    }

    $sql_not_filled = "SELECT *
              FROM responses
              WHERE student_no = $user_id AND flag = 0";
    $result_not_filled = mysqli_query($connection, $sql_not_filled);
    if(!$result_not_filled){
        echo "There was an error in fetching your responses.";
        return;
    }
    $forms_not_filled_responses = mysqli_fetch_all($result_not_filled, MYSQLI_ASSOC);
    //$user_id stores the roll number of the student
    $sql_filled = "SELECT *
              FROM responses
              WHERE student_no = $user_id AND flag = 1";
    $result_filled = mysqli_query($connection, $sql_filled);
    if(!$result_filled){
        echo "There was an error in fetching your responses.";
        return;
    }
    $forms_filled_responses = mysqli_fetch_all($result_filled, MYSQLI_ASSOC);
    mysqli_close($connection);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name = "viewport" content = "width = device-width, initial-scale = 1">
        <?php
            include "includes/head_links.php";
        ?>
        <title>Student | KJSCE CFAS</title>
    </head>
    <body>
        <?php
            include "includes/header.php";
        ?>
        <div class = "page-container container bg-img">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb" style = "background-color:white">
                    <li class="breadcrumb-item breadcrumb-item-styling" aria-current = "page"><a href="Home_KJSCE_CFAS.php">Home</a></li>
                    <li class="breadcrumb-item breadcrumb-item-styling active" aria-current = "page">Student Dashboard</li>
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
                                <div class = "eno">Roll No.: <?= $user['roll_no'] ?></div>
                                <div class = "course">Studying Courses: 
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
                                        if($user['subject4'] != 'NULL'){
                                            echo $user['subject4'];
                                            echo " ";
                                        }
                                        if($user['subject5'] != 'NULL'){
                                            echo $user['subject5'];
                                            echo " ";
                                        }
                                        if($user['subject6'] != 'NULL'){
                                            echo $user['subject6'];
                                            echo " ";
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
                <div class = "form-module" style="margin:50px">
                    <h2 class="form-module-title">Fill New Forms</h2>
                    <?php
                        if(count($forms_not_filled_responses) > 0){
                            foreach($forms_not_filled_responses as $not_filled){
                                
                    ?>
                    
                    <div class="panel-group" id="accordion">
                    <?= $not_filled['subject_no']?>
                        <div class="panel panel-default panel-styling-custom">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <button class = "btn btn-block btn-outline-info">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#<?= $not_filled['subject_name']?>-detail" style="color:black;font-size:50px"><?= $not_filled['subject_name']?></a>
                                    </button>
                                </h4>
                            </div>
                            <div id="<?= $not_filled['subject_name']?>-detail" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <div class="row" style="justify-content: space-around;">
                                        <div class="card col-md-auto" style="width: 25rem; height: 30rem; margin-bottom:60px; margin-top: 20px;">
                                            <img src="img/background-image.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                    <?= $not_filled['subject_name']?>
                                                    <h5 class="card-title">Fill <?= $not_filled['subject_name']?></h5>
                                                    <p class="card-text">Fill the <?= $not_filled['subject_name']?> form as you study the course and are yet to fill the form</p>
                                                    <p class="card-text">
                                                        <a href="Feedback_KJSCE_CFAS.php?form_id=<?= $not_filled['subject_no']?>" class="btn btn-primary btn-block">Fill <?= $not_filled['subject_name']?></a>
                                                    </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <?php
                            }
                        }
                    ?>
                </div>
            
            <div class = "form-module" style="margin:50px">
                <h2 class="form-module-title">View Filled Forms</h2>
                <?php
                    if(count($forms_filled_responses) > 0){
                        foreach($forms_filled_responses as $filled){
                            $sa = $a = $pa = $d = $psa = $p_a = $ppa = $pd = 0;
                            if($filled['q1'] == 'strongly agree'){
                                $sa++;
                            } elseif ($filled['q1'] == 'agree'){
                                $a++;
                            } elseif ($filled['q1'] == 'partially agree'){
                                $pa++;
                            } elseif ($filled['q1'] == 'disagree'){
                                $d++;
                            } else{
                                //do nothing
                            }
                            if($filled['q2'] == 'strongly agree'){
                                $sa++;
                            } elseif ($filled['q2'] == 'agree'){
                                $a++;
                            } elseif ($filled['q2'] == 'partially agree'){
                                $pa++;
                            } elseif ($filled['q2'] == 'disagree'){
                                $d++;
                            } else{
                                //do nothing
                            }
                            if($filled['q3'] == 'strongly agree'){
                                $sa++;
                            } elseif ($filled['q3'] == 'agree'){
                                $a++;
                            } elseif ($filled['q3'] == 'partially agree'){
                                $pa++;
                            } elseif ($filled['q3'] == 'disagree'){
                                $d++;
                            } else{
                                //do nothing
                            }
                            if($filled['q4'] == 'strongly agree'){
                                $sa++;
                            } elseif ($filled['q4'] == 'agree'){
                                $a++;
                            } elseif ($filled['q4'] == 'partially agree'){
                                $pa++;
                            } elseif ($filled['q4'] == 'disagree'){
                                $d++;
                            } else{
                                //do nothing
                            } 
                            if($filled['q5'] == 'strongly agree'){
                                $sa++;
                            } elseif ($filled['q5'] == 'agree'){
                                $a++;
                            } elseif ($filled['q5'] == 'partially agree'){
                                $pa++;
                            } elseif ($filled['q5'] == 'disagree'){
                                $d++;
                            } else{
                                //do nothing
                            }
                            if($filled['q6'] == 'strongly agree'){
                                $sa++;
                            } elseif ($filled['q6'] == 'agree'){
                                $a++;
                            } elseif ($filled['q6'] == 'partially agree'){
                                $pa++;
                            } elseif ($filled['q6'] == 'disagree'){
                                $d++;
                            } else{
                                //do nothing
                            }
                            if($filled['q7'] == 'strongly agree'){
                                $sa++;
                            } elseif ($filled['q7'] == 'agree'){
                                $a++;
                            } elseif ($filled['q7'] == 'partially agree'){
                                $pa++;
                            } elseif ($filled['q7'] == 'disagree'){
                                $d++;
                            } else{
                                //do nothing
                            }
                            if($filled['q8'] == 'strongly agree'){
                                $sa++;
                            } elseif ($filled['q8'] == 'agree'){
                                $a++;
                            } elseif ($filled['q8'] == 'partially agree'){
                                $pa++;
                            } elseif ($filled['q8'] == 'disagree'){
                                $d++;
                            } else{
                                //do nothing
                            }
                            if($filled['q9'] == 'strongly agree'){
                                $sa++;
                            } elseif ($filled['q9'] == 'agree'){
                                $a++;
                            } elseif ($filled['q9'] == 'partially agree'){
                                $pa++;
                            } elseif ($filled['q9'] == 'disagree'){
                                $d++;
                            } else{
                                //do nothing
                            }
                            if($filled['q10'] == 'strongly agree'){
                                $sa++;
                            } elseif ($filled['q10'] == 'agree'){
                                $a++;
                            } elseif ($filled['q10'] == 'partially agree'){
                                $pa++;
                            } elseif ($filled['q10'] == 'disagree'){
                                $d++;
                            } else{
                                //do nothing
                            }
                            if($filled['q11'] == 'strongly agree'){
                                $sa++;
                            } elseif ($filled['q11'] == 'agree'){
                                $a++;
                            } elseif ($filled['q11'] == 'partially agree'){
                                $pa++;
                            } elseif ($filled['q11'] == 'disagree'){
                                $d++;
                            } else{
                                //do nothing
                            }
                            if($filled['q12'] == 'strongly agree'){
                                $sa++;
                            } elseif ($filled['q12'] == 'agree'){
                                $a++;
                            } elseif ($filled['q12'] == 'partially agree'){
                                $pa++;
                            } elseif ($filled['q12'] == 'disagree'){
                                $d++;
                            } else{
                                //do nothing
                            }
                            if($filled['q13'] == 'strongly agree'){
                                $sa++;
                            } elseif ($filled['q13'] == 'agree'){
                                $a++;
                            } elseif ($filled['q13'] == 'partially agree'){
                                $pa++;
                            } elseif ($filled['q13'] == 'disagree'){
                                $d++;
                            } else{
                                //do nothing
                            }
                            if($filled['q14'] == 'strongly agree'){
                                $sa++;
                            } elseif ($filled['q14'] == 'agree'){
                                $a++;
                            } elseif ($filled['q14'] == 'partially agree'){
                                $pa++;
                            } elseif ($filled['q14'] == 'disagree'){
                                $d++;
                            } else{
                                //do nothing
                            }
                            if($filled['q15'] == 'strongly agree'){
                                $sa++;
                            } elseif ($filled['q15'] == 'agree'){
                                $a++;
                            } elseif ($filled['q15'] == 'partially agree'){
                                $pa++;
                            } elseif ($filled['q15'] == 'disagree'){
                                $d++;
                            } else{
                                //do nothing
                            }
                            if($filled['q16'] == 'strongly agree'){
                                $sa++;
                            } elseif ($filled['q16'] == 'agree'){
                                $a++;
                            } elseif ($filled['q16'] == 'partially agree'){
                                $pa++;
                            } elseif ($filled['q16'] == 'disagree'){
                                $d++;
                            } else{
                                //do nothing
                            }
                            if($filled['q17'] == 'strongly agree'){
                                $sa++;
                            } elseif ($filled['q17'] == 'agree'){
                                $a++;
                            } elseif ($filled['q17'] == 'partially agree'){
                                $pa++;
                            } elseif ($filled['q17'] == 'disagree'){
                                $d++;
                            } else{
                                //do nothing
                            }
                            if($filled['q18'] == 'strongly agree'){
                                $sa++;
                            } elseif ($filled['q18'] == 'agree'){
                                $a++;
                            } elseif ($filled['q18'] == 'partially agree'){
                                $pa++;
                            } elseif ($filled['q18'] == 'disagree'){
                                $d++;
                            } else{
                                //do nothing
                            }
                            if($filled['q19'] == 'strongly agree'){
                                $sa++;
                            } elseif ($filled['q19'] == 'agree'){
                                $a++;
                            } elseif ($filled['q19'] == 'partially agree'){
                                $pa++;
                            } elseif ($filled['q19'] == 'disagree'){
                                $d++;
                            } else{
                                //do nothing
                            }
                            if($filled['q20'] == 'strongly agree'){
                                $sa++;
                            } elseif ($filled['q20'] == 'agree'){
                                $a++;
                            } elseif ($filled['q20'] == 'partially agree'){
                                $pa++;
                            } elseif ($filled['q20'] == 'disagree'){
                                $d++;
                            } else{
                                //do nothing
                            }
                            if($sa > 0 && $a > 0 && $pa > 0 && $d > 0){
                                $psa = ($sa/($sa + $a + $pa + $d))*100;
                                $p_a = ($a/($sa + $a + $pa + $d))*100;
                                $ppa = ($pa/($sa + $a + $pa + $d))*100;
                                $pd = ($d/($sa + $a + $pa + $d))*100;
                            }
                ?>
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default panel-styling-custom">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <button class = "btn btn-block btn-outline-info">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#<?= $filled['subject_name']?>-detail" style="color:black;font-size:50px"><?= $filled['subject_name']?></a>
                                    </button>
                                </h4>
                            </div>
                            <div id="<?= $filled['subject_name']?>-detail" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>View responses to this form up to the time this page was loaded.</p>
                                    <div class = "row">
                                        <div class = "mx-auto bg-white rounded shadow">
                                            <div class = "table-responsive">
                                                <div class = "column">
                                                    <table class = "table table-fixed page-content">
                                                        <thead>
                                                            <tr>
                                                                <th scope = "col" class = "col-1">Q. No.</th>
                                                                <th scope = "col" class = "col-3">Response</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                
                                                                
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="justify-content: space-around;">
                                        <div class="card col-md-auto" style="width: 25rem; height: 27rem; margin-bottom:20px; margin-top: 20px;">
                                            <div class="card-body">
                                                <h5 class="card-title">Combined Analysis of All Questions</h5>
                                                <div style="width:auto;height:auto">
                                                    <canvas id="<?= $filled['subject_name']?>-all-q"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        new Chart($("#<?= $filled['subject_name']?>-all-q"), {
                            type: 'pie',
                            options: {
                                legend: { display: true },
                                indexAxis: 'x',
                            },
                            data: {
                                labels: ["Strongly Agree", "Agree", "Partially Agree", "Disagree"],
                                datasets: [
                                    {
                                        label: "<?= $filled['subject_name']?> Analysis of <?= $user['fname']?> <?= $user['lname'] ?>",
                                        backgroundColor: ["#FFC0CB", "#0000FF",
                                            "#00FFFF", "#FFA500"],
                                        data: [<?=$sa?>,<?=$a?>,<?=$pa?>,<?=$d?>]
                                    },
                                    {
                                        label: "Percentage",
                                        backgroundColor: ["#FFC0CB", "#0000FF",
                                            "#00FFFF", "#FFA500"],
                                        data: [<?=$psa?>,<?=$p_a?>,<?=$ppa?>,<?=$pd?>]
                                    }
                                ]
                            }            
                        });
                    </script> 
                <?php
                        }
                    }
                ?>
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