<?php

include('config/db.php');
$query = 'select * from users';
$result = mysqli_query ($conn, $query);

//$staff= mysqli_fetch_all ($result, MYSQLI_ASSOC);
//print_r($stud)

?>
<!DOCTYPE html> 
<html>
<link rel="stylesheet" href="0table1.css">
<link rel="stylesheet" href="design.css">
<link rel="stylesheet" href="formdesign.css">
<title> log in</title>
<style>
</style>
<body>
<div class=body>
<h1>Clinic Management System</h1>
</div>

<form action="login.php" method="POST">
<div class=body>
<h1>Log In</h1>
</div>
    ID: <input type="number" name="ID"><br>
    Password: <input type="password" name="Password"><br>
<br>

<div align="center">
    <button type="submit" value="Submit" >Submit</button>
</div>
</form>

</tr>
<?php
$staff= mysqli_fetch_all ($result, MYSQLI_ASSOC);


mysqli_close($conn);
?>

</table>
</body>
</html>