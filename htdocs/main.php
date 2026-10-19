<?php
session_start();


if(!isset($_SESSION['ID'])){
    header("Location: loginform.php");
    exit;
}
?>



<!-- put the php connect code before the html -->

<!doctype html>
<html>
<style>
	table,th,td{ border:1px solid black; }
	        a {
           
        }
		button,a {
    background-color: black;
	color:white!important;
	 text-decoration: none;
	 font-weight: bold;
		}
</style>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CLINIC MANAGEMENT SYSTEM</title>
<link rel="stylesheet" href="0table1.css">
<link rel="stylesheet" href="design.css">
<link rel="stylesheet" href="formdesign.css">
</head>
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
		<h1>MENU</h1>

		<form action="logout.php" method="post">
    <button type="submit" name="logout">Logout</button>
</form>

		
		</div>
	</div>
</body>
</html>