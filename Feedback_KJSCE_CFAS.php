<?php
    session_start();
    require "includes/database_connect.php";

    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : NULL;
    $form_id = $_GET['form_id'];
    $sql_1 = "SELECT *
            FROM forms
            WHERE subject_id = $form_id";
    $result_1 = mysqli_query($connection, $sql_1);
    if (!$result_1) {
        echo "Something went wrong with the connection!";
        return;
    }
    $form = mysqli_fetch_assoc($result_1);
    if (!$form) {
        echo "Something went wrong while fething form data!";
        return;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name = "viewport" content = "width = device-width, initial-scale = 1">
        <?php
            include "includes/head_links.php";
        ?>
        <title><?= $form['subject'] ?> | KJSCE CFAS</title>
    </head>
    <body>
        <?php
            include "includes/header.php";
        ?>
        <div class = "container bg-img">
            <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
                <ol class="breadcrumb" style = "background-color:white">
                    <li class="breadcrumb-item breadcrumb-item-styling" aria-current = "page">Home</li>
                    <li class="breadcrumb-item breadcrumb-item-styling" aria-current = "page">Student Dashboard</li>
                    <li class="breadcrumb-item breadcrumb-item-styling active" aria-current = "page"><?= $form['subject'] ?> Feedback</li>                
                </ol>
            </nav>
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="signup-heading">Course Feedback for <?= $form['subject'] ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="signup-form" class="form" role="form" method="post" action="api/feedback_submit.php?form_id=<?= $form['subject_id']?>">
                            <?php
                                if($form['q1'] != NULL){
                            ?>
                                <div class="form-group">
                                    <span><?php echo $form['q1'] ?></span><br>
                                    <input type="radio" class="ml-3" name="q1_response" value="strongly agree" /> 
                                    <label>
                                        Strongy Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q1_response" value="agree" />
                                    <label>
                                        Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q1_response" value="partially agree" />
                                    <label>
                                        Partially Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q1_response" value="disagree" />
                                    <label>
                                        Disagree
                                    </label>
                                </div><br>
                            <?php
                                }
                                if($form['q2'] != NULL){
                            ?>
                                <div class="form-group">
                                    <span><?php echo $form['q2'] ?></span><br>
                                    <input type="radio" class="ml-3" name="q2_response" value="strongly agree" /> 
                                    <label>
                                        Strongy Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q2_response" value="agree" />
                                    <label>
                                        Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q2_response" value="partially agree" />
                                    <label>
                                        Partially Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q2_response" value="disagree" />
                                    <label>
                                        Disagree
                                    </label>
                                </div><br>
                            <?php
                                }
                                if($form['q3'] != NULL){
                            ?>
                                <div class="form-group">
                                    <span><?php echo $form['q3'] ?></span><br>
                                    <input type="radio" class="ml-3" name="q3_response" value="strongly agree" /> 
                                    <label>
                                        Strongy Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q3_response" value="agree" />
                                    <label>
                                        Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q3_response" value="partially agree" />
                                    <label>
                                        Partially Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q3_response" value="disagree" />
                                    <label>
                                        Disagree
                                    </label>
                                </div><br>
                            <?php
                                }
                                if($form['q4'] != NULL){
                            ?>
                                <div class="form-group">
                                    <span><?php echo $form['q4'] ?></span><br>
                                    <input type="radio" class="ml-3" name="q4_response" value="strongly agree" /> 
                                    <label>
                                        Strongy Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q4_response" value="agree" />
                                    <label>
                                        Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q4_response" value="partially agree" />
                                    <label>
                                        Partially Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q4_response" value="disagree" />
                                    <label>
                                        Disagree
                                    </label>
                                </div><br>
                            <?php
                                }
                                if($form['q5'] != NULL){
                            ?>
                                <div class="form-group">
                                    <span><?php echo $form['q5'] ?></span><br>
                                    <input type="radio" class="ml-3" name="q5_response" value="strongly agree" /> 
                                    <label>
                                        Strongy Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q5_response" value="agree" />
                                    <label>
                                        Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q5_response" value="partially agree" />
                                    <label>
                                        Partially Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q5_response" value="disagree" />
                                    <label>
                                        Disagree
                                    </label>
                                </div><br>
                            <?php
                                }
                                if($form['q6'] != NULL){
                            ?>
                                <div class="form-group">
                                    <span><?php echo $form['q6'] ?></span><br>
                                    <input type="radio" class="ml-3" name="q6_response" value="strongly agree" /> 
                                    <label>
                                        Strongy Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q6_response" value="agree" />
                                    <label>
                                        Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q6_response" value="partially agree" />
                                    <label>
                                        Partially Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q6_response" value="disagree" />
                                    <label>
                                        Disagree
                                    </label>
                                </div><br>
                                <?php
                                }
                                if($form['q7'] != NULL){
                            ?>
                                <div class="form-group">
                                    <span><?php echo $form['q7'] ?></span><br>
                                    <input type="radio" class="ml-3" name="q7_response" value="strongly agree" /> 
                                    <label>
                                        Strongy Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q7_response" value="agree" />
                                    <label>
                                        Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q7_response" value="partially agree" />
                                    <label>
                                        Partially Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q7_response" value="disagree" />
                                    <label>
                                        Disagree
                                    </label>
                                </div><br>
                                <?php
                                }
                                if($form['q8'] != NULL){
                            ?>
                                <div class="form-group">
                                    <span><?php echo $form['q8'] ?></span><br>
                                    <input type="radio" class="ml-3" name="q8_response" value="strongly agree" /> 
                                    <label>
                                        Strongy Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q8_response" value="agree" />
                                    <label>
                                        Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q8_response" value="partially agree" />
                                    <label>
                                        Partially Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q8_response" value="disagree" />
                                    <label>
                                        Disagree
                                    </label>
                                </div><br>
                                <?php
                                }
                                if($form['q9'] != NULL){
                            ?>
                                <div class="form-group">
                                    <span><?php echo $form['q9'] ?></span><br>
                                    <input type="radio" class="ml-3" name="q9_response" value="strongly agree" /> 
                                    <label>
                                        Strongy Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q9_response" value="agree" />
                                    <label>
                                        Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q9_response" value="partially agree" />
                                    <label>
                                        Partially Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q9_response" value="disagree" />
                                    <label>
                                        Disagree
                                    </label>
                                </div><br>
                                <?php
                                }
                                if($form['q10'] != NULL){
                            ?>
                                <div class="form-group">
                                    <span><?php echo $form['q10'] ?></span><br>
                                    <input type="radio" class="ml-3" name="q10_response" value="strongly agree" /> 
                                    <label>
                                        Strongy Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q10_response" value="agree" />
                                    <label>
                                        Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q10_response" value="partially agree" />
                                    <label>
                                        Partially Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q10_response" value="disagree" />
                                    <label>
                                        Disagree
                                    </label>
                                </div><br>
                                <?php
                                }
                                if($form['q11'] != NULL){
                            ?>
                                <div class="form-group">
                                    <span><?php echo $form['q11'] ?></span><br>
                                    <input type="radio" class="ml-3" name="q11_response" value="strongly agree" /> 
                                    <label>
                                        Strongy Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q11_response" value="agree" />
                                    <label>
                                        Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q11_response" value="partially agree" />
                                    <label>
                                        Partially Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q11_response" value="disagree" />
                                    <label>
                                        Disagree
                                    </label>
                                </div><br>
                                <?php
                                }
                                if($form['q12'] != NULL){
                            ?>
                                <div class="form-group">
                                    <span><?php echo $form['q12'] ?></span><br>
                                    <input type="radio" class="ml-3" name="q12_response" value="strongly agree" /> 
                                    <label>
                                        Strongy Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q12_response" value="agree" />
                                    <label>
                                        Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q12_response" value="partially agree" />
                                    <label>
                                        Partially Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q12_response" value="disagree" />
                                    <label>
                                        Disagree
                                    </label>
                                </div><br>
                                <?php
                                }
                                if($form['q13'] != NULL){
                            ?>
                                <div class="form-group">
                                    <span><?php echo $form['q13'] ?></span><br>
                                    <input type="radio" class="ml-3" name="q13_response" value="strongly agree" /> 
                                    <label>
                                        Strongy Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q13_response" value="agree" />
                                    <label>
                                        Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q13_response" value="partially agree" />
                                    <label>
                                        Partially Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q13_response" value="disagree" />
                                    <label>
                                        Disagree
                                    </label>
                                </div><br>
                                <?php
                                }
                                if($form['q14'] != NULL){
                            ?>
                                <div class="form-group">
                                    <span><?php echo $form['q14'] ?></span><br>
                                    <input type="radio" class="ml-3" name="q14_response" value="strongly agree" /> 
                                    <label>
                                        Strongy Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q14_response" value="agree" />
                                    <label>
                                        Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q14_response" value="partially agree" />
                                    <label>
                                        Partially Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q14_response" value="disagree" />
                                    <label>
                                        Disagree
                                    </label>
                                </div><br>
                                <?php
                                }
                                if($form['q15'] != NULL){
                            ?>
                                <div class="form-group">
                                    <span><?php echo $form['q15'] ?></span><br>
                                    <input type="radio" class="ml-3" name="q15_response" value="strongly agree" /> 
                                    <label>
                                        Strongy Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q15_response" value="agree" />
                                    <label>
                                        Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q15_response" value="partially agree" />
                                    <label>
                                        Partially Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q15_response" value="disagree" />
                                    <label>
                                        Disagree
                                    </label>
                                </div><br>
                                <?php
                                }
                                if($form['q16'] != NULL){
                            ?>
                                <div class="form-group">
                                    <span><?php echo $form['q16'] ?></span><br>
                                    <input type="radio" class="ml-3" name="q16_response" value="strongly agree" /> 
                                    <label>
                                        Strongy Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q16_response" value="agree" />
                                    <label>
                                        Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q16_response" value="partially agree" />
                                    <label>
                                        Partially Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q16_response" value="disagree" />
                                    <label>
                                        Disagree
                                    </label>
                                </div><br>
                                <?php
                                }
                                if($form['q17'] != NULL){
                            ?>
                                <div class="form-group">
                                    <span><?php echo $form['q17'] ?></span><br>
                                    <input type="radio" class="ml-3" name="q17_response" value="strongly agree" /> 
                                    <label>
                                        Strongy Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q17_response" value="agree" />
                                    <label>
                                        Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q17_response" value="partially agree" />
                                    <label>
                                        Partially Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q17_response" value="disagree" />
                                    <label>
                                        Disagree
                                    </label>
                                </div><br>
                                <?php
                                }
                                if($form['q18'] != NULL){
                            ?>
                                <div class="form-group">
                                    <span><?php echo $form['q18'] ?></span><br>
                                    <input type="radio" class="ml-3" name="q18_response" value="strongly agree" /> 
                                    <label>
                                        Strongy Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q18_response" value="agree" />
                                    <label>
                                        Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q18_response" value="partially agree" />
                                    <label>
                                        Partially Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q18_response" value="disagree" />
                                    <label>
                                        Disagree
                                    </label>
                                </div><br>
                                <?php
                                }
                                if($form['q19'] != NULL){
                            ?>
                                <div class="form-group">
                                    <span><?php echo $form['q19'] ?></span><br>
                                    <input type="radio" class="ml-3" name="q19_response" value="strongly agree" /> 
                                    <label>
                                        Strongy Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q19_response" value="agree" />
                                    <label>
                                        Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q19_response" value="partially agree" />
                                    <label>
                                        Partially Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q19_response" value="disagree" />
                                    <label>
                                        Disagree
                                    </label>
                                </div><br>
                                <?php
                                }
                                if($form['q20'] != NULL){
                            ?>
                                <div class="form-group">
                                    <span><?php echo $form['q20'] ?></span><br>
                                    <input type="radio" class="ml-3" name="q20_response" value="strongly agree" /> 
                                    <label>
                                        Strongy Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q20_response" value="agree" />
                                    <label>
                                        Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q20_response" value="partially agree" />
                                    <label>
                                        Partially Agree
                                    </label>
                                    <br>
                                    <input type="radio" class="ml-3" name="q20_response" value="disagree" />
                                    <label>
                                        Disagree
                                    </label>
                                </div><br>
                            <?php
                                }
                            ?>
    
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-primary" >Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class = "container footer-styling"> <!--bottom part of page-->
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
    </body>
</html>