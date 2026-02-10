<?php
$action = $_GET['action'] ?? ''; // Get action from URL, default empty

if ($action === 'create') 
{
    setcookie("utilisateur", "Alice", time() + 3600, "/");
    $message = "Cookie 'utilisateur' créé pour 1 heure.";
} 
elseif ($action === 'delete') 
{
    setcookie("utilisateur", "", time() - 3600, "/");
    $message = "Cookie 'utilisateur' supprimé.";
}
elseif ($action === 'read')
{
    if (isset($_COOKIE['utilisateur'])) 
    {
        $message = "Bonjour " . $_COOKIE['utilisateur'];
    } 
    else 
    {
        $message = "Aucun cookie trouvé.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookie Test</title>
</head>
<body>
    <h1>Test des cookies</h1>

    <?php   if (!empty($message))
            { 
                echo "<p>$message</p>";
            }
    ?>

    <a href="?action=create">Créer le cookie</a><br>
    <a href="?action=read">Lire le cookie</a><br>
    <a href="?action=delete">Supprimer le cookie</a>
</body>
</html>