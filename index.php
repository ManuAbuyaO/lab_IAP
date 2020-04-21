<!DOCTYPE html>
<?php 
	
	require('DBConnector.php');
	$db = connect();
	include_once 'user.php';

	//data insert code
	if (isset($_POST['btn-save'])) {
		# code...
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$city = $_POST['city_name'];

		//Create user object
		$user = new User($first_name, $last_name, $city);
		$res = $user->save();

		//check if operation save worked successfully
		if ($res) {
			# code...
			echo "Save operation successful";
		}else{
			echo "An error occurred";
		}

	}
 ?>
<html>
<head>
	<title>Lab1 Form</title>
</head>
<body>
	<form method="post">
		<table align="center">
			<tr>
				<td><input type="text" name="first_name" required placeholder="First Name"></td>
			</tr>
			<tr>
				<td><input type="text" name="last_name" placeholder="Last Name"></td>
			</tr>
			<tr>
				<td><input type="text" name="city_name" placeholder="City"></td>
			</tr>
			<tr>
				<td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
			</tr>
		</table>
	</form>
</body>
</html>