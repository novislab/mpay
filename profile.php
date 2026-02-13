<?php include 'includes/header.php'; ?>

<!-- side bar start -->
  <div class="offcanvas sidebar-offcanvas offcanvas-start" tabindex="-1" id="offcanvasLeft">
    <div class="offcanvas-header sidebar-header">
      <div class="sidebar-logo">
        <img class="img-fluid logo" src="assets/images/logo/logo.png" alt="logo" />
      </div>
      <div class="balance">
        <img class="img-fluid balance-bg" src="assets/images/background/auth-bg.jpg" alt="auth-bg" />
        <h5>Balance</h5>
        <h2>$1,06,786.65</h2>
      </div>
    </div>
    <div class="offcanvas-body">
      <div class="sidebar-content">
        <ul class="link-section">
          <li>
            <a href="index.php" class="pages">
              <i class="sidebar-icon" data-feather="credit-card"></i>
              <h3>mPay</h3>
            </a>
          </li>
          <li>
            <a href="crypto.php" class="pages">
              <i class="sidebar-icon" data-feather="dollar-sign"></i>
              <h3>Crypto</h3>
            </a>
          </li>
          <li>
            <a href="page-list.php" class="pages">
              <i class="sidebar-icon" data-feather="file-text"></i>
              <h3>Theme Pages</h3>
            </a>
          </li>
          <li>
            <a href="component.php" class="pages">
              <i class="sidebar-icon" data-feather="command"></i>
              <h3>Theme Components</h3>
            </a>
          </li>

          <li>
            <a href="profile.php" class="pages">
              <i class="sidebar-icon" data-feather="user"></i>
              <h3>Profile</h3>
            </a>
          </li>

          <li>
            <a href="signin.php" class="pages">
              <i class="sidebar-icon" data-feather="log-out"></i>
              <h3>Log out</h3>
            </a>
          </li>
        </ul>
        <div class="mode-switch">
          <ul class="switch-section">
            <li>
              <h3>RTL</h3>
              <div class="switch-btn">
                <input id="dir-switch" type="checkbox" />
              </div>
            </li>
            <li>
              <h3>Dark</h3>
              <div class="switch-btn">
                <input id="dark-switch" type="checkbox" />
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- side bar end -->

  <!-- header start -->
  <header class="section-t-space">
    <div class="custom-container">
      <div class="header-panel">
        <a class="sidebar-btn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft">
          <i class="menu-icon" data-feather="menu"></i>
        </a>
        <h2>Profile</h2>
      </div>
    </div>
  </header>
  <!-- header end -->

  <!-- profile section start -->
  <section class="section-b-space">
    <div class="custom-container">
      <div class="profile-section">
        <div class="profile-banner">
          <div class="profile-image">
            <img class="img-fluid profile-pic" src="assets/images/person/p3.png" alt="p3" />
          </div>
        </div>
        <h2>Survana Williams</h2>
        <h5>+62 78459 25623</h5>
      </div>

      <ul class="profile-list">
        <li>
          <a href="my-account.html" class="profile-box">
            <div class="profile-img">
              <i class="icon" data-feather="user"></i>
            </div>
            <div class="profile-details">
              <h4>My Account</h4>
              <img class="img-fluid arrow" src="assets/images/svg/arrow.svg" alt="arrow" />
            </div>
          </a>
        </li>
        <li>
          <a href="cards.php" class="profile-box">
            <div class="profile-img">
              <i class="icon" data-feather="credit-card"></i>
            </div>
            <div class="profile-details">
              <h4>My Cards</h4>
              <img class="img-fluid arrow" src="assets/images/svg/arrow.svg" alt="arrow" />
            </div>
          </a>
        </li>
        <li>
          <a href="change-password.html" class="profile-box">
            <div class="profile-img">
              <i class="icon" data-feather="settings"></i>
            </div>
            <div class="profile-details">
              <h4>Change Password</h4>
              <img class="img-fluid arrow" src="assets/images/svg/arrow.svg" alt="arrow" />
            </div>
          </a>
        </li>
        <li>
          <a href="setting.html" class="profile-box">
            <div class="profile-img">
              <i class="icon" data-feather="lock"></i>
            </div>
            <div class="profile-details">
              <h4>Settings</h4>
              <img class="img-fluid arrow" src="assets/images/svg/arrow.svg" alt="arrow" />
            </div>
          </a>
        </li>

        <li>
          <a href="help.html" class="profile-box">
            <div class="profile-img">
              <i class="icon" data-feather="help-circle"></i>
            </div>
            <div class="profile-details">
              <h4>Help Center</h4>
              <img class="img-fluid arrow" src="assets/images/svg/arrow.svg" alt="arrow" />
            </div>
          </a>
        </li>
        <li>
          <a href="signin.php" class="profile-box">
            <div class="profile-img">
              <i class="icon" data-feather="log-out"></i>
            </div>
            <div class="profile-details">
              <h4>Log Out</h4>
            </div>
          </a>
        </li>
      </ul>
    </div>
  </section>
  <!-- profile section end -->

  <!-- panel-space start -->
  <section class="panel-space"></section>
  <!-- panel-space end -->

  <!-- bottom navbar start -->
  <div class="navbar-menu">
    <div class="scanner-bg">
      <a href="scan-pay.php" class="scanner-btn">
        <img class="img-fluid" src="assets/images/svg/scan.svg" alt="scan" />
      </a>
    </div>

    <ul>
      <li>
        <a href="index.php">
          <div class="icon">
            <img class="unactive" src="assets/images/svg/mpay.svg" alt="mPay" />
            <img class="active" src="assets/images/svg/mpay-fill.svg" alt="mPay" />
          </div>
          <h5>mPay</h5>
        </a>
      </li>

      <li>
        <a href="crypto.php">
          <div class="icon">
            <img class="unactive" src="assets/images/svg/bitcoin.svg" alt="categories" />
            <img class="active" src="assets/images/svg/bitcoin-fill.svg" alt="categories" />
          </div>
          <h5>Crypto</h5>
        </a>
      </li>

      <li></li>

      <li>
        <a href="insight.php">
          <div class="icon">
            <img class="unactive" src="assets/images/svg/bar-chart.svg" alt="bag" />
            <img class="active" src="assets/images/svg/bar-chart-fill.svg" alt="bag" />
          </div>
          <h5>Insight</h5>
        </a>
      </li>

      <li class="active">
        <a href="profile.php">
          <div class="icon">
            <img class="unactive" src="assets/images/svg/user.svg" alt="profile" />
            <img class="active" src="assets/images/svg/user-fill.svg" alt="profile" />
          </div>
          <h5>Profile</h5>
        </a>
      </li>
    </ul>
  </div>
  <!-- bottom navbar end -->

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