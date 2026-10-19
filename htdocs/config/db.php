<?php

//connect to db
$conn = mysqli_connect('localhost','bankuser','test123','clinic');


//check connection 
if (!$conn){
echo "connection error!";
}