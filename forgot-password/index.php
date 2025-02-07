<?php
include("../include/session.php");

$page_publisher = "https://facebook.com/melvinjonesrepol";
$page_modified_time = "2023-10-08T13:37:36+00:00";
$page_title = "Forgot Password - Digital Barangay";
$page_description = "";
$page_keywords = "digital barangay, lgu, lgu management system";
$page_image = "http://localhost/lgu/images/cover.png";
$page_author = "Melvin Jones Repol";
$page_canonical = "http://localhost/lgu/forgot-password/";
$page_url = $page_canonical;
$directory = "../";
$directory_img = $directory;
$isForm = true;

include("../include/header.php");

?>


<body class="d-flex flex-column min-vh-100">
  <?php include("../include/nav.php"); ?>

  <main>
    <div class="card mb-3">
      <div class="row g-0">
        <div class="col-md-7">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <h1>Forgot Password</h1>
                <br>
                <div class="form-group">
                  <input type="text" class="" id="email" required> 
                  <label for="email">Email</label>
                </div>
                <div class="form-group mt-2">
                  <button id="forgot" class="btn btn-primary px-4">Forgot</button>
                  <a class="accnt px-3" href="../login?utm_source=forgot-password">Login</a>
                  <br><br>
                  <a class="fpass" href="../signup?utm_source=forgot-password">No account yet?</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </main>

  <?php include("../include/footer.php"); ?>
</body>

</html>