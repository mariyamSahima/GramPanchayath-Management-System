<?php
session_start();
error_reporting(0);

include('includes/config.php');

if(isset($_POST['submit']))
{

$sid= $_GET['sid'];
 $requestid=mt_rand(100000000, 999999999);
 $name=$_POST['name'];
  $mobnum=$_POST['mobnum'];
 $email=$_POST['email'];
$dos=$_POST['dos'];
  $tom=$_POST['tom'];
 $address=$_POST['address'];
 $state=$_POST['state'];
  $city=$_POST['city'];
 $message=$_POST['message'];

$query=mysqli_query($con,"insert into tblrequest(ServiceID,RequestID,Name,Email,DateofSanitization,TimeofSanitization,Address,MobileNumber,State,City,Message) values('$sid','$requestid','$name','$email','$dos','$tom','$address','$mobnum','$state','$city','$message') ");
if($query)
{

  echo '<script>alert("Your request has been send suceessfully.Your  Request Number is "+"'.$requestid.'")</script>';
 echo "<script>window.location.href ='services.php'</script>";
} else {
 echo "<script>alert('Something went wrong.');</script>";      
}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>PUTTUR GRAM|| Request Form</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
  </head>
  <body>
<?php include_once('includes/topbar.php');?>
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container py-lg-5 py-md-3">
            <h2 class="title">Request Form</h2>
        </div>
    </div>
</section>
<!-- contact block -->
<section class="wthree-row py-5 about-main" id="contact">
    <div class="container py-lg-5 py-md-4 py-2">
        
        
        <div class="map-content-9 pt-lg-5">
            <h5 class="mb-sm-4 mb-3">Book Your Government Service!!</h5>
            <form method="post">
                <div class="twice-two">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name" required="true">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="true">
                </div>
                <div class="twice-two">
                    <input type="date" class="form-control" name="dos" id="dos" placeholder="Name" required="true">
                    <input type="time" class="form-control" name="tom" id="tom" placeholder="Email" required="true">
                </div>
                <div class="twice-two">
                   <input type="text" class="form-control" name="mobnum" id="mobnum" placeholder="Mobile Number" required="true">
                    <input type="text" class="form-control" name="address" id="address" placeholder="Address" required="true">
                   
                </div>
                <div class="twice-two">
                    <input type="text" class="form-control" name="state" id="state" placeholder="State" required="true">
                    <input type="text" class="form-control" name="city" id="city" placeholder="City" required="true">
                </div>
                <textarea  class="form-control" id="message" name="message" placeholder="Message(if any)"></textarea>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary btn-style mt-4" name="submit">Request</button>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- //contact block -->

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