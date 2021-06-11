<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1 Partie 1</title>
</head>
<body>
    <h1># Exercice 1</h1>
<p>Créez une variable et lui affecter une chaîne de caractères. Afficher cette variable.
</p>
<?php
// on crée une variable '$txt' qui contient une chaine de caractére 
$txt = 'Hello! je suis une variable de type string';
// on affiche le  contenu de la variable
echo $txt;
?>
<!-- ou bien on affiche dans un h1 avec la syntaxe php simplifié -->
<h1><?= $txt?></h1>
</body>
</html>