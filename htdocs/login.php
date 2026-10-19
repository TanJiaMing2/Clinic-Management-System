<?php

include('config/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $ID = mysqli_real_escape_string($conn, $_POST["ID"]);
    $Password = mysqli_real_escape_string($conn, $_POST["Password"]);

    
    $query = "SELECT * FROM users WHERE ID = '$ID' AND password = '$Password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $Privileges = $row['privileges'];
        if ($Privileges) { 
            session_start();
            $_SESSION['ID'] = $ID;
            header("Location: main.php");
            exit(); 
        } else {
            session_start();
            $_SESSION['ID'] = $ID;
            header("Location: patientviewtable.php");
            exit(); 
        }
    } else {
        header("Location: loginform.php");
        exit();
    }
}

mysqli_close($conn);
?>
