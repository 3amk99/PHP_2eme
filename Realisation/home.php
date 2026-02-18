<?php
session_start();

if (isset($_POST["save"])) 
{
    session_regenerate_id(true);
    $name = $_POST["name"];
    $password = $_POST["password"];
    $_SESSION['name_user'] = $name ;
    $_SESSION['password_user'] = $password ;
    header('Location: profile.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Document</title>
</head>
<body>
        <form method="POST">
     <div id="container">

        <div id="container_name">
            <div id="name_dive">
                Name:
            </div>
            <div id="name_input_div">
                <input type="text" id="name_input" name="name" >
            </div>
        </div>


        <div id="container_Password">
            <div id="Password_dive">
                Password:
            </div>
            <div id="password_input_div" >
                <input type="text" id="password_input" name="password" >
            </div>
        </div>

            <div id="save_dive" >
                <button id="save" name="save">
                 save
                </button>
            </div>
         </div>
        </form>
</body>
</html>