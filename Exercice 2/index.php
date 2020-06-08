<?php 

// $url = 'index.php?lastname=Nemare&firstname=Jean';


if (isset($_GET['age']))
{
	$show = $_GET['age'];
}
else
{
	$show = 'Il faut renseigner un age !';
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>
<body>
    <h1>Exercice 2</h1>
    <p>Faire une page index.php. Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher sinon le signaler : index.php?lastname=Nemare&firstname=Jean</p>

    <p><?= $show ?></p>

</body>
</html>