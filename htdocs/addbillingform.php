<?php
	include('config/db.php');
	session_start();


if(!isset($_SESSION['ID'])){
    header("Location: loginform.php");
    exit;
}
if(isset($_GET['id'])){
  $PatientID = mysqli_real_escape_string($conn, $_GET['id']);

  //make sql
  $sql = "SELECT * FROM billing";

  //get the query result
  $result = mysqli_query($conn, $sql);

  //fetch result in array format
  $PatientID = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="0table1.css">
<link rel="stylesheet" href="design.css">
<link rel="stylesheet" href="formdesign.css">
<body>
<div class="main">
		<div class="menu">
			<h1 id="logo"><a href="logout.php"> Log Out </a></h1>
			<a href="patientviewtable.php"> Patient</a>
			<a href="appointmentviewtable.php"> Appointment</a>
			<a href="viewprescription.php">Prescription</a>
			<a href="viewbilling.php">Billing</a>
            <a href="adminpanel.php">Admin Panel</a>
		</div>

		<br>
				<div class=body><h1>Billing</h1>
<form action="addbilling.php" method="post">

<label for="PatientID"> PatientID: </label><br>
<input required type="number" name="PatientID"><br>

<label for="PatientName"> PatientName: </label><br>
<input required type="text" name="PatientName"><br>

<label for="DoctorName"> DoctorName: </label><br>
<input required type="text" name="DoctorName"><br>

<label for="Prescription"> Prescription: </label><br>
<input required type="text" name="Prescription"><br>

<label for="Cost"> Cost: </label><br>
<input required type="float" name="Cost"><br>

<button type="submit" name="Submit" value="Submit">ADD</button>
</form>

</body>
</html>
