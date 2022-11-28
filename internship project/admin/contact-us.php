<?php session_start();
//DB conncetion
include_once('includes/config.php');
//validating Session
if (strlen($_SESSION['aid']==0)) {
  header('location:logout.php');
  } else{
if(isset($_POST['submit'])){
//getting post values
    $pagetitle=$_POST['pagetitle'];
$pagedes=$_POST['pagedes'];
$mobnum=$_POST['mobnum'];
$email=$_POST['email'];
$timing=$_POST['timing'];
$query="update tblpage set PageTitle='$pagetitle',PageDescription='$pagedes', Email='$email', MobileNumber='$mobnum', Timing='$timing' where  PageType='contactus'";
$result =mysqli_query($con, $query);
if ($result) {
echo '<script>alert("Contact us has been updated successfully.")</script>';
 
} 
else {
    echo "<script>alert('Something went wrong. Please try again.');</script>";  

}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>PUTTUR GRAM |Contact Us Page</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    
<style type="text/css">
label{
    font-size:16px;
    font-weight:bold;
    color:#000;
}

</style>
  

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

<?php include_once('includes/sidebar.php');?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
          <?php include_once('includes/topbar.php');?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
                    <h1 class="h3 mb-4 text-gray-800">Contact Us</h1>
<form method="post">
    <?php 

$query=mysqli_query($con,"select * from tblpage where PageType='contactus'");
$cnt=1;
while($row=mysqli_fetch_array($query)){
?>
  <div class="row">

                        <div class="col-lg-8">

                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Update Contact Us</h6>
                                </div>
                                <div class="card-body">
     <div class="form-group">
                            <label>Page Title</label>
                                            <input type="text" class="form-control" id="pagetitle" name="pagetitle" required="true" value="<?php echo $row['PageTitle'];?>">
                                        </div>
                                        <div class="form-group">
                                             <label>Page Description</label>
                                             <textarea class="form-control" name="pagedes" id="pagedes" required="true"><?php echo $row['PageDescription'];?></textarea>
                                        </div>
                                        <div class="form-group">
                            <label>Email</label>
                                            <input type="text" class="form-control" id="email" name="email" required="true" value="<?php echo $row['Email'];?>">
                                        </div>
                                        <div class="form-group">
                            <label>Mobile Number</label>
                                            <input type="text" class="form-control" id="mobnum" name="mobnum" required="true" value="<?php echo $row['MobileNumber'];?>">
                                        </div>
                                        <div class="form-group">
                            <label>Timing</label>
                                            <input type="text" class="form-control" id="timing" name="timing" required="true" value="<?php echo $row['Timing'];?>">
                                        </div>
                                    <?php  $cnt=$cnt+1; } ?>
        <div class="form-group">
                                 <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" id="submit">                           
                             </div>                                        

                                </div>
                            </div>

                        </div>

               

                    </div>
</form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           <?php include_once('includes/footer.php');?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
           <?php include_once('includes/footer2.php');?>



    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>
</html>
<?php } ?>