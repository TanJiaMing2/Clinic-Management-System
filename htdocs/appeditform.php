<?php
include('config/db.php');

// Check if the 'id' parameter is set in the URL
if(isset($_GET['id'])){
    $AppointmentID = mysqli_real_escape_string($conn, $_GET['id']);

    // Make SQL query
    $sql = "SELECT * FROM appointment WHERE AppointmentID = $AppointmentID";

    // Execute the query
    $result = mysqli_query($conn,$sql);

    // Fetch result in array format
    $AppointmentID = mysqli_fetch_assoc($result);
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

		<h1>Appointment</h1>
		<div class="body">
		<br>

		<form action = "appeditconfirm.php" method = "post">

<label for="AppointmentID"> Appointment ID: </label><br>
<input disabled="disabled" type = "text" name="AppointmentID" value=<?php echo htmlspecialchars($AppointmentID['AppointmentID']); ?>     > <br>

<label for="PatientID">Patient ID: </label><br>
<input type = "text" name="PatientID" value=<?php echo htmlspecialchars($AppointmentID['PatientID']); ?>><br>

<label for="PatientName"> Patient Name: </label><br>
<input type = "text" name="PatientName" value=<?php echo htmlspecialchars($AppointmentID['PatientName']); ?>><br>

<label for="DoctorName"> Doctor: </label><br>
<input type = "text" name="DoctorName" value=<?php echo htmlspecialchars($AppointmentID['DoctorName']); ?>><br>

<button type="submit" value="UPDATE">Submit</button><br>

</form>

		</div>
	</div>
</body>
</html>

