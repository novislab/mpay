<?php include 'includes/header.php'; ?>

<!-- scan-pay section starts -->
  <section class="scan-section section-b-space">
    <div class="custom-container h-100">
      <div class="header-panel scan-header">
        <a href="index.php" class="back-btn">
          <i class="icon" data-feather="x"></i>
        </a>
        <div class="right-btn d-flex gap-2">
          <a href="#" class="back-btn">
            <i class="icon" data-feather="zap"></i>
          </a>
          <a href="#">
            <img class="back-btn code" src="assets/images/svg/code.svg" alt="code">
          </a>
        </div>
      </div>
      <div class="d-flex align-items-center justify-content-center h-100">
        <img class="qrcode" src="assets/images/qrcode-scanner.svg" alt="qrcode">
      </div>
    </div>
    <div class="contact-panel">
      <div class="gallary-btn">
        <button type="button" class="btn theme-btn w-100">Upload from gallery</button>
        <input type="file" name="myfile" />

      </div>

      <form class="theme-form mt-3" target="_blank">
        <div class="form-group">
          <div class="form-input">
            <input type="text" class="form-control" id="inputusername" placeholder="Search here...">
            <img class="contact-img" src="assets/images/svg/contact.svg" alt="contact">
          </div>
        </div>
      </form>

      <div class="quick-send mt-3">
        <div class="profile">
          <a href="pay-money.php">
            <img class="img-fluid person-img" src="assets/images/person/p1.png" alt="p1" />
          </a>
          <h5>Mike</h5>
        </div>

        <div class="profile">
       <a href="pay-money.php">
            <img class="img-fluid person-img" src="assets/images/person/p2.png" alt="p2" />
            <h5>Michael</h5>
          </a>
        </div>

        <div class="profile">
          <a href="pay-money.php">
            <img class="img-fluid person-img" src="assets/images/person/p3.png" alt="p3" />
            <h5>Kristin</h5>
          </a>
        </div>

        <div class="profile">
          <a href="pay-money.php">
            <img class="img-fluid person-img" src="assets/images/person/p4.png" alt="p4" />
            <h5>Trunk</h5>
          </a>
        </div>

        <div class="profile">
         <a href="pay-money.php">
            <img class="img-fluid person-img" src="assets/images/person/p5.png" alt="p5" />
            <h5>Johnny</h5>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- scan-pay section end -->

  <!-- swiper js -->
  <script src="assets/js/swiper-bundle.min.js"></script>
  <script src="assets/js/custom-swiper.js"></script>

  <!-- feather js -->
  <script src="assets/js/feather.min.js"></script>
  <script src="assets/js/custom-feather.js"></script>

  <!-- bootstrap js -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <!-- script js -->
  <script src="assets/js/script.js"></script>


<?php include 'includes/footer.php'; ?>