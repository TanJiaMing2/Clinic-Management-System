<?php
include('config/db.php');

//to catch the particular id sent from data_in_table.php
if(isset($_GET['id'])){
 $ID = mysqli_real_escape_string($conn, $_GET['id']);

//make sql
$sql = "SELECT * FROM users WHERE ID = $ID";

//get the query result

$result = mysqli_query($conn, $sql);

//fetch result in array format
$ID = mysqli_fetch_assoc($result);
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

		<h1>Admin Panel</h1>


<form action = "deleteusers.php" method = "post" align="center">
<label for="ID">ID: </label><br>
<input type = "text" name="ID"value=<?php echo htmlspecialchars($ID['ID']); ?>     > <br>

<button type="submit" name="DELETE" value ="DELETE">Delete</button><br>
</form>

</html>

