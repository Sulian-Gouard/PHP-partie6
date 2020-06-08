<?php 

// $url = 'index.php?language=PHP&server=LAMP';


if (isset($_GET['language']) AND isset($_GET['server']))
{
	$show = 'langage : ' . $_GET['language'] . 'serveur : ' . $_GET['server'];
}
else
{
	$show = 'Il faut renseigner un langage et un type de serveur !';
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>
<body>
    <h1>Exercice 4</h1>
    <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher : index.php?language=PHP&server=LAMP</p>

    <p><?= $show ?></p>

</body>
</html>