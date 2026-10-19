<?php
include('config/db.php');



$ID = mysqli_escape_string($conn, $_POST['ID']);
$Password = mysqli_escape_string($conn, $_POST['Password']);
$privileges = mysqli_escape_string($conn, $_POST['privileges']);


$sql = "INSERT INTO users(ID,Password,privileges) VALUES 
('$ID','$Password','$privileges')";




// save to db

if(mysqli_query($conn, $sql)){

//success
	echo "Data Saved";
	header ("Location: adminpanel.php") ;

}

else {
	echo "Query error";
}


//free memory
//mysqli_free_result($result);

//close conn
//mysqli_close($conn);

 

?>