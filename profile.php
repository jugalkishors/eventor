<?php
session_start();
if(isset($_SESSION["sid"]))
{   
   $id = $_SESSION["sid"];
   $user = $_SESSION["uid"];
}

else{
  ?>
<script type="text/javascript">
  window.open('login.php','_self');
</script>
<?php
}
?>

<!DOCTYPE html>
<html >
<head>
  <!-- Site made by JKSuthar -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.2, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="Web Site Builder Description">
  <title>buy_ticket</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <?php
 include "header.php";
 include "dbconfig.php";


 $qry = "SELECT * FROM `booking` WHERE user='$id'";
 $run = mysqli_query($con,$qry);

 ?>
<p><br></p><p><br></p>



<section class="container-fluid">
<center>
<div class="container" style="background-color: white;">
  <h2 class="display-3">Profile Dashboard</h2>
  <hr><p><br></p>
  <p><img src="assets/images/man.png" style="border-radius: 100%" height="100" width="100"></p>
  <h3><?php echo $user; ?></h3><p><br></p>
</div>

   <!--  <div class="col-sm-2 col-md-2"><img src="assets/images/man.png" style="border-radius: 100%" height="100" width="100"></div>
    <div class="col-sm-2 col-md-2"><h3><?php echo $user; ?></h3></div>
    <div class="col-sm-2 col-md-2"></div> -->
    </div>
  </div>

  <p><br></p>  <p><br></p>

<div class="container">
  <table class="table" style="background-color: white;">
    <thead>
      <tr>
        <th>Holder Name</th>
        <th>Event</th>
        <th>City</th>
        <th>Tickets</th>
        <th>Total Price</th>
      </tr>
    </thead>
    <tbody>

<?php
while ($result = mysqli_fetch_assoc($run)) {
  $event = $result['event'];
  $qry1 = "SELECT * FROM `event` WHERE id='$event'";
  $run1 = mysqli_query($con,$qry1);
  $data = mysqli_fetch_assoc($run1);
  ?>

  <tr>
        <td><?php echo $result['name']; ?></td>
        <td><?php echo $data['name']; ?></td>
        <td><?php echo $result['city']; ?></td>
        <td><?php echo $result['tickets']; ?></td>
        <td><?php echo $result['total_price']; ?></td>
      </tr>

  <?php
  }
  ?>
    </tbody>
  </table>
</div>
</div>

<p><br></p>
<p><br></p>
</section>
</center>
 <?php
include "footer.php";
?>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>