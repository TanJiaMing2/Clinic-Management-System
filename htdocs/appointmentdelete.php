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

		<br>
				<div class=body><h1>Appointment</h1>
		<form id="deleteForm" action="appdeleteconfirm.php" method="post">

  
    <input type="text" name="AppointmentID" value=<?php echo htmlspecialchars($AppointmentID['AppointmentID']); ?>> <br>


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
        window.location.href = 'appointmentviewtable.php'; // Redirect to some other page
        return false; // Prevent form submission
    }
};
</script>
    
</body>
</html>
