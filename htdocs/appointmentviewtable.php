<?php
session_start();


if(!isset($_SESSION['ID'])){
    header("Location: loginform.php");
    exit;
}

include('config/db.php');
$query = 'select * from appointment';
$result = mysqli_query ($conn, $query);

//$patient= mysqli_fetch_all ($result, MYSQLI_ASSOC);
//print_r($stud)

?>
<!DOCTYPE html> 
<link rel="stylesheet" href="0table1.css">
<link rel="stylesheet" href="design.css">
<link rel="stylesheet" href="formdesign.css">

<html>
<title> Appointment table</title>
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
		<br>

<table style="width:100%">
<tr>
	<th>Appointment ID</th>
    <th>Patient ID</th>
    <th>Patient Name</th>
    <th>Doctor</th>
	<th>Manage</th>
	
</tr>
<?php
$appointment= mysqli_fetch_all ($result, MYSQLI_ASSOC);

foreach ($appointment as $appointment) {
 ?>
 <tr>
 	<td><?php echo htmlspecialchars($appointment['AppointmentID']); ?> </td>
 	<td><?php echo htmlspecialchars($appointment['PatientID']); ?> </td>
 	<td><?php echo htmlspecialchars($appointment['PatientName']); ?> </td>
 	<td><?php echo htmlspecialchars($appointment['DoctorName']); ?> </td>
    <td><a href="appeditform.php? id=<?php echo $appointment['AppointmentID']?>">EDIT</a> 
		<a href="appointmentdelete.php? id=<?php echo $appointment['AppointmentID']?>">DELETE</a></td>

 	<br>
 </tr>
 <?php
 	}
//mysqli_close($conn);
?>
</form>
</table>
<button class="button" onclick="window.location.href='AddAppointment.php'">ADD</button>

</body>

		</div>
	</div>
</body>
</html>

  
