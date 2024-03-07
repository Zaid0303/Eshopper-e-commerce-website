<?php
include('includes/header.php');
include('includes/topbar.php');
include('includes/navbar.php');
?>

<!-- Register Form Start -->
<div class="container pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Login</span></h2>
    </div>
    <div class="contact-form">
        <div id="success"></div>
        <form name="sentMessage" id="contactForm" novalidate="novalidate">
            <div class="control-group">
                <input type="email" class="form-control" id="email" placeholder="Your Email" required="required"
                    data-validation-required-message="Please enter your email" />
                <p class="help-block text-danger"></p>
            </div>
            <div class="control-group">
                <input type="password" class="form-control" id="password" placeholder="Password" required="required"
                    data-validation-required-message="Please enter a password" />
                <p class="help-block text-danger"></p>
            </div>
            <div>
                <input style="width: 100%" class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton"
                    value="Login">
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