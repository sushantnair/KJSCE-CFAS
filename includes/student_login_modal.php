<div class = "modal fade" id = "student-login-modal" tabindex = "-1" role = "dialog">
    <div class="modal-dialog" role="document">  
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="login-heading">Login as Student</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="student-login-form" class="form" role="form" method="post" action="api/student_login_submit.php">
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
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-envelope"></i>
                            </span>
                        </div>
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </span>
                        </div>
                        <input type="password" class="form-control" name="pass" placeholder="Password" minlength="6" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">Login as Student</button>
                    
                    </div>
                </form>
            </div>
            <div class = "modal-footer">
                <span>Account not yet created?<span>
                <span><a href = "#" data-dismiss = "modal" data-toggle = "modal" data-target = "#signup-modal">Signup as Student</a></span>
            </div>
        </div>  
    </div>
</div>