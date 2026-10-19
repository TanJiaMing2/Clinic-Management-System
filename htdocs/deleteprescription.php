<?php

session_start();


if(!isset($_SESSION['ID'])){
    header("Location: loginform.php");
    exit;
}
include('config/db.php');



$PatientID = mysqli_escape_string($conn, $_POST['PatientID']);
$PatientName = mysqli_escape_string($conn, $_POST['PatientName']);
$Sickness = mysqli_escape_string($conn, $_POST['Sickness']);
$Prescription = mysqli_escape_string($conn, $_POST['Prescription']);

$sql = "DELETE FROM prescription WHERE PatientID = '$PatientID'";


// save to db

if(mysqli_query($conn, $sql)){

//success
	echo "Data Saved";
	header ("Location: viewprescription.php") ;

}

else {
	echo "Query error";
}


//free memory
//mysqli_free_result($result);

//close conn
//mysqli_close($conn);

 

?>