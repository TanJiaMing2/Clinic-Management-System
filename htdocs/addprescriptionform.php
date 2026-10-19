<?php
session_start();


if(!isset($_SESSION['ID'])){
    header("Location: loginform.php");
    exit;
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
		<div class="body">
		<br>

		<h1>Prescription</h1>

<form action="addprescription.php" method="post">

<label for="PatientID"> PatientID: </label><br>
<input required type="number" name="PatientID"><br>

<label for="PatientName"> PatientName: </label><br>
<input required type="text" name="PatientName"><br>

<label for="Sickness"> Sickness: </label><br>
<input required type="text" name="Sickness"><br>

<label for="Prescription"> Prescription: </label><br>
<input required type="text" name="Prescription"><br>

<button type="SUBMIT">SUBMIT</button><br>
</form>

</body>
</html>
