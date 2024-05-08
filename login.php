<?php
include('includes/header.php');
include('includes/topbar.php');
include('includes/navbar.php');
?>
<?php 
include('config.php');

if(isset($_POST['login'])){
    $login_email =  $_POST['email'];
    $login_pass = $_POST['password'];

    $verify_email = "SELECT * FROM `eshopper_users` where `user_email` = '$login_email'";
    $verify_result = mysqli_query($connection, $verify_email);
    if($verify_result){
        if(mysqli_num_rows($verify_result) == 1){
                echo "<script> 
                alert('Login successful');
                window.location.href='index.php'
                </script>";
            }else {
                echo "<script> 
                alert('Invalid Password');
                window.location.href='login.php'
                </script>";
            }
        } else {
            echo "<script> 
            alert('Invalid Email');
            window.location.href='login.php'
            </script>";
        }
    } 
?>
<!-- Register Form Start -->
<div class="container pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Login</span></h2>
    </div>
    <div class="contact-form">
        <div id="success"></div>
        <form action="login.php" method="POST" class="form-group">
            <div class="control-group">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required="required"
                    data-validation-required-message="Please enter your email" />
                <p class="help-block text-danger"></p>
            </div>
            <div class="control-group">
                <input type="password" class="form-control" name="password" placeholder="Password" required="required"
                    data-validation-required-message="Please enter a password" />
                <p class="help-block text-danger"></p>
            </div>
            <div>
                <input type="submit" class="btn btn-primary py-2 px-4" value="Login" name="login"  style="width: 100%">
            </div>

            <div class="text-center my-3">
                <p>Not a member? <a href="register.php">Register</a></p>
            </div>

            <div class="text-center my-3">
                <h5 class="section-title px-5"><span class="px-2">OR</span></h5>
            </div>

            <a class="btn btn-primary btn-lg btn-block py-2 px-4" style="background-color: #ff0e0e;" href="#!" role="button">
                <i class="fab fa-google me-2"></i> Continue with Google
            </a>

            <a class="btn btn-primary btn-lg btn-block py-2 px-4" style="background-color: #316FF6;" href="#!" role="button">
                <i class="fab fa-facebook-f me-2"></i> Continue with Facebook
            </a>
        </form>
    </div>
</div>
<!-- Register Form End -->

<?php
include('includes/footer.php');
?>