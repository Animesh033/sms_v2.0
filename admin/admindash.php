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
?>
<div class="container">
	<ul class="home-and-logout">
		<li><a href="../index.php" id="back" class="animated fadeInLeft">Back to Home</a></li>
		<li><a href="../logout.php" id="logout" class="animated fadeInRight">Logout</a></li>
	</ul>
	<h1 class="display-6 animated bounceIn welcome">Welcome to Admin Dashboard</h1>
	<div class="row">
		<div class="col-md-3">
			<ul class="crud-oper">
				<li class="animated fadeInUp"><a href="addstudent.php">Insert Student Details</a></li>
				<li class="animated fadeInDown"><a href="updatestudent.php">Update Student Details</a></li>
				<li class="animated fadeInUp"><a href="deletestudent.php">Delete Student Details</a></li>
			</ul>
		</div>
		<div class="col-md-9 fu" style="opacity: 0.6; color: red">
			<marquee SCROLLAMOUNT = 1><p><b>C</b></p></marquee>
			<marquee SCROLLAMOUNT = 2><p><b>C++</b></p></marquee>
			<marquee SCROLLAMOUNT = 3><p><b>Java</b></p></marquee>
			<marquee SCROLLAMOUNT = 4><p><b>HTML</b></p></marquee>
			<marquee SCROLLAMOUNT = 5><p><b>CSS</b></p></marquee>
			<marquee SCROLLAMOUNT = 6><p><b>Bootstrap</b></b></p></marquee>
			<marquee SCROLLAMOUNT = 7><p><b>Php</b></p></marquee>
			<marquee SCROLLAMOUNT = 8><p><b>Java Script</b></p></marquee>
			<marquee SCROLLAMOUNT = 9><p><b>JQuery</b></p></marquee>
			<marquee SCROLLAMOUNT = 10><p><b>WordPress</b></p></marquee>
			<!-- <marquee SCROLLAMOUNT = 12><p><b>WordPress Plugin-development</b></p></marquee>
			<marquee SCROLLAMOUNT = 14><p><b>WordPress theme-development</b></p></marquee> -->
		</div>
	</div>
		
</div>
<?php include('footer.php'); ?>