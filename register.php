<?php
include('includes/header.php');
include('includes/topbar.php');
include('includes/navbar.php');
include('config.php');

if (isset($_POST['register'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone_no = $_POST['phone_no'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $hashpass = password_hash($pass, PASSWORD_BCRYPT);
    $check_email = "SELECT * FROM users where `u_email` = '$email'";
    $check_email_result = mysqli_query($connection, $check_email);
    if (mysqli_num_rows($check_email_result) > 0) {
        echo "
            <script>
            alert('Invaild Email');
            </script>
            ";
    } else {
        $insert_user = "INSERT INTO `users` (`u_id`, `u_fname`, `u_lname`, `u_number`, `u_address`, `u_email`, `u_password`)
             VALUES (NULL, '$fname', '$lname', '$phone_no', '$address', '$email', '$hashpass')";
        if ($insert_user) {
            echo "
                <script>
                alert('Registration Successfull');
                </script>
                ";
        } else {
            echo "
                <script>
                alert('Registration failed');
                </script>
                ";
        }

    }
}

?>

<!-- Register Form Start -->
<div class="container pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Register</span></h2>
    </div>
    <div class="contact-form">
        <div id="success"></div>
        <form action="register.php" method="POST" class="form-group">
            <div class="row">
                <div class="col-md-6 control-group">
                    <input type="text" class="form-control" name="fname" placeholder="Frist Name" required="required"
                        data-validation-required-message="Please enter your first name" />
                    <p class="help-block text-danger"></p>
                </div>
                <div class="col-md-6 control-group">
                    <input type="text" class="form-control" name="lname" placeholder="Last Name" required="required"
                        data-validation-required-message="Please enter your last name" />
                    <p class="help-block text-danger"></p>
                </div>
                <div class="col-md-6 control-group">
                    <input type="number" class="form-control" name="phone_no" placeholder="Phone Number"
                        required="required" data-validation-required-message="Please enter your phone number" />
                    <p class="help-block text-danger"></p>
                </div>
                <div class="col-md-6 control-group">
                    <input type="text" class="form-control" name="address" placeholder="Address" required="required"
                        data-validation-required-message="Please enter your address" />
                    <p class="help-block text-danger"></p>
                </div>
            </div>

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

            <div class="">
                <input type="submit" class="btn btn-primary py-2 px-4" name="register" value="Register"
                    style="width: 100%" id="sendMessageButton">
            </div>

            <div class="text-center my-3">
                <p>Already a member? <a href="login.php">login</a></p>
            </div>

            <div class="text-center my-3">
                <h5 class="section-title px-5"><span class="px-2">OR</span></h5>
            </div>

            <a class="btn btn-primary btn-lg btn-block py-2 px-4" style="background-color: #ff0e0e;" href="#!"
                role="button">
                <i class="fab fa-google me-2"></i> Continue with Google
            </a>

            <a class="btn btn-primary btn-lg btn-block py-2 px-4" style="background-color: #316FF6;" href="#!"
                role="button">
                <i class="fab fa-facebook-f me-2"></i> Continue with Facebook
            </a>
        </form>
    </div>
</div>
<!-- Register Form End -->

<?php
include('includes/footer.php');
?>