<?php
session_start();

if (!isset($_SESSION['ID'])) {
  header("Location: loginform.php");
  exit();
}

include('config/db.php');

$query = "SELECT * FROM users WHERE ID = '{$_SESSION['ID']}' AND privileges = 1"; 
$result = mysqli_query($conn, $query);


$query2 = "SELECT * FROM users";
$result2 = mysqli_query($conn, $query2);
if (mysqli_num_rows($result) != 1) {
  header("Location: patientviewtable.php"); 
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
<link rel="stylesheet" href="0table1.css">
<link rel="stylesheet" href="design.css">
<link rel="stylesheet" href="formdesign.css">
    <style>
        table, th, td {
            border: 1px solid black;
        }
        	        a {
           
        }
		button,a {
    background-color: black;
	color:white!important;
	 text-decoration: none;
	 font-weight: bold;
		}
    </style>
</head>
<body>
<div class="main">
    <div class="menu">
			<h1 id="logo"><a href="logout.php"> Log Out </a></h1>
			<a href="patientviewtable.php"> Patient</a>
			<a href="appointmentviewtable.php"> Appointment</a>
			<a href="viewprescription.php">Prescription</a>
			<a href="viewbilling.php">Billing</a>
            <a href="adminpanel.php">Admin Panel</a>
    </div>
    <div class="body">
        <br>
        		<h1>Admin Panel</h1>
        <br>
        <table style="width:100%">
            <tr>
                <th>ID</th>
                <th>Password</th>
                <th>Privileges</th>
                <th>Manage</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result2)) { ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['ID']); ?> </td>
                    <td><?php echo htmlspecialchars($row['Password']); ?> </td>
                    <td><?php echo htmlspecialchars($row['privileges']); ?> </td>
                    <td>
                        <a href="editusersform.php?id=<?php echo $row['ID']; ?>">EDIT</a>
                        <a href="deleteusersconfirm.php?id=<?php echo $row['ID']; ?>">DELETE</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
<button class="button" onclick="window.location.href='addusersform.php'">ADD</button>
    </div>
</div>

</body>
</html>

<?php
mysqli_close($conn);
?>
