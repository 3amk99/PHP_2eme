<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") 
{
    $name = $_POST['name'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($name === "admin" && $password === "1234") 
    {
        session_regenerate_id(true);
        $_SESSION['user'] = $name;
        header('Location: home.php');
        exit;
    }
    else 
    {
        $message = "Identifiants incorrects.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="name" id="name">
        <input type="text" name="password" id="password">
        <button type="submit">
          Send
        </button>
    </form>
</body>
</html>