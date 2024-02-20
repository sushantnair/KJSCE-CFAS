<div class = "modal fade" id = "faculty-signup-modal" tabindex = "-1" role = "dialog">
    <div class="modal-dialog" role="document">  
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signup-heading">Signup as Faculty</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="faculty-signup-form" class="form" role="form" method="post" action="api/faculty_signup_submit.php">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" name="fname" placeholder="First Name" required>
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" name="lname" placeholder="Last Name" required>
                    </div>
                    <span>Date of Birth:</span><br>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class='fas fa-calendar-alt'></i>
                            </span>
                        </div>
                        <input type="date" class="form-control" name="dob" placeholder="Date of Birth" required>
                    </div>
                    <div class="form-group">
                        <span>Gender: </span>
                        <input type="radio" class="ml-3" id="gender-male" name="gender" value="male" /> Male
                        <label for="gender-male">
                        </label>
                        <input type="radio" class="ml-3" id="gender-female" name="gender" value="female" />
                        <label for="gender-female">
                            Female
                        </label>
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-hashtag"></i>
                            </span>
                        </div>
                        <input type="number" class="form-control" name="employee_no" placeholder="Employee Number" maxlength="10" minlength="10" required>
                    </div>    
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-envelope"></i>
                            </span>
                        </div>
                        <input type="email" id = "faculty_email" name = "email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div id = "faculty-email-error-message">
                        <h6 id = "f_email" class = "invalid">Email must belong to somaiya.edu domain.</h6>
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </span>
                        </div>
                        <input type="password" id = "facultypword" name = "facultypword" pattern = "(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8, }" title = "Password must contain at least one digit, one uppercase and one lowercase letter, as well as a total of 8 or more characters in total." class="form-control" name="password" placeholder="Password" minlength="8" required>
                    </div>
                    <div id="faculty-password-error-message">
                        <h4>Password must contain the following:</h4>
                        <p id="f_lowercase" class="invalid">A <b>lowercase</b> letter</p>
                        <p id="f_uppercase" class="invalid">A <b>capital (uppercase)</b> letter</p>
                        <p id="f_digit" class="invalid">A <b>number</b></p>
                        <p id="f_length" class="invalid">Minimum <b>8 characters</b></p>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle btn-block" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Course 1 you are teaching:
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">
                                <div class="form-group">
                                    <span><em>At least 1 course must be taught</em></span><br>
                                    <span>FY SEM-I:&nbsp;&nbsp; </span>
                                    <input type = "radio" class = "ml-3" id = "AM-I" name = "subject1" value = "AM-I">
                                    <label for="AM-I">
                                        AM-I
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "EC" name = "subject1" value = "EC">
                                    <label for="EC">
                                        EC
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "EEEE" name = "subject1" value = "EEEE">
                                    <label for="EEEE">
                                        EEEE
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "ED" name = "subject1" value = "ED">
                                    <label for="ED">
                                        ED
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "WS-I" name = "subject1" value = "WS-I">
                                    <label for="WS-I">
                                        WS-I
                                    </label>
                                    <br>
                                    <span>FY SEM-II:&nbsp;&nbsp; </span>
                                    <input type = "radio" class = "ml-3" id = "AM-II" name = "subject1" value = "AM-II">
                                    <label for="AM-II">
                                        AM-II
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "EP" name = "subject1" value = "EP">
                                    <label for="EP">
                                        EP
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "EM" name = "subject1" value = "EM">
                                    <label for="EM">
                                        EM
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "WS-II" name = "subject1" value = "WS-II">
                                    <label for="WS-II">
                                        WS-II
                                    </label>
                                    <br>
                                    <span>SY SEM-III:&nbsp;&nbsp; </span>
                                    <input type = "radio" class = "ml-3" id = "ITVC" name = "subject1" value = "ITVC">
                                    <label for="ITVC">
                                        ITVC
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "DS" name = "subject1" value = "DS">
                                    <label for="DS">
                                        DS
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "COA" name = "subject1" value = "COA">
                                    <label for="COA">
                                        COA
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "OOPM" name = "subject1" value = "OOPM">
                                    <label for="OOPM">
                                        OOPM
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "DSM" name = "subject1" value = "DSM">
                                    <label for="DSM">
                                        DSM
                                    </label>
                                    <br>
                                    <span>SY SEM-IV:&nbsp;&nbsp; </span>
                                    <input type = "radio" class = "ml-3" id = "PSOT" name = "subject1" value = "PSOT">
                                    <label for="PSOT">
                                        PSOT
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "AOA" name = "subject1" value = "AOA">
                                    <label for="AOA">
                                        AOA
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "RDBMS" name = "subject1" value = "RDBMS">
                                    <label for="RDBMS">
                                        RDBMS
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "TAC" name = "subject1" value = "TAC">
                                    <label for="TAC">
                                        TAC
                                    </label>
                                    <br>
                                    <span>TY SEM-V:&nbsp;&nbsp; </span>
                                    <input type = "radio" class = "ml-3" id = "SE" name = "subject1" value = "SE">
                                    <label for="SE">
                                        SE
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "CN" name = "subject1" value = "CN">
                                    <label for="CN">
                                        CN
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "OS" name = "subject1" value = "OS">
                                    <label for="OS">
                                        OS
                                    </label>
                                    <br>
                                    <span>TY SEM-VI:&nbsp;&nbsp; </span>
                                    <input type = "radio" class = "ml-3" id = "DSIP" name = "subject1" value = "DSIP">
                                    <label for="DSIP">
                                        DSIP
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "IS" name = "subject1" value = "IS">
                                    <label for="IS">
                                        IS
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "AI" name = "subject1" value = "AI">
                                    <label for="AI">
                                        AI
                                    </label>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle btn-block" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Course 2 you are teaching:
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">
                                <div class="form-group">
                                    <span>Course 2 you are teaching:</span><br>
                                    <span><em>Optional</em></span><br>
                                    <span>FY SEM-I:&nbsp;&nbsp; </span>
                                    <input type = "radio" class = "ml-3" id = "AM-I" name = "subject2" value = "AM-I">
                                    <label for="AM-I">
                                        AM-I
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "EC" name = "subject2" value = "EC">
                                    <label for="EC">
                                        EC
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "EEEE" name = "subject2" value = "EEEE">
                                    <label for="EEEE">
                                        EEEE
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "ED" name = "subject2" value = "ED">
                                    <label for="ED">
                                        ED
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "WS-I" name = "subject2" value = "WS-I">
                                    <label for="WS-I">
                                        WS-I
                                    </label>
                                    <br>
                                    <span>FY SEM-II:&nbsp;&nbsp; </span>
                                    <input type = "radio" class = "ml-3" id = "AM-II" name = "subject2" value = "AM-II">
                                    <label for="AM-II">
                                        AM-II
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "EP" name = "subject2" value = "EP">
                                    <label for="EP">
                                        EP
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "EM" name = "subject2" value = "EM">
                                    <label for="EM">
                                        EM
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "WS-II" name = "subject2" value = "WS-II">
                                    <label for="WS-II">
                                        WS-II
                                    </label>
                                    <br>
                                    <span>SY SEM-III:&nbsp;&nbsp; </span>
                                    <input type = "radio" class = "ml-3" id = "ITVC" name = "subject2" value = "ITVC">
                                    <label for="ITVC">
                                        ITVC
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "DS" name = "subject2" value = "DS">
                                    <label for="DS">
                                        DS
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "COA" name = "subject2" value = "COA">
                                    <label for="COA">
                                        COA
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "OOPM" name = "subject2" value = "OOPM">
                                    <label for="OOPM">2
                                        OOPM
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "DSM" name = "subject2" value = "DSM">
                                    <label for="DSM">
                                        DSM
                                    </label>
                                    <br>
                                    <span>SY SEM-IV:&nbsp;&nbsp; </span>
                                    <input type = "radio" class = "ml-3" id = "PSOT" name = "subject2" value = "PSOT">
                                    <label for="PSOT">
                                        PSOT
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "AOA" name = "subject2" value = "AOA">
                                    <label for="AOA">
                                        AOA
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "RDBMS" name = "subject2" value = "RDBMS">
                                    <label for="RDBMS">
                                        RDBMS
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "TAC" name = "subject2" value = "TAC">
                                    <label for="TAC">
                                        TAC
                                    </label>
                                    <br>
                                    <span>TY SEM-V:&nbsp;&nbsp; </span>
                                    <input type = "radio" class = "ml-3" id = "SE" name = "subject2" value = "SE">
                                    <label for="SE">
                                        SE
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "CN" name = "subject2" value = "CN">
                                    <label for="CN">
                                        CN
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "OS" name = "subject2" value = "OS">
                                    <label for="OS">
                                        OS
                                    </label>
                                    <br>
                                    <span>TY SEM-VI:&nbsp;&nbsp; </span>
                                    <input type = "radio" class = "ml-3" id = "DSIP" name = "subject2" value = "DSIP">
                                    <label for="DSIP">
                                        DSIP
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "IS" name = "subject2" value = "IS">
                                    <label for="IS">
                                        IS
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "AI" name = "subject2" value = "AI">
                                    <label for="AI">
                                        AI
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "AI" name = "subject2" value = "NULL">
                                    <label for="NULL">
                                        NO SUBJECT
                                    </label>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle btn-block" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Course 3 you are teaching:
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">
                                <div class="form-group">
                                    <span>Course 3 you are teaching:</span><br>
                                    <span><em>Optional</em></span><br>
                                    <span>FY SEM-I:&nbsp;&nbsp; </span>
                                    <input type = "radio" class = "ml-3" id = "AM-I" name = "subject3" value = "AM-I">
                                    <label for="AM-I">
                                        AM-I
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "EC" name = "subject3" value = "EC">
                                    <label for="EC">
                                        EC
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "EEEE" name = "subject3" value = "EEEE">
                                    <label for="EEEE">
                                        EEEE
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "ED" name = "subject3" value = "ED">
                                    <label for="ED">
                                        ED
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "WS-I" name = "subject3" value = "WS-I">
                                    <label for="WS-I">
                                        WS-I
                                    </label>
                                    <br>
                                    <span>FY SEM-II:&nbsp;&nbsp; </span>
                                    <input type = "radio" class = "ml-3" id = "AM-II" name = "subject3" value = "AM-II">
                                    <label for="AM-II">
                                        AM-II
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "EP" name = "subject3" value = "EP">
                                    <label for="EP">
                                        EP
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "EM" name = "subject3" value = "EM">
                                    <label for="EM">
                                        EM
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "WS-II" name = "subject3" value = "WS-II">
                                    <label for="WS-II">
                                        WS-II
                                    </label>
                                    <br>
                                    <span>SY SEM-III:&nbsp;&nbsp; </span>
                                    <input type = "radio" class = "ml-3" id = "ITVC" name = "subject3" value = "ITVC">
                                    <label for="ITVC">
                                        ITVC
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "DS" name = "subject3" value = "DS">
                                    <label for="DS">
                                        DS
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "COA" name = "subject3" value = "COA">
                                    <label for="COA">
                                        COA
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "OOPM" name = "subject3" value = "OOPM">
                                    <label for="OOPM">
                                        OOPM
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "DSM" name = "subject3" value = "DSM">
                                    <label for="DSM">
                                        DSM
                                    </label>
                                    <br>
                                    <span>SY SEM-IV:&nbsp;&nbsp; </span>
                                    <input type = "radio" class = "ml-3" id = "PSOT" name = "subject3" value = "PSOT">
                                    <label for="PSOT">
                                        PSOT
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "AOA" name = "subject3" value = "AOA">
                                    <label for="AOA">
                                        AOA
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "RDBMS" name = "subject3" value = "RDBMS">
                                    <label for="RDBMS">
                                        RDBMS
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "TAC" name = "subject3" value = "TAC">
                                    <label for="TAC">
                                        TAC
                                    </label>
                                    <br>
                                    <span>TY SEM-V:&nbsp;&nbsp; </span>
                                    <input type = "radio" class = "ml-3" id = "SE" name = "subject3" value = "SE">
                                    <label for="SE">
                                        SE
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "CN" name = "subject3" value = "CN">
                                    <label for="CN">
                                        CN
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "OS" name = "subject3" value = "OS">
                                    <label for="OS">
                                        OS
                                    </label>
                                    <br>
                                    <span>TY SEM-VI:&nbsp;&nbsp; </span>
                                    <input type = "radio" class = "ml-3" id = "DSIP" name = "subject3" value = "DSIP">
                                    <label for="DSIP">
                                        DSIP
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "IS" name = "subject3" value = "IS">
                                    <label for="IS">
                                        IS
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "AI" name = "subject3" value = "AI">
                                    <label for="AI">
                                        AI
                                    </label>
                                    <input type = "radio" class = "ml-3" id = "AI" name = "subject3" value = "NULL">
                                    <label for="NULL">
                                        NO SUBJECT
                                    </label>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                            
                    <div class = "form-group">
                        <span>Your Qualification:</span><br>
                        <input type = "radio" class = "ml-3" id = "Masters" name = "qualification" value = "Masters">
                        <label for="Masters">
                            Masters
                        </label>
                        <input type = "radio" class = "ml-3" id = "M.Tech." name = "qualification" value = "M.Tech.">
                        <label for="M.Tech.">
                            M.Tech.
                        </label>
                        <input type = "radio" class = "ml-3" id = "Ph.D." name = "qualification" value = "Ph.D.">
                        <label for="Ph.D.">
                            Ph.D.
                        </label>
                        <input type = "radio" class = "ml-3" id = "M.Phil." name = "qualification" value = "M.Phil.">
                        <label for="M.Phil.">
                            M.Phil.
                        </label>
                        <input type = "radio" class = "ml-3" id = "Postdoc" name = "qualification" value = "Postdoc">
                        <label for="Postdoc">
                            Postdoc
                        </label>
                    </div>
                    <div class = "form-group">
                        <span>Type the field in which you have earned the degree:</span>
                        <textarea class = "btn btn-outline-info" rows = "5" cols = "50" name = "degreename" placeholder = "Enter the name of the degree(s) here..."></textarea>
                    </div>
                    <div class="form-group">
                        <span>Your Teaching Experience:</span>
                        <select name = "experience" class = "btn btn-block btn-info">
                            <option value = "lessthanfive">less than 5 years</option>
                            <option value = "fivetoten">5 to 10 years</option>
                            <option value = "tentofifteen">10 to 15 years</option>
                            <option value = "fifteentotwenty">15 to 20 years</option>
                            <option value = "morethantwenty">more than 20 years</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">Create Account for Faculty</button>
                    </div>
                </form>
            </div>
            <div class = "modal-footer">
                <span>Account already created?<span>
                <span><a href = "#" data-dismiss = "modal" data-toggle = "modal" data-target = "#faculty-login-modal">Login as Faculty</a></span>
            </div>
        </div>  
    </div>
</div>