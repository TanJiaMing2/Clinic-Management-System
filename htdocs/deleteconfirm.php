<?php
session_start();


if(!isset($_SESSION['ID'])){
    header("Location: loginform.php");
    exit;
}
include('config/db.php');

    $PatientID = mysqli_real_escape_string($conn, $_POST['PatientID']);
    $PatientName = mysqli_real_escape_string($conn, $_POST['PatientName']);
    $ContactNum = mysqli_real_escape_string($conn, $_POST['ContactNum']);
    $House = mysqli_real_escape_string($conn, $_POST['House']);

    $sql = "DELETE FROM patient WHERE PatientID='$PatientID'";
    // Save to database
    if (mysqli_query($conn, $sql)) {
        // Success
        echo "Data Saved";
        header("Location: patientviewtable.php");
       // exit(); // Add exit to stop script execution after redirect
    } 
else {
        echo "Query error: " . mysqli_error($conn);
    }


mysqli_close($conn);
?>
