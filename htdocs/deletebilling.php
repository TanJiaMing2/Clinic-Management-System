<?php
include('config/db.php');

session_start();


if(!isset($_SESSION['ID'])){
    header("Location: loginform.php");
    exit;
}

$PatientID = mysqli_escape_string($conn, $_POST['PatientID']);
$PatientName = mysqli_escape_string($conn, $_POST['PatientName']);
$DoctorName = mysqli_escape_string($conn, $_POST['DoctorName']);
$Prescription = mysqli_escape_string($conn, $_POST['Prescription']);
$Cost = mysqli_escape_string($conn, $_POST['Cost']);


$sql = "DELETE FROM billing WHERE PatientID = '$PatientID'";


// save to db

if(mysqli_query($conn, $sql)){

//success
	echo "Data Saved";
	header ("Location: viewbilling.php") ;

}

else {
	echo "Query error";
}


//free memory
//mysqli_free_result($result);

//close conn
//mysqli_close($conn);

 

?>