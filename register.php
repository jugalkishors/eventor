<?php
if (isset($_POST['submit'])) {
	
	include 'dbconfig.php';

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phn = $_POST['phn'];
	$gen = $_POST['gen'];
	$pass = $_POST['pass'];

	$qry = "INSERT INTO `user`(`name`, `email`, `number`, `gender`, `password`) VALUES ('$name','$email','$phn','$gen','$pass')";
	$run = mysqli_query($con,$qry);

	if ($run==true) {
		?>
		<script type="text/javascript">
		alert('Your account is created.');
		window.open('login.php','_self');
		</script>
		<?php
	}
	else{
		echo "Something went wrong!!!";
	}

}

?>
