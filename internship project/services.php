<?php
session_start();
error_reporting(0);

include('includes/config.php');
?>
<!doctype html>
<html lang="en">
  <head>
    
    <title>PUTTUR GRAM</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
  </head>
  <body>
<?php include_once('includes/topbar.php');?>
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container py-lg-5 py-md-3">
            <h2 class="title">Our Services</h2>
        </div>
    </div>
</section>
<section class="w3l-servicesblock py-5" id="services">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="row">
            <div class="col-lg-6 about-right-faq align-self">
                <span class="title-small mb-2">Our services</span>
                <h3 class="title-big">The Importance of Digital Gram Panchayat Software</h3>
                <p class="mt-lg-4 mt-3 mb-lg-5 mb-4">The Panchayat Samiti resist on the part of conveying the information 
				and knowledge to rural areas. The Rural Area and people are still not developed and are misled with various information. They lack proper technology and education to 
				understand the process. To fill the gap between villages and Panchyat Samiti, we have developed a 'Digital Gram Panchayat Software'.</p>
                <div class="progress-info info1">
                    <h6 class="progress-tittle">Professionalism <span class="">80%</span></h6>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 80%"
                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
                <div class="progress-info info2">
                    <h6 class="progress-tittle">Quality <span class="">95%</span>
                    </h6>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 95%"
                            aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
                <div class="progress-info info3">
                    <h6 class="progress-tittle">Reliability <span class="">75%</span></h6>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 75%"
                            aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 left-wthree-img mt-lg-0 mt-4">
                <img src="assets/images/services.jpg" alt="" class="img-fluid radius-image">
            </div>
        </div>
    </div>
</section>
<!-- our products -->

<div class="w3l-news" id="news">
    <section id="grids5-block" class="py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <span class="title-small mb-2">Services Available</span>
            <h3 class="title-big">Use Our Service</h3>

            <div class="row mt-sm-5 mt-4">
               <?php
$ret=mysqli_query($con,"select * from tblservices");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
               
                <div class="col-lg-4 col-md-6 mt-lg-4 mt-4">
                    <div class="grids5-info">
                        
                        <div class="blog-info">
                            <p class="date"><span class="fa fa-calendar mr-2"></span> <?php echo $row['CreationDate'];?></p>
                            <h4><a href="#blog-single"><?php echo $row['ServiceName'];?></a></h4>
                            <p><?php echo $row['ServiceDetail'];?></p>
                            <p><strong>Service Price</strong>: ₹<?php echo $row['Price'];?></p>
                            <a href="request.php?sid=<?php  echo $row['ID'];?>" class=" link-style p-0 mt-4">Get a Quote
                                <span class="fa fa-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div><?php } ?>
            </div>
        </div>
    </section>
</div>
<!-- //our products -->
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