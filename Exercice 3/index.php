<?php 

// $url = 'index.php?startDate=02/05/2016&endDate=27/11/2016';


if (isset($_GET['startDate']) AND isset($_GET['endDate']))
{
	$show = 'date de début : ' . $_GET['startDate'] . 'date de fin : ' . $_GET['endDate'];
}
else
{
	$show = 'Il faut renseigner une date de début et une date de fin !';
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>
<body>
    <h1>Exercice 3</h1>
    <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher : index.php?startDate=2/05/2016&endDate=27/11/2016</p>

    <p><?= $show ?></p>

</body>
</html>