<?php
session_start();
if(!isset($_SESSION['ID'])){
    header("Location: loginform.php");
    exit;
}
include('config/db.php');
$query = 'select * from billing';
$result = mysqli_query ($conn, $query);

//$patient= mysqli_fetch_all ($result, MYSQLI_ASSOC);
//print_r($stud)

?>

<!DOCTYPE html> 
<html>
<title>Billing</title>
<link rel="stylesheet" href="0table1.css">
<link rel="stylesheet" href="design.css">
<link rel="stylesheet" href="formdesign.css">

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
		
<table style="width:100%">
<tr>
	<th>PatientID</th>
	<th>PatientName</th>
	<th>DoctorName</th>
	<th>Prescription</th>
	<th>Cost</th>
		<th>Manage</th>
</tr>
<?php
$patient= mysqli_fetch_all ($result, MYSQLI_ASSOC);

foreach ($patient as $patient) {
 ?>
 <tr>
 	<td><?php echo htmlspecialchars($patient['PatientID']); ?> </td>
 	<td><?php echo htmlspecialchars($patient['PatientName']); ?> </td>
 	<td><?php echo htmlspecialchars($patient['DoctorName']); ?> </td>
 	<td><?php echo htmlspecialchars($patient['Prescription']); ?> </td>
	<td>RM<?php echo htmlspecialchars($patient['Cost']); ?> </td>
	<td><a href="editbillingform.php?id=<?php echo $patient['PatientID']?>">EDIT</a>
	<a href="deletebillingconfirm.php?id=<?php echo $patient['PatientID']?>">DELETE</a></td>
 	<br>
 </tr>

 <?php
 	}
?>

</table>
<button class="button" onclick="window.location.href='addbillingform.php'">ADD</button>
		</div>
	</div>
</body>
</html>