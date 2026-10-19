<?php
include('config/db.php');

$AppointmentID = mysqli_real_escape_string($conn, $_POST['AppointmentID']);
$PatientID = mysqli_real_escape_string($conn, $_POST['PatientID']);
$PatientName = mysqli_real_escape_string($conn, $_POST['PatientName']);
$DoctorName = mysqli_real_escape_string($conn, $_POST['DoctorName']);

$sql = "DELETE FROM appointment WHERE AppointmentID='$AppointmentID'";
    // Save to database
    if (mysqli_query($conn, $sql)) {
        // Success
        echo "Data Saved";
        header("Location: appointmentviewtable.php");
       // exit(); // Add exit to stop script execution after redirect
    } 
else {
        echo "Query error: " . mysqli_error($conn);
    }


mysqli_close($conn);
?>
