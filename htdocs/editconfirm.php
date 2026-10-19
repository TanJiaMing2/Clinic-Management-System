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

    $sql = "UPDATE patient SET PatientName='$PatientName', ContactNum='$ContactNum', House='$House' WHERE PatientID='$PatientID'";

    if (mysqli_query($conn, $sql)) {

        echo "Data Saved";
        header("Location: patientviewtable.php");
       // exit(); 
    } 
else {
        echo "Query error: " . mysqli_error($conn);
    }


mysqli_close($conn);
?>
