<?php
session_start();
if(isset($_SESSION["sid"]) && !empty($_GET['event']))
{
   $user = $_SESSION["sid"];
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

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.2, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="Website Builder Description">
  <title>Event ticket</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/datatables/data-tables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  
  
</head>
<body>

  <?php
include "header.php";
include "dbconfig.php";

$id = $_GET['event'];
$qry = "SELECT * FROM `event` WHERE id='$id'";
$run = mysqli_query($con,$qry);

$data = mysqli_fetch_assoc($run);

$sit = $data['seats'];

?>


<p><br></p>
<p><br></p>

<section>
<section class="container-fluid">
  <img src="<?php echo $data['picture']; ?>" style="width: 100%" height="400">
</section>

<section class="container" style="background-color: white;">
  <div class="row">
    <p></p>
    <div class="col-md-9 col-lg-9"><h4><?php echo $data['name']; ?></h4>
<?php echo $data['category']; ?> | <?php echo $data['language']; ?> | <?php echo $data['duration']; ?> mins
</div>

    <div class="col-md-3 col-lg-3">

<?php
if ($sit<=0) {
  ?>
  <p><font color="red">Seats are not Available</font></p>
  <?php
}
else{
  ?>
  <form method="post" action="book.php">
  <input type="hidden" name="e_id" value="<?php echo $data['id']; ?>">
  <input type="hidden" name="u_id" value="<?php echo $user; ?>">
  <input type="hidden" name="price" value="<?php echo $data['price']; ?>">
  <input type="hidden" name="show" value="<?php echo $data['name']; ?>">

      <button class="btn btn-primary btn-sm" style="border-radius: 25px">BOOK NOW</button>
    </form>
    <?php
}
?>

</div>
</form>

<p></p>

    <div class="col-md-3 col-lg-3"><?php echo $data['date']; ?>, <?php echo $data['time']; ?></div>
<div class="col-md-3 col-lg-2"><i class="fa fa-map-marker" aria-hidden="true"></i>Jaipur, Rajasthan</div>
<div class="col-md-3 col-lg-2"><?php echo $data['price']; ?> ₹</div>
<div class="col-md-5 col-lg-5">Available Seats : <?php echo $data['seats']; ?></div>

  </div>

<p><br></p>

  <div class="container">

    <center>
    <div class="card-wrapper" style="width: 50%;">
      <div class="card-header"><h4>Description</h4></div>
      <div class="card-text text-warning"><p><?php echo $data['description']; ?></p></div>
    </div>
    </center>
    <p><br></p>
  </div>

</section>


</section>
<?php
include "footer.php";
?>

 <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
</body>
</html>  