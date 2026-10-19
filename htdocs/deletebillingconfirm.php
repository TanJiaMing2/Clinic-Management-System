<?php
include('config/db.php');
session_start();


if(!isset($_SESSION['ID'])){
    header("Location: loginform.php");
    exit;
}
//to catch the particular id sent from data_in_table.php
if(isset($_GET['id'])){
  $PatientID = mysqli_real_escape_string($conn, $_GET['id']);

//make sql
$sql = "SELECT * FROM billing WHERE PatientID = $PatientID";

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

<form action = "deletebilling.php" method = "post">
<label for="PatientID"> PatientID: </label><br>
<input type = "text" name="PatientID" value=<?php echo htmlspecialchars($PatientID['PatientID']); ?>     > <br>

<button type="DELETE" name="DELETE" value="DELETE">DELETE</button>
</form>

</html>

