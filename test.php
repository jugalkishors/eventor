<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="post" action="test.php">
		<input type="date" name="date">
		<input type="submit" name="submit">
	</form>
<?php
$dt =  getdate(date('U'));
$prdate = $dt['year']."-".$dt['month']."-".$dt['mday'];
echo $dt['year']."-".$dt['month']."-".$dt['mday'];

if (isset($_POST['submit'])) {
	$cdate = $_POST['date'];

	$arr = explode('-',$cdate);

	echo "<br>".$arr[1];

	switch ($arr[1]) {
		case '01':
			$arr[1]='January';
			break;

			case '02':
			$arr[1]='February';
			break;

			case '03':
			$arr[1]='March';
			break;

			case '04':
			$arr[1]='April';
			break;

			case '05':
			$arr[1]='May';
			break;

			case '06':
			$arr[1]='June';
			break;

			case '07':
			$arr[1]='July';
			break;

			case '08':
			$arr[1]='August';
			break;

			case '09':
			$arr[1]='September';
			break;

			case '10':
			$arr[1]='October';
			break;

			case '11':
			$arr[1]='November';
			break;

			case '12':
			$arr[1]='December';
			break;

		
		default:
			echo "null";
			break;
	}

	echo "<br>".$arr[1];

	$getdate = $arr[0]."-".$arr[1]."-".$arr[2];

	if ($prdate==$getdate) {
		echo "date is equal...<br>".$getdate;
	}
	else{
		echo "not equal..".$getdate;
	}
}

?>

</body>
</html>