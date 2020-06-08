<?php 

// $url = 'index.php?lastname=Nemare&firstname=Jean';


if (isset($_GET['firstname']) AND isset($_GET['lastname']))
{
	$show = 'Bonjour ' . $_GET['firstname'] . ' ' . $_GET['lastname'] . ' !';
}
else
{
	$show = 'Il faut renseigner un nom et un prénom !';
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>
<body>
    <h1>Exercice 1</h1>
    <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher : index.php?lastname=Nemare&firstname=Jean</p>

    <p><?= $show ?></p>

</body>
</html>