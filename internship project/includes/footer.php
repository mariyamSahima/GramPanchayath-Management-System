<?php error_reporting(0);
include('includes/config.php');
?>
<footer class="py-5">
  <div class="container py-lg-4 py-2">
    <div class="row footer-top">
      <div class="col-lg-6 footer-grid_section_1its footer-text">
        <div class="footer-title">
          <h3>About Us</h3>
        </div>
        <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
        <p class="mt-lg-4 mt-3 mb-4 pb-lg-2"><?php  echo $row['PageDescription'];?>.</p><?php } ?>
          <a href="contact.php" class=" link-style p-0">Contact
            <span class="fa fa-chevron-right"></span>
        </a>
      </div>
      <div class="col-lg-6 col-md-6 footer-grid_section_1its mt-lg-0 mt-5">
        <div class="footer-title">
          <h3>Contact Us</h3>
        </div>
        <div class="footer-text mt-4">
            <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
          <p><strong>Address :</strong> <?php  echo $row['PageDescription'];?>.</p>
          <p class="my-2"><strong>Phone :</strong> <a href="tel:+<?php  echo $row['MobileNumber'];?>">+<?php  echo $row['MobileNumber'];?></a></p>
          <p><strong>Email :</strong> <a href="<?php  echo $row['Email'];?>"><?php  echo $row['Email'];?></a></p>
          <h4>Opening hours</h4>
                    <p>Mon-Fri: <?php  echo $row['Timing'];?></p>
                    <p>Sat-Sun: Closed</p><?php } ?>
          <!-- social icons -->
          <ul class="top-right-info mt-4">
            <li class="facebook-w3">
              <a href="#facebbok">
                <span class="fa fa-facebook-f"></span>
              </a>
            </li>
            <li class="twitter-w3">
              <a href="#twitter">
                <span class="fa fa-twitter"></span>
              </a>
            </li>
            <li class="google-w3">
              <a href="#google">
                <span class="fa fa-google-plus"></span>
              </a>
            </li>
            <li class="dribble-w3">
              <a href="#dribble">
                <span class="fa fa-dribbble"></span>
              </a>
            </li>
          </ul>
          <!-- //social icons -->
        </div>
      </div>
     
    </div>
  </div>
</footer>
<!-- //footer -->
<!-- copyright -->
<div class="cpy-right text-center py-4">
  <p>PUTTUR GRAM PANCHAYAT</p>
</div>
<!-- //copyright -->

<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
  <span class="fa fa-level-up" aria-hidden="true"></span>
</button>
<script>
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function () {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("movetop").style.display = "block";
    } else {
      document.getElementById("movetop").style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>