<?php
include('config/db.php');

$AppointmentID = mysqli_escape_string($conn, $_POST['AppointmentID']);
$PatientID = mysqli_escape_string($conn, $_POST['PatientID']);
$PatientName = mysqli_escape_string($conn, $_POST['PatientName']);
$DoctorName = mysqli_escape_string($conn, $_POST['DoctorName']); 
    //echo $Address;
  
    $sql = "SELECT * FROM appointment(AppointmentID, PatientID, PatientName, DoctorName) VALUES ('$AppointmentID', '$PatientID', '$PatientName', '$DoctorName')";
    
    // Save to database
    if (mysqli_query($conn, $sql)) {
        // Success
        echo "Data Saved";
       // exit(); // Add exit to stop script execution after redirect
    } 
else {
        echo "Query error: " . mysqli_error($conn);
    }


mysqli_close($conn);
?>
