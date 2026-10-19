<?php
include('config/db.php');

// Check if the ID is provided via POST
if(isset($_POST['ID'])) {
    // Escape the ID to prevent SQL injection
    $ID = mysqli_escape_string($conn, $_POST['ID']);

    // SQL query to delete data
    $sql = "DELETE FROM users WHERE ID = $ID";

    // Execute the query
    if(mysqli_query($conn, $sql)){
        // Success
        echo "Data Deleted";
        header("Location: adminpanel.php");
        exit; // It's a good practice to exit after redirecting
    } else {
        // Error in the query
        echo "Query error";
    }
} else {
    // If ID is not provided via POST
    echo "ID not provided";
}

// Close the database connection
mysqli_close($conn);
?>
