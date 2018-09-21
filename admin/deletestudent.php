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
	<table align="center">
	<form action="deletestudent.php" method="post">
		<!-- <th>Standard</th> -->
		<td>
			<div class="form-group">
			  <label class="col-form-label" for="inputDefault"><b>Standard</b></label>
			  <input type="text" name="stand" class="form-control" placeholder="Standard" id="inputDefault">
			</div>
		</td>
		<!-- <td>
			<input type="text" name="stand" placeholder="Enter standard" required="required">
		</td> -->
		<!-- <th>Name</th> -->
		<td>
			<div class="form-group">
			  <label class="col-form-label" for="inputDefault"><b>Student name</b></label>
			  <input type="text" name="stuname" class="form-control" placeholder="Enter student name" id="inputDefault">
			</div>
		</td>
		<!-- <td><input type="text" name="stuname" placeholder="Enter student name" required="required"></td> -->
		<th>
			<td>
				<div class="form-group" style="margin-top: 37px;">
				  <!-- <label class="col-form-label" for="inputDefault">Standard</label> -->
				  <!-- <input type="submit" name="submit" class="form-control" value="submit"> -->

					<button type="submit" name="submit" class="btn btn-primary bdra19">Search</button>
				</div>
			</td>
			<!-- <td><input type="submit" name="submit" value="Search"></td> -->
		</th>
	</form>
</table>

<?php	
	if(isset($_POST['submit'])){	
	$std = $_POST['stand'];
	$sname = $_POST['stuname'];
	include ('../dbcon.php');
	$sql = "SELECT * FROM `student` WHERE `std` = '$std' AND `name` LIKE '%$sname%'";
	$run = mysqli_query($con,$sql);
	echo "<pre>";
	// print_r($run);
	$row = mysqli_num_rows($run);
	// print_r($row);
		if ($row <1){
			echo '<div class="fu animated zoomIn"><b>Record not found!</b></div>';
		}
		else{
			?>
			<style>
				/*.fu{
					background: #fff;
				    border-radius: 35px;
				    height: auto;
				    width: fit-content;
				}*/
				.fu img{
					width: auto;
				    height: auto;
				    padding: 22px;
				    border-radius:45px;
				}
			</style>

			<div class="container">
			<div class="fu animated zoomIn ">
				<table align="center">
					<tr align="center">
						<th>No</th>
						<th>Name</th>
						<th>Roll No</th>
						<th>Standard</th>
						<th>Image</th>
						<th>City</th>
						<th>Parent Contact No</th>
						<th>Delete</th>
					</tr>
					<?php
					$count=0;
					while ($data=mysqli_fetch_assoc($run)){
						$count++;
					?>
					<tr align="center">
						<td><?php echo $count; ?></td>
						<td><?php echo $data['name']; ?></td>
						<td><?php echo $data['rollno']; ?></td>
						<td><?php echo $data['std']; ?></td>
						<td><img src="../dataimg/<?php echo $data['image']; ?>" style="width:; height: 100px;"></td>
						<td><?php echo $data['city']; ?></td>
						<td><?php echo $data['pcno']; ?></td>
						<td><a href="deleteform.php?sid=<?php echo $data['id'];?>"><button class="btn btn-danger bdra19">delete</button></a></td>
						
					</tr>
				<?php
				}
			}
		}
	?>
				</table>
			</div>
		</div>
	</div>
<?php include('footer.php'); ?>
