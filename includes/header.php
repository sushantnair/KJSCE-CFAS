<div class = "header-styling sticky-top row justify-content-center">
    <div class = "header col-md">
        <img src = "img/college-symbol.png" id = "logo"/>
    </div>
    <div class = "header col-md">
        <p class = "page-title">KJSCE Course Feedback Analysis System: Home Page</p>    
    </div>
    <div class = "header col-md">
        <nav class = "navbar navbar-expand-md navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
                <span class="navbar-toggler-icon"></span> 
            </button>
            <div class = "collapse navbar-collapse justify-content-end" id = "my-navbar">
                <ul class = "navbar-nav">
                    <?php
                    //Check if user is logged in or not
                        if(!isset($_SESSION["user_id"])){
                            ?>
                                <li class = "nav-item">
                                    <a class = "nav-link" href = "#" data-toggle = "modal" data-target = "#login-modal">
                                        <button class = "btn btn-primary"><i class = "fas fa-user"></i>&nbsp;&nbsp;Login</button>
                                    </a>
                                </li>
                                <div class = "nav-vl"></div>
                                <li class = "nav-item">
                                    <a class = "nav-link" href = "#" data-toggle = "modal" data-target = "#signup-modal">
                                        <button class = "btn btn-primary"><i class = "fas fa-sign-in-alt"></i>&nbsp;&nbsp;Signup</button>
                                    </a>
                                </li>
                            <?php
                        } else {
                            ?>                         
                            <li class = "nav-item">
                                <a class = "nav-link">
                                    <div class='nav-name'>
                                        <button class = "btn btn-primary">Hi, <?php if($_SESSION["gender"] == "male"){echo "Mr. ";}else{echo "Ms. ";}echo $_SESSION["fname"] ?><?php echo " " ?><?php echo $_SESSION["lname"]?></button>
                                    </div>
                                </a>
                            </li>
                            <div class = "nav-vl"></div>
                            <li class = "nav-item">
                                <a class = "nav-link" href = "<?php echo $_SESSION["link"] ?>.php">
                                    <button class = "btn btn-primary"><i class = "fas fa-user"></i>&nbsp;&nbsp;Dashboard</button>
                                </a>
                            </li>
                            <div class = "nav-vl"></div>
                            <li class = "nav-item">
                                <a class = "nav-link" href = "logout.php">
                                    <button class = "btn btn-primary"><i class = "fas fa-sign-out-alt"></i>&nbsp;&nbsp;Logout</button>
                                </a>
                            </li>   
                            <?php
                        }
                    ?>
                </ul>
            </div>
        </nav>
    </div>
</div>