<!DOCTYPE html>
<html lang="en_US">
<head>
	<meta charset="utf-8">
	<title>Student Management System</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.css" /> -->
	<link rel="stylesheet" href="css/animate.css">
  	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<style>
		/*.fu{
			background: #fff;
		    border-radius: 35px;
		    height: auto;
		    width: fit-content;
		    margin-bottom: 45px;
		    opacity: 0.8;
		}*/
		/*.fu img{
			width: auto;
		    height: auto;
		    padding: 22px;
		    border-radius:45px;
		}*/
	</style>
</head>
<body>

<div class="container">
		<ul class="home-and-logout">
			<!-- <li><a href="../index.php" id="back" class="animated fadeInLeft">Admin Login</a></li> -->
			<li><a href="login.php" id="login" class="animated fadeInRight">Admin Login</a></li>
		</ul>
		<h1 class="display-6 animated bounceIn welcome">Welcome to Student Management System</h1>
	<div class="fu" >
	
<!-- <h3 align="right"><a href="login.php">Admin Login</a></h3>
<h1 align="center">Welcome to Student Management System</h1> -->
<form action="index.php" method="post">
	<table align="center">
		<tr>
			<td colspan="2" align="center"><b>Student Information</b></td>
		</tr>
		<tr>
			<td><b>Standard</b></td>
			<td>
				<!-- <select name="Standard" required="required">
					<option value="1st">1st</option>
					<option value="2nd">2nd</option>
					<option value="3rd">3rd</option>
					<option value="4th">4th</option>
					<option value="5th">5th</option>
					<option value="6th">6th</option>
					<option value="7th">7th</option>
					<option value="8th">8th</option>
				</select> -->
				  <div class="form-group">
				    <select class="custom-select" name="Standard" required="required">
				      <option selected="">Choose Standard</option>
				      <option <?php echo ((isset($_POST['Standard']) && $_POST['Standard'] == '1st') ? 'selected' : '')?> value="1st">1</option>
				      <option <?php echo ((isset($_POST['Standard']) && $_POST['Standard'] == '2nd') ? 'selected' : '')?> value="2nd">2</option>
				      <option <?php echo ((isset($_POST['Standard']) && $_POST['Standard'] == '3rd') ? 'selected' : '')?> value="3rd">3</option>
				      <option <?php echo ((isset($_POST['Standard']) && $_POST['Standard'] == '4th') ? 'selected' : '')?> value="4th">4</option>
				      <option <?php echo ((isset($_POST['Standard']) && $_POST['Standard'] == '5th') ? 'selected' : '')?> value="5th">5</option>
				      <option <?php echo ((isset($_POST['Standard']) && $_POST['Standard'] == '6th') ? 'selected' : '')?> value="6th">6</option>
				      <option <?php echo ((isset($_POST['Standard']) && $_POST['Standard'] == '7th') ? 'selected' : '')?> value="7th">7</option>
				      <option <?php echo ((isset($_POST['Standard']) && $_POST['Standard'] == '8th') ? 'selected' : '')?> value="8th">8</option>
				      <option <?php echo ((isset($_POST['Standard']) && $_POST['Standard'] == '9th') ? 'selected' : '')?> value="9th">9</option>
				      <option <?php echo ((isset($_POST['Standard']) && $_POST['Standard'] == '10th') ? 'selected' : '')?> value="10th">10</option>
				      <option <?php echo ((isset($_POST['Standard']) && $_POST['Standard'] == '11th') ? 'selected' : '')?> value="11th">11</option>
				      <option <?php echo ((isset($_POST['Standard']) && $_POST['Standard'] == '12th') ? 'selected' : '')?> value="12th">12</option>

				    </select>
				  </div>
			</td>
		</tr>
		<tr>
			<td><b>Enter Rollno</b></td>
			<td>
				<div class="form-group">
			  <!-- <label class="col-form-label" for="inputDefault"><b>Student name</b></label> -->
			  <input type="text" name="rollno" value="<?php if(isset($_POST['rollno'])) echo  $_POST['rollno']; ?>" class="form-control" placeholder="Enter Rollno" id="inputDefault">
			</div>
			<!-- <input type="text" name="rollno" required="required"></td> -->
		</tr>
		<tr>
			<td colspan="2" align="center">
				<div class="form-group">
				  <!-- <label class="col-form-label" for="inputDefault">Standard</label> -->
				  <!-- <input type="submit" name="submit" class="form-control" value="submit"> -->

					<button type="submit" name="submit" class="btn btn-primary" style="border-radius: 19px;">Show Info</button>
				</div>
			</td>
			<!-- <td colspan="2" align="center"><input type="submit" name="submit" value="Show Info"></td> -->
		</tr>
	</table>
</form>
</div>
<?php 
if (isset($_POST['submit'])) {
	$std = $_POST['Standard'];
	$rno = $_POST['rollno'];
	include ('dbcon.php');
	include ('function.php');
	show($std,$rno);
}
?>
</div>
</body>
</html>