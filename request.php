<?php include 'includes/header.php'; ?>

<!-- header start -->
  <header class="section-t-space">
    <div class="custom-container">
      <div class="header-panel">
        <a href="index.php" class="back-btn">
          <i class="icon" data-feather="arrow-left"></i>
        </a>
        <h2>Request Money</h2>
      </div>
    </div>
  </header>
  <!-- header end -->

  <!-- request section starts -->
  <section>
    <div class="custom-container">
      <div class="title">
        <h2>Request money to</h2>
      </div>
      <div class="quick-send pb-4">
        <a href="request-person.html" class="profile new-profile">
          <div class="new-image">
            <i class="icon" data-feather="plus"></i>
          </div>
        </a>

        <div class="profile">
          <a href="request-person.html">
            <img class="img-fluid person-img" src="assets/images/person/p1.png" alt="p1" />
          </a>
          <h5>Mike</h5>
        </div>

        <div class="profile">
          <a href="request-person.html">
            <img class="img-fluid person-img" src="assets/images/person/p2.png" alt="p2" />
            <h5>Michael</h5>
          </a>
        </div>

        <div class="profile">
          <a href="request-person.html">
            <img class="img-fluid person-img" src="assets/images/person/p3.png" alt="p3" />
            <h5>Kristin</h5>
          </a>
        </div>

        <div class="profile">
          <a href="request-person.html">
            <img class="img-fluid person-img" src="assets/images/person/p4.png" alt="p4" />
            <h5>Trunk</h5>
          </a>
        </div>

        <div class="profile">
          <a href="request-person.html">
            <img class="img-fluid person-img" src="assets/images/person/p5.png" alt="p5" />
            <h5>Johnny</h5>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="section-b-space">
    <div class="custom-container">
      <form class="auth-form p-0" target="_blank">
        <div class="form-group">
          <label for="inputmessage" class="form-label">Message</label>
          <div class="form-input">
            <textarea class="form-control" id="inputmessage" rows="3" placeholder="Write here"></textarea>
          </div>
        </div>

        <div class="form-group">
          <label for="inputamount1" class="form-label">Amount</label>
          <input type="text" class="form-control" id="inputamount1" />
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
  <!-- request section end -->

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
          <h3><span class="theme-color">Diane</span> has got an application for money.</h3>
          <a href="index.php" class="btn theme-btn successfully w-100">Back to home</a>
        </div>
        <button type="button" class="btn close-btn" data-bs-dismiss="modal">
          <i class="icon" data-feather="x"></i>
        </button>
      </div>
    </div>
  </div>
  <!-- successful transfer modal end -->

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