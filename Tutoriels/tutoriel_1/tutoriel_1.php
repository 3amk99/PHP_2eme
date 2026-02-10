<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<form method="POST">
    <label>Nom :</label>
    <input type="text" name="nom"><br>

    <label>Email :</label>
    <input type="email" name="email"><br>

    <button type="submit">Envoyer</button>
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") 
    {
        $nom = trim($_POST['nom']);
        $email = trim($_POST['email']);

        if (empty($nom) || empty($email)) 
        {
            echo "Tous les champs sont obligatoires.";
        } 
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
        {
            echo "Email invalide.";
        } 
        else 
        {
            echo "Bonjour $nom, votre email est $email.";
        }
    }
?>

</body>
</html>