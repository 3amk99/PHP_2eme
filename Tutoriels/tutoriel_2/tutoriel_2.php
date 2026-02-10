<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$erreurs = [];
$nom = $email = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") 
{
    $nom = trim($_POST['nom']);
    $email = trim($_POST['email']);

    if (empty($nom)) 
    {
        $erreurs[] = "Le nom est obligatoire.";
    }
    if (empty($email)) 
    {
        $erreurs[] = "L'email est obligatoire.";
    } 
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
        $erreurs[] = "L'email n'est pas valide.";
    }

    if (empty($erreurs)) 
    {
        echo "<p style='color:green;'>Formulaire envoyé avec succès !</p>";
    }
}
?>
<form method="POST">
    <label>Nom :</label>
    <input type="text" name="nom" value="<?= htmlspecialchars($nom) ?>"><br>

    <label>Email :</label>
    <input type="text" name="email" value="<?= htmlspecialchars($email) ?>"><br>

    <button type="submit">Envoyer</button>
</form>

<?php
if (!empty($erreurs)) 
{
    echo "<ul style='color:red;'>";
    foreach ($erreurs as $err) 
    {
        echo "<li>$err</li>";
    }
    echo "</ul>";
}
?>


</body>
</html>