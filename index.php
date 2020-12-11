<?php
$firstNumber = 0;
$secondNumber = 57;
?>


<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercice 2 Partie 3</title>
</head>

<body>
    <h1>Exercice 2 Partie 3</h1>

    <ul>
        <?php
        while ($firstNumber <= 20) {
            $result = $firstNumber * $secondNumber;
        ?>
            <li><?= $result; ?></li>
        <?php
            $firstNumber++;
        }
        ?>
    </ul>
</body>

</html>