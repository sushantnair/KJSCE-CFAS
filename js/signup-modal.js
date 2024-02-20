//validation for student sign-up modal
var studentinput = document.getElementById("spword");
var s_lowercase = document.getElementById("s_lowercase");
var s_uppercase = document.getElementById("s_uppercase");
var s_digit = document.getElementById("s_digit");
var s_length = document.getElementById("s_length");
studentinput.onfocus = function()
{
    document.getElementById("student-password-error-message").style.display = "block";
}
studentinput.onblur = function()
{
    document.getElementById("student-password-error-message").style.display = "none";
}
studentinput.onkeyup = function()
{
    var LCLetters = /[a-z]/g;
    if(studentinput.value.match(LCLetters))
    {
        s_lowercase.classList.remove("invalid");
        s_lowercase.classList.add("valid");
    }
    else
    {
        s_lowercase.classList.remove("valid");
        s_lowercase.classList.add("invalid");
    }
    var UCLetters = /[A-Z]/g;
    if(studentinput.value.match(UCLetters))
    {
        s_uppercase.classList.remove("invalid");
        s_uppercase.classList.add("valid");
    }
    else
    {
        s_uppercase.classList.remove("valid");
        s_uppercase.classList.add("invalid");
    }
    var Numbers = /[0-9]/g;
    if(studentinput.value.match(Numbers))
    {
        s_digit.classList.remove("invalid");
        s_digit.classList.add("valid");
    }
    else
    {
        s_digit.classList.remove("valid");
        s_digit.classList.add("invalid");
    }
    if(studentinput.value.length >= 8)
    {
        s_length.classList.remove("invalid");
        s_length.classList.add("valid");
    }
    else
    {
        s_length.classList.remove("valid");
        s_length.classList.add("invalid");
    }
}
//validation for faculty signup-modal
var facultyinput = document.getElementById("facultypword");
var f_lowercase = document.getElementById("f_lowercase");
var f_uppercase = document.getElementById("f_uppercase");
var f_digit = document.getElementById("f_digit");
var f_length = document.getElementById("f_length");
facultyinput.onfocus = function()
{
    document.getElementById("faculty-password-error-message").style.display = "block";
}
facultyinput.onblur = function()
{
    document.getElementById("faculty-password-error-message").style.display = "none";
}
facultyinput.onkeyup = function()
{
    var LCLetters = /[a-z]/g;
    if(facultyinput.value.match(LCLetters))
    {
        f_lowercase.classList.remove("invalid");
        f_lowercase.classList.add("valid");
    }
    else
    {
        f_lowercase.classList.remove("valid");
        f_lowercase.classList.add("invalid");
    }
    var UCLetters = /[A-Z]/g;
    if(facultyinput.value.match(UCLetters))
    {
        f_uppercase.classList.remove("invalid");
        f_uppercase.classList.add("valid");
    }
    else
    {
        f_uppercase.classList.remove("valid");
        f_uppercase.classList.add("invalid");
    }
    var Numbers = /[0-9]/g;
    if(facultyinput.value.match(Numbers))
    {
        f_digit.classList.remove("invalid");
        f_digit.classList.add("valid");
    }
    else
    {
        f_digit.classList.remove("valid");
        f_digit.classList.add("invalid");
    }
    if(facultyinput.value.length >= 8)
    {
        f_length.classList.remove("invalid");
        f_length.classList.add("valid");
    }
    else
    {
        f_length.classList.remove("valid");
        f_length.classList.add("invalid");
    }
}
var email_format = /^[^ ]+@[somaiya]+\.[edu]{3}$/;
var faculty_email = document.getElementById("faculty_email");
var f_email = document.getElementById("f_email");
faculty_email.onfocus = function()
{
    document.getElementById("faculty-email-error-message").style.display = "block";
}
faculty_email.onblur = function()
{
    document.getElementById("faculty-email-error-message").style.display = "none";
}
faculty_email.onkeyup = function()
{
    if(faculty_email.value.match(email_format))
    {
        f_email.classList.remove("invalid");
        f_email.classList.add("valid");
    }
    else
    {
        f_email.classList.remove("valid");
        f_email.classList.add("invalid");
    }
}
var student_email = document.getElementById("student_email");
var s_email = document.getElementById("s_email");
student_email.onfocus = function()
{
    document.getElementById("student-email-error-message").style.display = "block";
}
student_email.onblur = function()
{
    document.getElementById("student-email-error-message").style.display = "none";
}
student_email.onkeyup = function()
{
    if(student_email.value.match(email_format))
    {
        s_email.classList.remove("invalid");
        s_email.classList.add("valid");
    }
    else
    {
        s_email.classList.remove("valid");
        s_email.classList.add("invalid");
    }
}
//document.getElementById("logo").style.display = "none";
//USER GREETING
var hour = new Date();
var greeting;
if (hour.getHours() < 10)
{
    greeting = "Good morning. Welcome to KJSCE CFAS.";
}
else if(hour.getHours() < 16)
{
    greeting = "Good afternoon. Welcome to KJSCE CFAS.";
}
else if(hour.getHours() < 19)
{
    greeting = "Good evening. Welcome to KJSCE CFAS.";
}
else
{
    greeting = "Maybe you should take rest! Good night!";
}
window.alert(greeting); //DISPLAY GREETING ON PAGE LOADING
window.addEventListener("load", function () {
    var student_signup_form = document.getElementById("student-signup-modal");
    student_signup_form.addEventListener("submit", function (event) {
        var XHR = new XMLHttpRequest();
        var form_data = new FormData(student_signup_form);

        // On success
        XHR.addEventListener("load", signup_success);

        // On error
        XHR.addEventListener("error", on_error);

        // Set up request
        XHR.open("POST", "api/student_signup_submit.php");

        // Form data is sent with request
        XHR.send(form_data);
        event.preventDefault();
    });

    var student_login_form = document.getElementById("student-login-modal");
    student_login_form.addEventListener("submit", function (event) {
        var XHR = new XMLHttpRequest();
        var form_data = new FormData(student_login_form);

        // On success
        XHR.addEventListener("load", login_success);

        // On error
        XHR.addEventListener("error", on_error);

        // Set up request
        XHR.open("POST", "api/student_login_submit.php");

        // Form data is sent with request
        XHR.send(form_data);
        event.preventDefault();
    });
});