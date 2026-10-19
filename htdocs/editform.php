<?php
session_start();


if(!isset($_SESSION['ID'])){
    header("Location: loginform.php");
    exit;
}
include('config/db.php');

// Check if the 'id' parameter is set in the URL
if(isset($_GET['id'])){
    $PatientID = mysqli_real_escape_string($conn, $_GET['id']);

    // Make SQL query
    $sql = "SELECT * FROM patient WHERE PatientID = $PatientID";

    // Execute the query
    $result = mysqli_query($conn,$sql);

    // Fetch result in array format
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

		<h1>Patient</h1>

		<form action = "editconfirm.php" method = "post">

<label for="PatientID"> Patient ID: </label><br>
<input disabled="disabled" type = "text" name="PatientID" value=<?php echo htmlspecialchars($PatientID['PatientID']); ?>     > <br>

<label for="PatientName">patient Name: </label><br>
<input type = "text" name="PatientName" value=<?php echo htmlspecialchars($PatientID['PatientName']); ?>><br>

<label for="ContactNum"> Contact: </label><br>
<input type = "text" name="ContactNum" value=<?php echo htmlspecialchars($PatientID['ContactNum']); ?>><br>

<label for="PHouse"> Address: </label><br>
<input type = "text" name="House" value=<?php echo htmlspecialchars($PatientID['House']); ?>><br>

<button type="submit" value="UPDATE">Submit</button><br>

</form>

		</div>
	</div>
</body>
</html>

