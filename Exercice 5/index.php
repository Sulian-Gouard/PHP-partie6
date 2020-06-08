<?php 

// $url = 'index.php?week=12';


if (isset($_GET['week']))
{
	$show = $_GET['week'];
}
else
{
	$show = 'Il faut renseigner le numéro de la semaine !';
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
</head>
<body>
    <h1>Exercice 5</h1>
    <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher : index.php?week=12</p>

    <p><?= $show ?></p>

</body>
</html>