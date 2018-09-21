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
include ('../dbcon.php');
$sid = $_GET['sid'];
$sql = "SELECT * FROM `student` WHERE `id`='$sid'";
$run = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($run);

?>
<div class="container">
<div class="fu animated zoomIn">
	<p><b>Edit Details</b></p>
	<form action="updatedata.php" method="post" enctype="multipart/form-data">
	<table align="center">
		<tr>
			<td>
				<div class="form-group">
				  <!-- <label class="col-form-label" for="inputDefault">Roll No</label> -->
				  <input type="text" name="rollno" value="<?php if(isset($data['rollno'])) echo $data['rollno']; ?>" class="form-control" placeholder=" Roll No" id="inputDefault">
				</div>
			</td>
		</tr>

			<tr>
				<td>
					<div class="form-group">
					  <!-- <label class="col-form-label" for="inputDefault">Name</label> -->
					  <input type="text" name="name" value="<?php if(isset($data['name'])) echo $data['name']; ?>" class="form-control" placeholder="Name" id="inputDefault">
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div class="form-group">
					  <!-- <label class="col-form-label" for="inputDefault">City</label> -->
					  <input type="text" name="city" value="<?php if(isset($data['city'])) echo $data['city']; ?>" class="form-control" placeholder="City" id="inputDefault">
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div class="form-group">
					  <!-- <label class="col-form-label" for="inputDefault">Parent's Contact No</label> -->
					  <input type="text" name="pcno" value="<?php if(isset($data['pcno'])) echo $data['pcno']; ?>" class="form-control" placeholder="Parent's Contact No" id="inputDefault">
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div class="form-group">
					  <!-- <label class="col-form-label" for="inputDefault">Standard</label> -->
					  <input type="text" name="std" value="<?php if(isset($data['std'])) echo $data['std']; ?>" class="form-control" placeholder="Standard" id="inputDefault">
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
							<input type="hidden" name="sid" value="<?php echo $data['id']; ?>">

		    				<button type="submit" name="submit" class="btn btn-primary bdra19">Submit</button>
						</div>
					</td>
				</tr>
		<!-- <tr>
			<input type="hidden" name="sid" value="<?php echo $data['id']; ?>">
			<td><input align="center" type="submit" name="submit" value="Submit"></td>
		</tr> -->
	</table>
</form>
</div>
</div>