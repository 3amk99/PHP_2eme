<?php
session_start();
if(!isset($_SESSION['name_user']) || !isset($_SESSION['password_user'])  )
{
    header('Location: home.php');
    exit;
}
$users = 
[

    [
        "name" => "badr",
        "password" => "12",
        "role" => "administrator",
        "active" => true
    ],

    [
        "name" => "Sara",
        "password" => "pass456",
        "role" => "trainer",
        "active" => true
    ],

    [
        "name" => "Leila",
        "password" => "test789",
        "role" => "learner",
        "active" => false
    ],

    [
        "name" => "Alae",
        "password" => "test309",
        "role" => "learner",
        "active" => true
    ]
];

if(isset($_SESSION['name_user'] ) && isset($_SESSION['password_user']) )
{
  $found = false;

    foreach ($users as $user)
    {
        
        if ( $user["name"] === $_SESSION['name_user'] && $user["password"] === $_SESSION['password_user'] ) 
        {
            if ($user["active"] === true) 
            {
                $_SESSION['role'] = $user["role"] ;
                $message = "✅ Welcome  ";
            } 
            else if ($user["active"] === false)
            {
                  $message = " ⛔ Account deactivated";
                  $_SESSION['role'] = $user["role"] ;
            }

            $found = true;
            break;
        }
    }

    if (!$found) 
    {
        $message = "❌ Incorrect credentials";
    }
} echo "<div id='container'>" ;
 echo "<p id='title_show_greetings'> Hi . $message . <div id='name_user'> ". $_SESSION['name_user'] . "</div>  </p>";
 if($found)
 {
    if($_SESSION['role'] === "learner" )
    {
       echo "<p id='role_users' style='color: red ;'> " . $_SESSION['role'] . "  </p>  " ;
    }
    if($_SESSION['role'] === "administrator" )
    {
       echo "<p id='role_users' style='color: green ;'> " . $_SESSION['role'] . "  </p>  " ;
    }
 }
 echo "
        <div  id='div_logout'>
            <a id='txt_buuton_logout' href='logout.php'>  
                <button id='button_logout' >     
                            log-out 
                </button>
            </a>
        </div> ";
  echo "</div>" ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
