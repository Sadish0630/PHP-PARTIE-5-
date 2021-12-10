<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css" />
    <title>PARTIE 5 EXO 6</title>
</head>

<body>
    <?php
    $dept = ['60' => 'oise', '80' => 'somme', '62' => 'pas-de-calais', '02' => 'aisne', '59' => 'nord'];
    ?>
    <p>
        <?= $dept['59']; ?>
    </p>
</body>

</html>