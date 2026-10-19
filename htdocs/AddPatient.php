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

		<br>
				<div class=body><h1>Patient</h1>
    <form action="PatientInsert.php" method="post"><br>
        <label for="PatientID">Patient ID:</label><br>
        <input type="number" name="PatientID" value="" required><br>
        
        <label for="PatientName">Patient Name:</label><br>
        <input type="text" name="PatientName" value="" required><br>

        <label for="ContactNum">Contact No:</label><br>
        <input type="text" name="ContactNum" value="" required><br>

        <label for="House">Address:</label><br>
        <input type="text" name="House" value="" required><br>

        <button type="submit">Submit</button><br>

    </form>
</div>
</body>
</html>
