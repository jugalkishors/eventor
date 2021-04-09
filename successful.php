<?php
session_start();
if(isset($_SESSION["sid"]))
{
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

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.2, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="Website Builder Description">
  <title>Success</title>
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
  ?>
<p><br></p>
<p><br></p>


<section class="container-fluid" style="background-color: #FA8A42;">
 
 <p><br></p>

 <script type="text/javascript">
   window.alert('Congretulations, Your ticket is booked.');
 </script>
  
<center>
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets3.lottiefiles.com/packages/lf20_pKiaUR.json"  background="transparent"  speed="1"  style="width: 350px; height: 350px;"  loop autoplay></lottie-player>
</center>

  <div class="container"> 
      <h1 class="display-2">Thank You, <?php echo $user; ?>. We hope you will enjoy show.</h1>
<center>
      <a href="index.php"><button href="index.php" class="btn btn-primary" style="border-radius: 30px;">GO TO HOME</button></a>
</center>
  </div>
   <p><br></p>
 
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