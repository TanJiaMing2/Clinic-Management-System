<?php
include('config/db.php');
session_start();


if(!isset($_SESSION['ID'])){
    header("Location: loginform.php");
    exit;
}
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
<body>
<link rel="stylesheet" href="0table1.css">
<link rel="stylesheet" href="design.css">
<link rel="stylesheet" href="formdesign.css">
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
		<br>

		<form id="deleteForm" action="deleteconfirm.php" method="post">

  
    <input type="text" name="PatientID" value=<?php echo htmlspecialchars($PatientID['PatientID']); ?>> <br>


    <label for="yes_no">Are you sure you want to delete</label><br>
    <input type="radio" id="yes" name="option" value="yes" checked> <label for="yes">Yes</label><br>
    <input type="radio" id="no" name="option" value="no"> <label for="no">No</label><br>
    <button type="submit" value="submit">Submit</button><br>
     <br>

</form>

		</div>
	</div>

<script>
document.getElementById('deleteForm').onsubmit = function() {
    var confirmation = document.querySelector('input[name="option"]:checked').value;
    if (confirmation === "no") {
        window.location.href = 'patientviewtable.php'; // Redirect to some other page
        return false; // Prevent form submission
    }
};
</script>
    
</body>
</html>
