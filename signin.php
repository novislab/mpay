<?php include 'includes/header.php'; ?>

<!-- header starts -->
  <div class="auth-header">
    <a href="index.php"> <i class="back-btn" data-feather="arrow-left"></i> </a>

    <img class="img-fluid img" src="assets/images/authentication/1.svg" alt="v1" />

    <div class="auth-content">
      <div>
        <h2>Welcome back !!</h2>
        <h4 class="p-0">Fill up the form</h4>
      </div>
    </div>
  </div>
  <!-- header end -->

  <!-- login section start -->
  <form class="auth-form" target="_blank">
    <div class="custom-container">
      <div class="form-group">
        <label for="inputusername" class="form-label">Email id</label>
        <div class="form-input">
          <input type="email" class="form-control" id="inputusername" placeholder="Enter Your Email" />
        </div>
      </div>

      <div class="form-group">
        <label for="inputpin" class="form-label">Pin</label>
        <div class="form-input">
          <input type="password" class="form-control" id="inputpin" placeholder="Enter Your pin" />
        </div>
      </div>
      <div class="remember-option mt-3">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
          <label class="form-check-label" for="flexCheckDefault">Remember me</label>
        </div>
        <a class="forgot" href="forgot-password.html">Forgot Pin?</a>
      </div>

      <a href="index.php" class="btn theme-btn w-100">Sign In</a>
      <h4 class="signup">Don`t have an account ?<a href="signup.html"> Sign up</a></h4>

      <div class="division">
        <span>OR</span>
      </div>

      <a href="https://www.google.co.in/" target="_blank" class="btn gray-btn mt-3"> <img class="img-fluid google"
          src="assets/images/svg/google.svg" alt="google" /> Continue with Google</a>
      <a href="https://www.facebook.com/login/" target="_blank" class="btn gray-btn mt-3"> <img class="img-fluid google"
          src="assets/images/svg/facebook.svg" alt="google" /> Continue with facebook</a>
    </div>
  </form>
  <!-- login section start -->

  <!-- feather js -->
  <script src="assets/js/feather.min.js"></script>
  <script src="assets/js/custom-feather.js"></script>

  <!-- bootstrap js -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <!-- script js -->
  <script src="assets/js/script.js"></script>


<?php include 'includes/footer.php'; ?>