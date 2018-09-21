<?php
function show($std,$rno){
	include('dbcon.php');
	$sql="SELECT * FROM `student` WHERE `std`='$std' AND `rollno`='$rno'";
	$run=mysqli_query($con,$sql);
	if (mysqli_num_rows($run)>0) {
		$data=mysqli_fetch_assoc($run);
		?>
		<style>
			/*.fu{
				background: #fff;
			    border-radius: 35px;
			    height: auto;
			    width: fit-content;
			}*/
			.fu img{
				width: 300px;
			    height: 200px;
			    padding: 22px;
			    border-radius:45px;
			}
		</style>
		<div class="fu animated zoomInDown">
			<table>
				<tr align="center">
					<th colspan="3">Student Details</th>
				</tr>
				<tr>
					<td rowspan="5"><img src="dataimg/<?php echo $data['image'];?>"></td>
					<th>Roll No</th>
					<td><?php echo $data['rollno']; ?></td>
				</tr>
				<tr>
					<th>Name</th>
					<td><?php echo $data['name']; ?></td>
				</tr>
				<tr>
					<th>City</th>
					<td><?php echo $data['city']; ?></td>
				</tr>
				<tr>
					<th>Parent's no</th>
					<td><?php echo $data['pcno']; ?></td>
				</tr>
				<tr>
					<th>Standard</th>
					<td><?php echo $data['std']; ?></td>
				</tr>

			</table>
		</div>
		<?php
	}
	else{
		?>
		<div class="fu animated zoomInDown notFound">
		<?php
			echo "<b>Record not found!</b>";
		?>
		</div>
		<?php
	}

}

?>