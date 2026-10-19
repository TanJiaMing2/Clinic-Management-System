<?php
include('config/db.php');

    $PatientID = mysqli_real_escape_string($conn, $_POST['PatientID']);
    $PatientName = mysqli_real_escape_string($conn, $_POST['PatientName']);
    $ContactNum = mysqli_real_escape_string($conn, $_POST['ContactNum']);
    $House = mysqli_real_escape_string($conn, $_POST['House']);
    //echo $Address;
  


    $sql = "SELECT * FROM patient (PatientID, PatientName, ContactNum, House) 
VALUES ('$PatientID', '$PatientName', '$ContactNum', '$House')";
    
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
