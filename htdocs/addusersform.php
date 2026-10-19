<?php
	include('config/db.php');

if(isset($_GET['id'])){
  $PatientID = mysqli_real_escape_string($conn, $_GET['id']);

  //make sql
  $sql = "SELECT * FROM users";

  //get the query result
  $result = mysqli_query($conn, $sql);

  //fetch result in array format
  $ID = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" href="0table1.css">
<link rel="stylesheet" href="design.css">
<link rel="stylesheet" href="formdesign.css">
<div class="main">
		<div class="menu">
			<h1 id="logo"><a href="logout.php"> Log Out </a></h1>
			<a href="patientviewtable.php"> Patient</a>
			<a href="appointmentviewtable.php"> Appointment</a>
			<a href="viewprescription.php">Prescription</a>
			<a href="viewbilling.php">Billing</a>
            <a href="adminpanel.php">Admin Panel</a>
		</div>
		<div class="body">
		<br>

		<h1>Admin Panel</h1>
<form action="addusers.php" method="post" align="center">

<label for="ID"> ID: </label><br>
<input required type="number" name="ID"><br>

<label for="Password"> Password: </label><br>
<input required type="text" name="Password"><br>

<label for="privileges"> Privileges: </label><br>
<input type="radio" id="yes" name="privileges" value="1"> <label for="yes">Yes</label>
<input type="radio" id="no" name="privileges" value="0" checked> <label for="no">No</label><br>




<button type="submit" name="Submit" value="Submit">Submit</button>
</form>

</body>
</html>
