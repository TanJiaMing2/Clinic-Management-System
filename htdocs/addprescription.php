<?php
include('config/db.php');

session_start();


if(!isset($_SESSION['ID'])){
    header("Location: loginform.php");
    exit;
}

$PatientID = mysqli_escape_string($conn, $_POST['PatientID']);
$PatientName = mysqli_escape_string($conn, $_POST['PatientName']);
$Sickness = mysqli_escape_string($conn, $_POST['Sickness']);
$Prescription = mysqli_escape_string($conn, $_POST['Prescription']);

$sql = "INSERT INTO prescription(PatientID, PatientName,Sickness,Prescription) VALUES 
('$PatientID','$PatientName','$Sickness','$Prescription')";



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