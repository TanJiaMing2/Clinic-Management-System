<?php
session_start();


if(!isset($_SESSION['ID'])){
    header("Location: loginform.php");
    exit;
}

include('config/db.php');
$query = 'select * from patient';
$result = mysqli_query ($conn, $query);

?>
<!DOCTYPE html> 
<link rel="stylesheet" href="0table1.css">
<link rel="stylesheet" href="design.css">
<link rel="stylesheet" href="formdesign.css">

<html>
<title> Patient</title>
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

		<br>
		<h1>Patient</h1>


<table style="width:100%">
<tr>
	<th>Patient ID</th>
	<th>Patient Name</th>
	<th>Contact Number</th>
	<th>Address</th>
	<th>Manage</th>
	
</tr>
<?php
$patient= mysqli_fetch_all ($result, MYSQLI_ASSOC);

foreach ($patient as $patient) {
 ?>
 <tr>
 	<td><?php echo htmlspecialchars($patient['PatientID']); ?> </td>
 	<td><?php echo htmlspecialchars($patient['PatientName']); ?> </td>
 	<td><?php echo htmlspecialchars($patient['ContactNum']); ?> </td>
 	<td><?php echo htmlspecialchars($patient['House']); ?> </td>
    <td><a href="editform.php? id=<?php echo $patient['PatientID']?>">EDIT</a> <a href="delete.php? id=<?php echo $patient['PatientID']?>">DELETE</a></td>

 	<br>
 </tr>
 <?php
 	}
//mysqli_close($conn);
?>
</form>
</table>
<button class="button" onclick="window.location.href='AddPatient.php'">ADD</button>

</body>

		</div>
	</div>
</body>
</html>

  
