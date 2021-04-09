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
 ?>

<section class="engine"><a href=""></a></section><section class="header1 cid-rIzlAIrHvW mbr-parallax-background" id="header1-m">

    

    

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style display-1">
                    BOOK NOW</h1>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-2">Buy tickets and book now events</h3>
                <p class="mbr-text align-center pb-3 mbr-fonts-style display-5">
                    offer 20% off</p>
                
            </div>
        </div>
    </div>

</section>

<section class="features17 cid-rIzmBSaB05" id="features17-p">

<div class="row container-fluid">

<?php
    include 'dbconfig.php';

    $qry = "SELECT * FROM `event`";
    $run = mysqli_query($con,$qry);

    while ($result = mysqli_fetch_assoc($run)) {

        $desc = $result['description'];
        $arr = str_split($desc);
        ?>
        <div class="card p-3 col-12 col-md-6 my-col"><p><div style="background: white;" class="card-wrapper" style="width: 100px;">
        <div class="card-img"><img src="<?php echo $result['picture'];?>" height="190px" width="200"></div>
            <h6 class=" card-header"><?php echo $result['name'];?></h6>
                <p class="card-text text-danger">
                    
                    <?php
                    for ($i=0; $i < 60; $i++) { 
                        echo $arr[$i];
                    }
                    ?>.....

                </p>
                <p>
                  Price : <?php echo $result['price'];?> ₹
                </p>
                <center>
                <a href="event_desc.php?event=<?php echo $result['id'];?>" class="btn btn-sm btn-primary" style="border-radius: 20px;">BOOK NOW</a>
                </center>
        </div></p></div>
        <?php
    }
?>
        <!-- <div class="card p-3 col-12 col-md-6 my-col"><p><div style="background: white;" class="card-wrapper" style="width: 100px;">
        <div class="card-img"><img src="assets/images/raspbarry.jpg" height="190px" width="200"></div>
            <h6 class=" card-header">Jugal Kishor</h6>
                <p class="card-text text-secondary">I am a Web Designer and i working on this site for construct the Edu-GYAN website.</p>
                <center>
                <a href="#" class="btn btn-sm btn-primary" style="border-radius: 20px;">BOOK NOW</a>
                </center>
        </div></p></div> -->
 

</div>

</section>


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