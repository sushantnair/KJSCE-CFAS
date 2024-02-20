<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name = "viewport" content = "width = device-width, initial-scale = 1">
        <title>Home | KJSCE </title>
        <?php
            include "includes/head_links.php";
        ?>
    </head>
    <body>   
        <?php
            include "includes/header.php";
        ?>
        
        <div class = "page-container container bg-img" style = "padding-bottom:0px"> <!--middle part of page-->
            <!--<img src = "background-image.jpg" style = "height:auto" class = "bg-img">-->
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" >
                <ol class="breadcrumb" style = "background-color:white">
                    <li class="breadcrumb-item active breadcrumb-item-styling" aria-current = "page">Home</li>
                </ol>
            </nav>
            <p class = "page-content">
            Hello dear site visitor, welcome to the K.J.S.C.E. Course Feedback Analysis System. 
            In this website, you can create an account as a student or a faculty member, 
            if you are a student or a faculty member, respectively. Once your account is created,
            you can go to the dashboard page. </p>
            <p class = "page-content">
            If you are a student, then you will be required to submit the CourseFeedback Forms 
            according to the Semester you are currently studying in. After submission,you will 
            be given an analysis of the options chosen by you and your overall understanding
            of that particular course. </p>
            <p class = "page-content">
            If you are a faculty member, then you will be given the authority to create the forms
            according to the subjects that you teach. You will then receive the responses of all the 
            students who are studying that course and a combined analysis of all responses which will
            be shown to you as a pie-chart, along with certain numerical calculations which will given
            you a better idea as to the performance of that course and scope of improvement. </p>
            <p class = "page-content">
            Thank you very much for using the website. May you have a good experience and may you
            derive benefit from it.</p>
            <div class = "row">
                <div class = "mx-auto bg-white rounded shadow">
                    <div class = "table-responsive">
                        <div class = "column">
                            <table class = "table table-fixed page-content">
                                <thead>
                                    <tr>
                                        <th scope = "col" class = "col-3">Sr. No.</th>
                                        <th scope = "col" class = "col-3">Year</th>
                                        <th scope = "col" class = "col-3">Semester</th>
                                        <th scope = "col" class = "col-3">Subject</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class = "col-3">1</td>
                                        <td class = "col-3">FY</td>
                                        <td class = "col-3">SEM - I</td>
                                        <td class = "col-3"><a href = "AM-I_Feedback_KJSCE_CFAS.html">AM-I</a></td>
                                    </tr>
                                    <tr>
                                        <td class = "col-3">2</td>
                                        <td class = "col-3">FY</td>
                                        <td class = "col-3">SEM - I</td>
                                        <td class = "col-3"><a href = "#">EC</a></td>
                                    </tr>
                                    <tr>
                                        <td class = "col-3">3</td>
                                        <td class = "col-3">FY</td>
                                        <td class = "col-3">SEM - I</td>
                                        <td class = "col-3">EEEE</td>
                                    </tr>
                                    <tr>
                                        <td class = "col-3">4</td>
                                        <td class = "col-3">FY</td>
                                        <td class = "col-3">SEM - I</td>
                                        <td class = "col-3">ED</td>
                                    </tr>
                                    <tr>
                                        <td class = "col-3">5</td>
                                        <td class = "col-3">FY</td>
                                        <td class = "col-3">SEM - I</td>
                                        <td class = "col-3">WS-I</td>
                                    </tr>
                                    <tr>
                                        <td class = "col-3">1</td>
                                        <td class = "col-3">FY</td>
                                        <td class = "col-3">SEM-II</td>
                                        <td class = "col-3">AM-II</td>
                                    </tr>
                                    <tr>
                                        <td class = "col-3">2</td>
                                        <td class = "col-3">FY</td>
                                        <td class = "col-3">SEM-II</td>
                                        <td class = "col-3">EP</td>
                                    </tr>
                                    <tr>
                                        <td class = "col-3">3</td>
                                        <td class = "col-3">FY</td>
                                        <td class = "col-3">SEM-II</td>
                                        <td class = "col-3">EM</td>
                                    </tr>
                                    <tr>
                                        <td class = "col-3">4</td>
                                        <td class = "col-3">FY</td>
                                        <td class = "col-3">SEM-II</td>
                                        <td class = "col-3">WS-II</td>
                                    </tr>
                                    <tr>
                                        <td class = "col-3">1</td>
                                        <td class = "col-3">SY</td>
                                        <td class = "col-3">SEM-III</td>
                                        <td class = "col-3">ITVC</td>
                                    </tr>
                                    <tr>
                                        <td class = "col-3">2</td>
                                        <td class = "col-3">SY</td>
                                        <td class = "col-3">SEM-III</td>
                                        <td class = "col-3">ITVC Lab</td>
                                    </tr>
                                    <tr>
                                        <td class = "col-3">3</td>
                                        <td class = "col-3">SY</td>
                                        <td class = "col-3">SEM-III</td>
                                        <td class = "col-3">DS</td>
                                    </tr>
                                    <tr>
                                        <td class = "col-3">4</td>
                                        <td class = "col-3">SY</td>
                                        <td class = "col-3">SEM-III</td>
                                        <td class = "col-3">COA</td>
                                    </tr>
                                    <tr>
                                        <td class = "col-3">5</td>
                                        <td class = "col-3">SY</td>
                                        <td class = "col-3">SEM-III</td>
                                        <td class = "col-3">OOPM</td>
                                    </tr>
                                    <tr>
                                        <td class = "col-3">6</td>
                                        <td class = "col-3">SY</td>
                                        <td class = "col-3">SEM-III</td>
                                        <td class = "col-3">DSM</td>
                                    </tr>
                                    <tr>
                                        <td class = "col-3">1</td>
                                        <td class = "col-3">SY</td>
                                        <td class = "col-3">SEM-IV</td>
                                        <td class = "col-3">PSOT</td>
                                    </tr>
                                    <tr>
                                        <td class = "col-3">2</td>
                                        <td class = "col-3">SY</td>
                                        <td class = "col-3">SEM-IV</td>
                                        <td class = "col-3">PSOT Lab</td>
                                    </tr>
                                    <tr>
                                        <td class = "col-3">3</td>
                                        <td class = "col-3">SY</td>
                                        <td class = "col-3">SEM-IV</td>
                                        <td class = "col-3">AOA</td>
                                    </tr>
                                    <tr>
                                        <td class = "col-3">4</td>
                                        <td class = "col-3">SY</td>
                                        <td class = "col-3">SEM-IV</td>
                                        <td class = "col-3">RDBMS</td>
                                    </tr>
                                    <tr>
                                        <td class = "col-3">5</td>
                                        <td class = "col-3">SY</td>
                                        <td class = "col-3">SEM-IV</td>
                                        <td class = "col-3">TAC</td>
                                    </tr>
                                    <tr>
                                        <td class = "col-3">1</td>
                                        <td class = "col-3">TY</td>
                                        <td class = "col-3">SEM-V</td>
                                        <td class = "col-3">SE</td>
                                    </tr>
                                    <tr>
                                        <td class = "col-3">2</td>
                                        <td class = "col-3">TY</td>
                                        <td class = "col-3">SEM-V</td>
                                        <td class = "col-3">SE Lab</td>
                                    </tr>
                                    <tr>
                                        <td class = "col-3">3</td>
                                        <td class = "col-3">TY</td>
                                        <td class = "col-3">SEM-V</td>
                                        <td class = "col-3">CN</td>
                                    </tr>
                                    <tr>
                                        <td class = "col-3">4</td>
                                        <td class = "col-3">TY</td>
                                        <td class = "col-3">SEM-V</td>
                                        <td class = "col-3">CN Lab</td>
                                    </tr>
                                    <tr>
                                        <td class = "col-3">5</td>
                                        <td class = "col-3">TY</td>
                                        <td class = "col-3">SEM-V</td>
                                        <td class = "col-3">OS</td>
                                    </tr>
                                    <tr>
                                        <td class = "col-3">6</td>
                                        <td class = "col-3">TY</td>
                                        <td class = "col-3">SEM-V</td>
                                        <td class = "col-3">OS Lab</td>
                                    </tr>
                                    <tr>
                                        <td class = "col-3">1</td>
                                        <td class = "col-3">TY</td>
                                        <td class = "col-3">SEM-VI</td>
                                        <td class = "col-3">DSIP</td>
                                    </tr>
                                    <tr>
                                        <td class = "col-3">2</td>
                                        <td class = "col-3">TY</td>
                                        <td class = "col-3">SEM-VI</td>
                                        <td class = "col-3">DSIP Lab</td>
                                    </tr>
                                    <tr>
                                        <td class = "col-3">3</td>
                                        <td class = "col-3">TY</td>
                                        <td class = "col-3">SEM-VI</td>
                                        <td class = "col-3">IS</td>
                                    </tr>
                                    <tr>
                                        <td class = "col-3">4</td>
                                        <td class = "col-3">TY</td>
                                        <td class = "col-3">SEM-VI</td>
                                        <td class = "col-3">IS Lab</td>
                                    </tr>
                                    <tr>
                                        <td class = "col-3">5</td>
                                        <td class = "col-3">TY</td>
                                        <td class = "col-3">SEM-VI</td>
                                        <td class = "col-3">AI</td>
                                    </tr>
                                    <tr>
                                        <td class = "col-3">6</td>
                                        <td class = "col-3">TY</td>
                                        <td class = "col-3">SEM-VI</td>
                                        <td class = "col-3">AI Lab</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class = "container footer-styling"> <!--bottom part of page-->
            <div class = "footer-options">
                <div class = "footer-specific-option">
                    <button class = "btn btn-primary">
                        <img src = "img/home_icon.svg" class = "footer-links">&nbsp;&nbsp;&nbsp;&nbsp;<a href = "#" target = "_blank"><span style = "color:black">Home</span></a>
                    </button>
                </div>
            </div>
            <div class = "footer-copyright">
                © 2023 K.J. Somaiya College of Engineering, Somaiya Vidyavihar University Information Systems. All Rights Reserved.
            </div>
        </div> 
        <?php
            include "includes/login_modal.php";
            include "includes/student_login_modal.php";
            include "includes/faculty_login_modal.php";
            include "includes/signup_modal.php";
            include "includes/student_signup_modal.php";
            include "includes/faculty_signup_modal.php";
        ?>
        
        
        
        
        <script type = "text/javascript" src = "js/jquery.js"></script>
        <script type = "text/javascript" src = "js/popper.min.js"></script>
        <script type = "text/javascript" src = "js/bootstrap.min.js"></script>
        <script type = "text/javascript" src = "js/signup-modal.js"></script>
    </body>
</html>