<?php include 'includes/header.php'; ?>

<!-- header start -->
  <header class="section-t-space">
    <div class="custom-container">
      <div class="header-panel">
        <a href="index.php" class="back-btn">
          <i class="icon" data-feather="arrow-left"></i>
        </a>
        <h2>Withdraw</h2>
      </div>
    </div>
  </header>
  <!-- header end -->

  <!-- Withdraw section starts -->
  <section class="section-b-space">
    <div class="custom-container">
      <div class="title">
        <h2>Money withdraw from</h2>
      </div>
      
      <ul class="select-bank">
        <li>
          <div class="balance-box active">
            <input class="form-check-input" type="radio" name="flexRadio" checked />
            <img class="img-fluid balance-box-img active" src="assets/images/svg/balance-box-bg-active.svg"
              alt="balance-box" />
            <img class="img-fluid balance-box-img unactive" src="assets/images/svg/balance-box-bg.svg"
              alt="balance-box" />
            <div class="balance-content">
              <h6>Balance</h6>
              <h3>$25,263.36</h3>
              <h5>**** **** **** 2563</h5>
            </div>
          </div>
        </li>
        <li>
          <div class="balance-box">
            <input class="form-check-input" type="radio" name="flexRadio" />
            <img class="img-fluid balance-box-img active" src="assets/images/svg/balance-box-bg-active.svg"
              alt="balance-box" />
            <img class="img-fluid balance-box-img unactive" src="assets/images/svg/balance-box-bg.svg"
              alt="balance-box" />
            <div class="balance-content">
              <h6>Balance</h6>
              <h3>$25,263.36</h3>
              <h5>**** **** **** 1235</h5>
            </div>
          </div>
        </li>
      </ul>
      <div class="title">
        <h2>Money withdraw to</h2>
      </div>
      <form class="auth-form p-0" target="_blank">
        <div class="form-group">
          <label for="inputbankname" class="form-label">Bank name</label>
          <select id="inputbankname" class="form-select">
            <option selected>Select bank</option>
            <option>HDFC Bank</option>
            <option>State Bank of India</option>
            <option>bank of baroda</option>
            <option>ICICI Bank</option>
          </select>
        </div>

        <div class="form-group">
          <label for="inputamount" class="form-label">Amount</label>
          <input type="text" class="form-control" id="inputamount" placeholder="Enter amount" />
        </div>

        <ul class="amount-list">
          <li>
            <div class="amount">$50</div>
          </li>
          <li>
            <div class="amount">$100</div>
          </li>
          <li>
            <div class="amount">$200</div>
          </li>
        </ul>
        <a href="#done" class="btn theme-btn w-100" data-bs-toggle="modal">Transfer</a>
      </form>
    </div>
  </section>
  <!-- Withdraw section end -->

  <!-- successful transfer modal start -->
  <div class="modal successful-modal fade" id="done" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title">Successfully Transfer</h2>
        </div>
        <div class="modal-body">
          <div class="done-img">
            <img class="img-fluid" src="assets/images/svg/done.svg" alt="done" />
          </div>
          <h2>$49.85</h2>
          <h3>Money has been successfully withdraw from **63 to **47</h3>
          <a href="index.php" class="btn theme-btn successfully w-100">Back to home</a>
        </div>
        <button type="button" class="btn close-btn" data-bs-dismiss="modal">
          <i class="icon" data-feather="x"></i>
        </button>
      </div>
    </div>
  </div>
  <!-- successful transfer modal end -->

  <!-- feather js -->
  <script src="assets/js/feather.min.js"></script>
  <script src="assets/js/custom-feather.js"></script>

  <!-- bootstrap js -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <!-- script js -->
  <script src="assets/js/script.js"></script>


<?php include 'includes/footer.php'; ?>