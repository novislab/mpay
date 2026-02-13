<?php include 'includes/header.php'; ?>

<!-- header start -->
  <header class="section-t-space">
    <div class="custom-container">
      <div class="header-panel">
        <a href="scan-pay.php" class="back-btn">
          <i class="icon" data-feather="arrow-left"></i>
        </a>
        <h2>Paying money</h2>
      </div>
    </div>
  </header>
  <!-- header end -->

  <!-- pay money section starts -->
  <section class="pay-money section-b-space">
    <div class="custom-container">
      <div class="profile-pic">
        <img class="img-fluid img" src="assets/images/person/p3.png" alt="p3" />
      </div>
      <h3 class="person-name">Paying money to Kristin</h3>
      <h5 class="upi-id">UPI ID : kristin12@hdfcbank</h5>
      <div class="form-group">
        <div class="form-input mt-4">
          <input type="text" class="form-control" id="inputamount" />
        </div>
      </div>
      <div class="form-group">
        <div class="form-input mt-3">
          <input type="text" class="form-control reason" id="inputreason" placeholder="Enter reason" />
        </div>
      </div>

      <a href="pay-select-card.html" class="btn theme-btn w-100">Pay now</a>
    </div>
  </section>
  <!-- pay money section end -->

  <!-- feather js -->
  <script src="assets/js/feather.min.js"></script>
  <script src="assets/js/custom-feather.js"></script>



  <!-- bootstrap js -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <!-- script js -->
  <script src="assets/js/script.js"></script>


<?php include 'includes/footer.php'; ?>