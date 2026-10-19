<?php
session_start();


if(!isset($_SESSION['ID'])){
    header("Location: loginform.php");
    exit;
}
include('config/db.php');

//to catch the particular id sent from data_in_table.php
if(isset($_GET['id'])){
  $PatientID = mysqli_real_escape_string($conn, $_GET['id']);

//make sql
$sql = "SELECT * FROM billing WHERE PatientID = PatientID";

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
		<div class="body">
		<br>

		<h1>Billing</h1>
<form action = "editbilling.php" method = "post">

<label for="PatientID"> PatientID: </label><br>
<input disabled="disabled" type = "text" name="PatientID" value=<?php echo htmlspecialchars($PatientID['PatientID']); ?>     > <br>

<label for="PatientName"> PatientName: </label><br>
<input type = "text" name="PatientName" value=<?php echo htmlspecialchars($PatientID['PatientName']); ?>><br>

<label for="DoctorName"> DoctorName: </label><br>
<input type = "text" name="DoctorName" value=<?php echo htmlspecialchars($PatientID['DoctorName']); ?>><br>

<label for="Prescription"> Prescription: </label><br>
<input type = "text" name="Prescription" value=<?php echo htmlspecialchars($PatientID['Prescription']); ?>><br>

<label for="Cost"> Cost: </label><br>
<input type = "text" name="Cost" value=<?php echo htmlspecialchars($PatientID['Cost']); ?>><br>

<button type="UPDATE" name="UPDATE" value="UPDATE">UPDATE</button>
</form>

</html>
