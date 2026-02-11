<?php
include "2_db.php";


$sql = "SELECT * FROM users ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);


$user = $result->fetch_assoc();
?>


<!DOCTYPE html>
<html>
<head>
 <title>Show User</title>
</head>
<body>


<h2>Welcome <?php echo $user['name']; ?> 👋</h2>


<img src="uploads/<?php echo $user['photo']; ?>" width="200">


<br><br>
<a href="1_login.php">Back</a>


</body>
</html>