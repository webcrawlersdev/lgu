<footer class="mt-5">
  <div class="container">
    <div class="row footer-row">
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <h5>Digital Barangay</h5>
        <p>Republic of the Philippines</p>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
        </ul>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <!-- HEADS UP 
      
        Most of the government sites are hosted in .gov.ph domain including local government units.
      
      -->
        <h5>About GOVPH</h5>
        <p>Learn more about the Philippine goverment, its structure, how government works and the people behind it.</p>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="//www.gov.ph">Official Gazette</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="//data.gov.ph">Open Data Portal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="//www.gov.ph/feedback/idulog/">Send us your feedback</a>
          </li>
        </ul>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <h5>Government Link</h5>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="//president.gov.ph">Office of the President</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="//ovp.gov.ph">Office of the Vice President</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="//www.senate.gov.ph">Senate of the Philippines</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="//www.congress.gov.ph">House of Representatives</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="//sc.judiciary.gov.ph">Supreme Court</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="//ca.judiciary.gov.ph">Court of Appeals</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="//sb.judiciary.gov.ph">Sandiganbayan</a>
          </li>
        </ul>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="form-check form-switch" id="themeswitch">
        </div>
      </div>
    </div>
    <br>
    <a href="#" class="px-1" target="_blank">
      <i class="fa-brands fa-facebook"></i>
    </a>
    <a href="#" class="px-1" target="_blank">
      <i class="fa-brands fa-instagram"></i>
    </a>
    <a href="#" class="px-1" target="_blank">
      <i class="fa-brands fa-twitter"></i>
    </a>
    <a href="#" class="px-1" target="_blank">
      <i class="fa-brands fa-youtube"></i>
    </a>
    <br>
    <?php
    $currentDate = new DateTime();
    $year = $currentDate->format("Y");
    ?>
    <span>© <?php echo $year; ?> LGU Management System</span>
</footer>
<script src="<?php echo $directory; ?>assets/jquery-3.7.1.min.js"></script>
<script src="<?php echo $directory; ?>assets/bootstrap-5.3.0-alpha1.min.js"></script>
<script src="<?php echo $directory; ?>js/main.js"></script>
<script>
  if ("serviceWorker" in navigator) {
    navigator.serviceWorker
      .register("<?php echo $directory; ?>sw.js")
      .then((reg) => {
        if (reg.installing) {
          console.log("Service worker installing");
        } else if (reg.waiting) {
          console.log("Service worker installed");
        } else if (reg.active) {
          console.log("Service worker active");
        }
      })
      .catch((err) => {
        console.error("Service worker failed: ", err);
      });
  }
</script>