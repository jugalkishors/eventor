<?php
session_start();
if(isset($_SESSION["sid"]) && !empty($_POST['e_id']))
{
   $user = $_SESSION["sid"];
   $prc = $_POST['price'];
}

else{
  ?>
<script type="text/javascript">
  window.open('event_desc.php','_self');
</script>
<?php
}
?>



<!DOCTYPE html>
<html >
<head>
  <!--Designed by JK Suthar -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.2, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Register</title>
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
<p><br></p>

<section class="container-fluid" style="background-color: #f3c538;">
<p><br></p>
<p><br></p>
<center>
<h3 class="display-2">BOOK YOUR TICKET</h3><br><br>
</center>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 col-md-6">
			<div class="container">

<label>Tickets : </label><button class="btn btn-secondry btn-sm" onclick="increament()">+</button><input type="number" value="1" min="1" max="10" id="qty" name="qty" disabled=""><button class="btn btn-secondry btn-sm" onclick="decreament()">-</button>

<form method="post" action="booking.php">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Name :</label>
      <input type="text" class="form-control" name="name" id="validationCustom01" placeholder="Name" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">E-mail</label>
      <input type="email" class="form-control" name="email" id="validationCustom02" placeholder="Email" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Contact Number</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">+91</span>
        </div>
        <input type="text" class="form-control" name="phn" id="validationCustomUsername" placeholder="Contact Number" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    </div>
  </div>

  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">City</label>
      <input type="text" class="form-control" name="city" id="validationCustom03" placeholder="City" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>

      <input type="hidden" name="event_id" value="<?php echo $_POST['e_id']; ?>">
      <input type="hidden" name="user" value="<?php echo $user; ?>">
      <input type="hidden" name="seats" id="seats" value="1">
      <input type="hidden" name="prc" id="prc" value="<?php echo $prc; ?>">

    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">State</label>
      <input type="text" class="form-control" name="state" id="validationCustom04" placeholder="State" required>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">Zip</label>
      <input type="text" class="form-control" name="zip" class="zip" id="validationCustom05" placeholder="Zip" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">PROCEED</button>
</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>	
<script type="text/javascript">

	var total;
	var price = document.getElementById('prc').value;

	function increament() {
  document.getElementById("qty").stepUp(1);
  var seat = document.getElementById('qty').value;
	document.getElementById('seats').value = seat;
	total = seat*price;
	document.getElementById('prc').value = total;
	document.getElementById('bill').innerHTML = total;
	document.getElementById('final').innerHTML = total;
}
function decreament() {
  document.getElementById("qty").stepDown(1);
   seat = document.getElementById('qty').value;
   document.getElementById('seats').value = seat;
   total = seat*price;
	document.getElementById('prc').value = total;
	document.getElementById('bill').innerHTML = total;
	document.getElementById('final').innerHTML = total;
}
</script>
</div>
		</div>
		<div class="col-md-2 col-md-2">
			
		</div>
		<div class="col-md-4 col-md-4">
			<section class="container" style="background-color: white; border-radius: 15px;">
				<br>

				<div class="row">
					<div class="col-md-12 col-sm-12 text-primary"><center>Your Total Amount</center></div><hr style="width: 100%; size: 60px;">
					
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-6"><?php echo $_POST['show'];?></div>
					<div class="col-md-2 col-sm-2"></div>
					<div class="col-md-4 col-sm-4"><span id="bill"><?php echo $_POST['price'];?></span> ₹</div>
				</div>

				<div class="row">
					<hr style="width: 100%; size: 60px;">
					<div class="col-md-2 col-sm-2 text-primary"></div>
					<div class="col-md-6 col-sm-6 text-primary"><b><font color ="red">Total : </font></b></div>
					<div class="col-md-4 col-sm-4 text-primary"><center><span id="final"><?php echo $_POST['price'];?></span> ₹</center></div>
					
				</div>

				<br>
			</section>
		</div>
		
	</div>
</div>

<!-- <div class="container">

<label>Tickets : </label><button class="btn btn-secondry btn-sm" onclick="increament()">+</button><input type="number" value="1" min="1" max="10" id="qty" name="qty" disabled=""><button class="btn btn-secondry btn-sm" onclick="decreament()">-</button>

<form class="needs-validation" novalidate>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Name :</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="Name" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">E-mail</label>
      <input type="email" class="form-control" id="validationCustom02" placeholder="Email" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Contact Number</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">+91</span>
        </div>
        <input type="text" class="form-control" id="validationCustomUsername" placeholder="Contact Number" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    </div>
  </div>

  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">City</label>
      <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
      <input type="text" name="seats" id="seats" value="1">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">State</label>
      <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">Zip</label>
      <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>	
<script type="text/javascript">

	function increament() {
  document.getElementById("qty").stepUp(1);
  var seat = document.getElementById('qty').value;
	document.getElementById('seats').value = seat;
}
function decreament() {
  document.getElementById("qty").stepDown(1);
   seat = document.getElementById('qty').value;
   document.getElementById('seats').value = seat;
}
</script>
</div> -->
	
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