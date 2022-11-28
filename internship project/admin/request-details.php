<?php session_start();
//DB conncetion
include_once('includes/config.php');
error_reporting(0);
//validating Session
if (strlen($_SESSION['aid']==0)) {
  header('location:logout.php');
  } else{


if(isset($_POST['submit']))
  {
    
    $rid=$_GET['rid'];
     $reqid=$_GET['reqid'];
    $ressta=$_POST['status'];
    $remark=$_POST['remark'];
    $query=mysqli_query($con,"insert into tbltracking(RequestID,Status,Remark) values('$reqid','$ressta','$remark')");
   $query1=mysqli_query($con, "update   tblrequest set Remark='$remark', Status='$ressta' where ID='$rid'");
    if ($query) {
   
    echo '<script>alert("Request Has been updated.")</script>';
    echo "<script type='text/javascript'> document.location ='all-request.php'; </script>";
  }
  else
    {
    
      echo '<script>alert("Something Went Wrong. Please try again.")</script>';
    }

  
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>PUTTUR GRAM Request Details</title>

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
                    <h1 class="h3 mb-4 text-gray-800">Request Details# <?php echo intval($_GET['reqid']);?></h1>
<div class="row">
<?php 
$rid=intval($_GET['rid']);
$query=mysqli_query($con,"select * from tblrequest
join tblservices on tblservices.ID=tblrequest.ServiceID
where  tblrequest.ID='$rid'");
while($row=mysqli_fetch_array($query)){ 
    ?>
<!-- personal information --->
                        <div class="col-lg-6">

                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Personal Information</h6>
                                </div>
                                <div class="card-body">
   
 <table class="table table-bordered"  width="100%" cellspacing="0">
    <tr>
    <th>Full Name</th> 
    <td><?php echo $row['Name'];?></td>
    </tr>
<tr>
    <th>Email</th> 
    <td><?php echo $row['Email'];?></td>
    </tr>
     <tr>
    <th>Mobile Number</th> 
    <td><?php echo $row['MobileNumber'];?></td>
    </tr>

     <tr>
    <th>Date of application</th> 
    <td><?php echo $row['DateofSanitization'];?></td>
    </tr>


    <tr>
    <th>Time of application</th> 
    <td><?php echo $row['TimeofSanitization'];?></td>
    </tr>


     <tr>
    <th>Address</th> 
    <td><?php echo $row['Address'];?></td>
    </tr>


     <tr>
    <th>State</th> 
    <td><?php echo $row['State'];?></td>
    </tr>

    <tr>
    <th>City</th> 
    <td><?php echo $row['City'];?></td>
    </tr>

    <tr>
    <th>Message</th> 
    <td><?php echo $row['Message'];?></td>
    </tr>
    <tr>
    <th>Request Date</th> 
    <td><?php echo $row['RequestDate'];?></td>
    </tr>
 </table>

        
                                    
                                </div>
                            </div>
                        </div>

<!-- Test Information --->
                         <div class="col-lg-6">

                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Service Information</h6>
                                </div>
                                <div class="card-body">

 <table class="table table-bordered"  width="100%" cellspacing="0">
    <tr>
    <th>Request Number</th> 
    <td><?php echo $row['RequestID'];?></td>
    </tr>

    <tr>
    <th>Service Name</th> 
    <td><?php echo $row['ServiceName'];?></td>
    </tr>


    <tr>
    <th>Service Detail</th> 
    <td><?php echo $row['ServiceDetail'];?></td>
    </tr>
<tr>
    <th>Price</th> 
    <td><?php echo $row['Price'];?></td>
    </tr>
   <tr>
    <th>Status</th>
    <td> <?php  
    $status=$row['Status'];
if($row['Status']=="TOTW")
{
  echo "Team is on the way";
}
if($row['Status']=="Inprocess")
{
  echo "Request is inprocess";
}
if($row['Status']=="Rejected")
{
  echo "Request has been rejected";
}

if($row['Status']=="")
{
  echo "Wait for approval";
}
     ;?></td>
     
  </tr>
<tr><th>Request Date</th>
    <td><?php  echo $row['RequestDate'];?></td></tr>
<tr>
    <th>Remark</th> 
    <td><?php if($row['Remark']==''):
              echo "Not Processed yet";
          else:
           echo $row['Remark'];
          endif;

    ?></td>
    </tr>


</table>
    <?php if($status=="" || $status=="TOTW" || $status=="Inprocess"){ ?>

<p align="center" style="padding-top: 20px;">                            
 <button class="btn btn-primary waves-effect waves-light w-lg" data-toggle="modal" data-target="#myModal">Take Action</button></p>  

<?php } ?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
     <div class="modal-content">
      <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Take Action</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                <table class="table table-bordered table-hover data-tables">

                                 <form method="post" name="submit">

                                
                               
     <tr>
    <th>Remark :</th>
    <td>
    <textarea name="remark" placeholder="Remark" rows="12" cols="14" class="form-control wd-450" required="true"></textarea></td>
  </tr>  
                         

  <tr>
    <th>Status :</th>
    <td>

   <select name="status" class="form-control wd-450" required="true" >
    <?php if($status==""){?>
     <option value="TOTW" selected="true">Team On The Way</option>
     <option value="Inprocess">Inprocess</option>
     <option value="Completed">Completed</option>
     <option value="Rejected">Rejected</option>
 <?php }  elseif ($status=="TOTW") { ?>
 <option value="Inprocess">Inprocess</option>
     <option value="Completed">Completed</option>
 <?php } elseif ($status=="Inprocess") { ?>
<option value="Completed">Completed</option>
 <?php }?>
   </select></td>
  </tr>
</table>
</div>
<div class="modal-footer">
 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
 <button type="submit" name="submit" class="btn btn-primary">Update</button>
  
  </form>

</div>

                      
                        </div>
                    </div>
                </div>                                        
   
                                </div>
                            </div>

                        </div>
                    </div>
                <?php } ?>


<!-- Test Tracking History --->
<?php
$reqid=intval($_GET['reqid']);
$ret=mysqli_query($con,"select * from tbltracking
where tbltracking.RequestID='$reqid'");
$num=mysqli_num_rows($ret);
?>

<div class="row">
                         <div class="col-lg-12">

                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary" align="center">Tracking History</h6>
                                </div>
                                <div class="card-body">
<?php if($num>0){
?>
 <table class="table table-bordered"  width="100%" cellspacing="0">
<tr>
    <th>Remark</th>
    <th>Status</th>
    <th>Remark Date</th>
   
<?php while($result=mysqli_fetch_array($ret)){?>
</tr>
    <tr>
    <td><?php echo $result['Remark'];?></td> 
    <td><?php echo $result['Status'];?></td>
    <td><?php echo $result['UpdationDate'];?></td>
   
    </tr>

<?php } // End while loop?>

</table>
         <?php
       //end if   
     } else { ?>    
<h4 align="center" style="color:red"> No Tracking history found </h4>
         <?php } ?>           


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
<?php include_once('includes/footer2.php');?>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
<script type="text/javascript">

  //For report file
  $('#reportfile').hide();
  $(document).ready(function(){
  $('#status').change(function(){
  if($('#status').val()=='Delivered')
  {
  $('#reportfile').show();
  jQuery("#report").prop('required',true);  
  }
  else{
  $('#reportfile').hide();
  }
})}) 
</script>
</body>
</html>
<?php } ?>