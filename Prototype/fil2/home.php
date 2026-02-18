<?php
session_start();
if(!isset($_SESSION['user']))
{
 header('Location: login.php');
 exit;
}
echo "<h1>hi what up " . $_SESSION['user'] . "</h1>";
echo "<a href = 'login.php'>
        <button>
        return back to login
        </button>
      </a>" ;


echo "<a href = 'logout.php' >
      <button>
       logout
      </button>
      </a>" ;
?>