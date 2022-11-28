<?php
session_start();
error_reporting(0);

include('includes/config.php');
?>
<!doctype html>
<html lang="en">
  <head>
  
    <title>PUTTUR GRAM || About Page</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
  </head>
  <body>
<?php include_once('includes/topbar.php');?>
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container py-lg-5 py-md-3">
            <h2 class="title">About Us</h2>
        </div>
    </div>
</section>
<!-- about block1 -->
<section class="wthree-row py-5 about-main" id="about">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="row">
            <div class="col-lg-6 mb-lg-0 mb-md-5 mb-4">
                <h3 class="title-small mb-2">Few words about us</h3>

                <h3 class="title-big">We make Online services simple and easy </h3>
                 <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                <p class="pt-4"><?php  echo $row['PageDescription'];?></p><?php } ?>
                <a href="#getservice" class="btn btn-style btn-primary mt-lg-5 mt-4">Get service now</a>
            </div>
            <div class="col-lg-6 text-center">
                <div class="agileits-banner-info4">
                    <img src="assets/images/image3.jpg" alt="image" class="img-fluid radius-image" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //about block1 -->


<!-- stats -->
<section class="w3l-stats py-lg-5 py-4" id="stats">
    <div class="gallery-inner container py-md-5 py-4">

        <h6 class="title-small">Our Statistics</h6>
        <h3 class="title-big mb-md-5 mb-5">Learn about Our Success</h3>
        <div class="row stats-con">
            <div class="col-md-3 col-6 stats_info counter_grid">
                <div class="grids_info">
                    <span class="fa fa-paint-brush"></span>
                    <div class="detail">
                        <h4>20+</h4>
                        <p class="">Government Services</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 stats_info counter_grid1">
                <div class="grids_info">
                    <span class="fa fa-life-ring"></span>
                    <div class="detail">
                        <h4>100%</h4>
                        <p class="">Satisfaction.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 stats_info counter_grid mt-md-0 mt-5">
                <div class="grids_info">
                    <span class="fa fa-users"></span>
                    <div class="detail">
                        <h4>20.2k</h4>
                        <p class="">Users.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 stats_info counter_grid2 mt-md-0 mt-5">
                <div class="grids_info">
                    <span class="fa fa-certificate"></span>
                    <div class="detail">
                        <h4>120+</h4>
                        <p class="">Approved Certificates</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //stats -->



 <section class="w3l-forms-9 py-5" id="">
     <div class="main-w3 py-lg-5 py-md-4 py-2">
         <div class="container">
             <div class="row align-items-center">
                 <div class="main-midd col-lg-12">
                     <h3 class="title-big">We’re here to bring you the online government services you need.</h3>
                     <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                     <h2><span class="fa mr-1 fa-phone"></span> +<?php  echo $row['MobileNumber'];?></h2><?php } ?>
                     <a class="btn btn-white btn-style mt-md-5 mt-4 mr-2" href="#Quote"> Request a Quote </a>
                     <a class="btn btn-outline-light btn-style mt-md-5 mt-4" href="contact.php"> Contact Us </a>
                 </div>
             </div>
         </div>
     </div>
 </section>
<?php include_once('includes/footer.php');?>

<!--  javascripts file here -->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/jquery-1.9.1.min.js"></script>

<script src="assets/js/theme-change.js"></script> <!-- //light and dark mode switch js -->
<!-- responsive tabs -->
<script src="assets/js/easyResponsiveTabs.js"></script>

<!--Plug-in Initialisation-->
<script type="text/javascript">
  $(document).ready(function () {
    //Horizontal Tab
    $('#parentHorizontalTab').easyResponsiveTabs({
      type: 'default', //Types: default, vertical, accordion
      width: 'auto', //auto or any width like 600px
      fit: true, // 100% fit in a container
      tabidentify: 'hor_1', // The tab groups identifier
      activate: function (event) { // Callback function if tab is switched
        var $tab = $(this);
        var $info = $('#nested-tabInfo');
        var $name = $('span', $info);
        $name.text($tab.text());
        $info.show();
      }
    });
  });
</script>
<script type="text/javascript">
  $(document).ready(function () {
    //Horizontal Tab
    $('#parentHorizontalTab1').easyResponsiveTabs({
      type: 'default', //Types: default, vertical, accordion
      width: 'auto', //auto or any width like 600px
      fit: true, // 100% fit in a container
      tabidentify: 'hor_2', // The tab groups identifier
      activate: function (event) { // Callback function if tab is switched
        var $tab = $(this);
        var $info = $('#nested-tabInfo');
        var $name = $('span', $info);
        $name.text($tab.text());
        $info.show();
      }
    });
  });
</script>

<!-- owl carousel -->
<script src="assets/js/owl.carousel.js"></script>
<!-- script for banner slider-->
<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      responsiveClass: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1
        },
        480: {
          items: 1
        },
        667: {
          items: 1
        },
        1000: {
          items: 1
        }
      }
    })
  })
</script>
<!-- //script -->
<!-- owl carousel -->
<!-- script for tesimonials carousel slider -->
<script>
  $(document).ready(function () {
    $("#owl-demo1").owlCarousel({
      loop: true,
      nav: false,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        736: {
          items: 1,
          nav: false
        }
      }
    })
  })
</script>
<!-- //script for tesimonials carousel slider -->

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!--/MENU-JS-->
<script>
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!--//MENU-JS-->

<script src="assets/js/bootstrap.min.js"></script><!-- //bootstrap js -->

</body>

</html>