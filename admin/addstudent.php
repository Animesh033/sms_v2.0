<?php
session_start();
if (isset($_SESSION['uid'])) {
	echo " ";
}
else{
	header('location:../login.php');
}
?>
<?php
include('header.php');
include('titlehead.php');
?>
<div class="container">
<div class="fu animated zoomIn">
	<p><b>Insert Details</b></p>
	<form action="addstudent.php" method="post" enctype="multipart/form-data">
	<table align="center">
		<tr>
			<td>
				<div class="form-group">
				  <!-- <label class="col-form-label" for="inputDefault">Roll No</label> -->
				  <input type="text" name="rollno" class="form-control" placeholder="Roll No" id="inputDefault">
				</div>
			</td>
		</tr>

			<tr>
				<td>
					<div class="form-group">
					  <!-- <label class="col-form-label" for="inputDefault">Name</label> -->
					  <input type="text" name="name" class="form-control" placeholder="Name" id="inputDefault">
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div class="form-group">
					  <!-- <label class="col-form-label" for="inputDefault">City</label> -->
					  <input type="text" name="city" class="form-control" placeholder="City" id="inputDefault">
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div class="form-group">
					  <!-- <label class="col-form-label" for="inputDefault">Parent's Contact No</label> -->
					  <input type="text" name="pcno" class="form-control" placeholder="Parent's Contact No" id="inputDefault">
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div class="form-group">
					  <!-- <label class="col-form-label" for="inputDefault">Standard</label> -->
					  <input type="text" name="std" class="form-control" placeholder="Standard" id="inputDefault">
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div class="form-group">
					    <div class="input-group mb-3">
					      <div class="custom-file">
					        <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
					        <input type="file" name="img" class="custom-file-input" id="inputGroupFile02">
					      </div>
					      <!-- <div class="input-group-append">
					        <span class="input-group-text" id="">Upload</span>
					      </div> -->
					    </div>
					  </div>
				</td>
				</tr>
				<tr>
					<td align="center">
						<div class="form-group">
						  <!-- <label class="col-form-label" for="inputDefault">Standard</label> -->
						  <!-- <input type="submit" name="submit" class="form-control" value="submit"> -->

		    				<button type="submit" name="submit" class="btn btn-primary bdra19">Submit</button>
						</div>
					</td>
				</tr>
			
			<!-- <td><input type="text"  placeholder="Enter roll no " required="required"></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" placeholder="Enter name" required="required"></td>
		</tr>
		<tr>
			<td>City</td>
			<td><input type="text" name="city" placeholder="Enter city" required="required"></td>
		</tr>
		<tr>
			<td>Parent's Contact No</td>
			<td><input type="text" name="cno" placeholder="Parent's Contact No" required="required"></td>
		</tr>
		<tr>
			<td>Standard</td>
			<td><input type="number" name="std" placeholder="Enter Standard" required="required"></td>
		</tr>
		<tr>
			<td>Image</td>
			<td><input type="file" name="img" required="required"></td>
		</tr>
		<tr>
			<td><input align="center" type="submit" name="submit" value="Submit"></td>
		</tr> -->
	</table>
</form>
</div>
</div>
<?php
include('../dbcon.php');
if (isset($_POST['submit'])) {
	$rollno = $_POST['rollno'];
	$sname = $_POST['name'];
	$scity = $_POST['city'];
	$pcno = $_POST['pcno'];
	$std = $_POST['std'];
	$imgname = $_FILES['img']['name'];
	$tempimgname = $_FILES['img']['tmp_name'];
	move_uploaded_file($tempimgname, "../dataimg/$imgname");
	// echo $rollno;
	// echo $sname;
	// echo $scity;
	// echo $pcno;
	// echo $std;

	$qry = "INSERT INTO `student`(`rollno`, `name`, `city`, `pcno`, `std`, `image`) VALUES ('$rollno','$sname','$scity','$pcno','$std','$imgname')";
	$run = mysqli_query($con,$qry);
	if($qry==true){
		?>
		<script>
			alert('Data Inserted Successfully!');
		</script>
		<?php
	}
}
?>
<?php include('footer.php'); ?>
