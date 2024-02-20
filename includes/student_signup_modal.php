<div class = "modal fade" id = "student-signup-modal" tabindex = "-1" role = "dialog">
    <div class="modal-dialog" role="document">  
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signup-heading">Signup as Student</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="student-signup-form" class="form" role="form" method="post" action="api/student_signup_submit.php">
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
                        <input type="number" class="form-control" name="roll_no" placeholder="Roll Number" maxlength="11" minlength="11" required>
                    </div>    
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-envelope"></i>
                            </span>
                        </div>
                        <input type="email" id = "student_email" name = "email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div id = "student-email-error-message">
                        <h6 id = "s_email" class = "invalid">Email must belong to somaiya.edu domain.</h6>
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </span>
                        </div>
                        <input type="password" id = "spword" name = "pass" pattern = "(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8, }" title = "Password must contain at least one digit, one uppercase and one lowercase letter, as well as a total of 8 or more characters in total." class="form-control" name="password" placeholder="Password" minlength="8" required>
                    </div>
                    <div id="student-password-error-message">
                        <h3>Password must contain the following:</h3>
                        <p id="s_lowercase" class="invalid">A <b>lowercase</b> letter</p>
                        <p id="s_uppercase" class="invalid">A <b>capital (uppercase)</b> letter</p>
                        <p id="s_digit" class="invalid">A <b>number</b></p>
                        <p id="s_length" class="invalid">Minimum <b>8 characters</b></p>
                    </div>
                    <div class="form-group">
                        <span>Year:</span>
                        <select name = "year" class = "btn btn-block btn-info">
                            <option value = "FY">FY</option>
                            <option value = "SY">SY</option>
                            <option value = "TY">TY</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <span>Semester:</span>
                        <select name = "semester" class = "btn btn-block btn-info">
                            <option value = "1">SEM-I</option>
                            <option value = "2">SEM-II</option>
                            <option value = "3">SEM-III</option>
                            <option value = "4">SEM-IV</option>
                            <option value = "5">SEM-V</option>
                            <option value = "6">SEM-VI</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">Create Account for Student</button>
                    </div>
                </form>
            </div>
            <div class = "modal-footer">
                <span>Account already created?<span>
                <span><a href = "#" data-dismiss = "modal" data-toggle = "modal" data-target = "#student-login-modal">Login as Student</a></span>
            </div>
        </div>  
    </div>
</div>