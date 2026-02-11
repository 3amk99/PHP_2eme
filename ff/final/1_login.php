<?php
include "2_db.php";


if ($_SERVER["REQUEST_METHOD"] === "POST") 
{
    $name = $_POST['name'];
    $photoName = $_FILES['photo']['name'];
    $tmpName = $_FILES['photo']['tmp_name'];


    $uploadPath = "uploads/" . $photoName;


    move_uploaded_file($tmpName, $uploadPath);


    $sql = "INSERT INTO users (name, photo) VALUES ('$name', '$photoName')";


    if ($conn->query($sql) === TRUE) 
    {
        header("Location: 1_show.php");
        exit;
    } 
    else 
    {
        echo "Error: " . $conn->error;
    }
}
?>


<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>
<body>


<h2>Enter your name and photo</h2>


<form method="POST" enctype="multipart/form-data">
    Name:<br>
    <input type="text" name="name" required><br><br>


    Photo:<br>
    <input type="file" name="photo" required><br><br>


    <button type="submit">Login</button>
</form>


</body>
</html>