<div class="sidebar"><br>
<h3 class="text">Dashboard</h3><br><hr><br>
<ul class="s">
<?php
	if(isset($_SESSION["AID"]))
	{
		echo'
			<li class="li"><a href="admin_home.php">School Information</a></li>
			<li class="li"><a href="add_class.php"> Class</a></li>
			<li class="li"><a href="add_sub.php"> Subject</a></li>
			<li class="li"><a href="add_staff.php"> Staff</a></li>
			<li class="li"><a href="view_staff.php">View Staff</a></li>
			<li class="li"><a href="set_exam.php">Set Exam</a></li>
			<li class="li"><a href="view_exam.php">View Exam</a></li>
			<li class="li"><a href="student.php"target="_blank"> View Student</a></li>
			<li class="li"><a href="logout.php">Logout</a></li>';
	}
?>
</ul>

</div>