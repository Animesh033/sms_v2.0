<?php 
	session_start();
	if (isset($_SESSION['uid'])) {
		header('location:admin/admindash.php');
	}
?>
<!DOCTYPE html>
<html lang="en_US">
<head>
	<meta charset="utf-8">
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.css" /> -->
	<link rel="stylesheet" href="css/animate.css">
	<script src="js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container">
		<div class="home-and-logout">
			<a href="index.php"><b>Back to Home</b></a>
		</div>
		<h1 align="center" class="welcome animated zoomIn">Admin Login</h1>
		<div class="fu animated zoomInUp">
			<form action="login.php" method="post">
				<table>
					<tr>
						<td>
							<div class="form-group">
							  <label class="col-form-label" for="inputDefault"><b>User name</b></label>
							  <input type="text" name="uname" class="form-control" placeholder="User name" id="inputDefault">
							</div>
						</td><!-- 
						<td>User Name</td>
						<td><input type="text" name="uname" required="required"></td> -->
					</tr>
					<tr>
						<td>
							<div class="form-group">
							  <label class="col-form-label" for="inputDefault"><b>Password</b></label>
							  <input type="password" name="pass" class="form-control" placeholder="Enter password" id="inputDefault" required="required">
							</div>
						</td>	
						<!-- <td>Password</td>
						<td><input type="password" name="pass" required="required"></td> -->
					</tr>
					<tr>
						<td align="center">
								<div class="form-group">
								  <!-- <label class="col-form-label" for="inputDefault">Standard</label> -->
								  <!-- <input type="submit" name="submit" class="form-control" value="submit"> -->

				    				<button type="submit" name="login" class="btn btn-primary" style="border-radius: 19px;">Login</button>
								</div>
							</td>
						<!-- <td colspan="2" align="center"><input type="submit" name="login" value="Login"></td> -->
					</tr>
				</table>
			</form>
		</div>
	</div>
</body>
</html>
<?php
include('dbcon.php');
if (isset($_POST['login'])) {
	$username = $_POST['uname'];

	$password = $_POST['pass'];

	$qry = "SELECT * FROM `administrator` WHERE `username`='$username' AND `password`='$password'";
	$run = mysqli_query($con,$qry);
	$row = mysqli_num_rows($run);
	if ($row <1) {
		?>
		<script>
			alert('Username or Password not matched!');
			window.open('login.php', '_self');
		</script>
		<?php
	}
	else{
		$data = mysqli_fetch_assoc($run);
		$id=$data['id'];
		$_SESSION['uid'] = $id;
		header('location:admin/admindash.php');
	}
}
?>