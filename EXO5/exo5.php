<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css" />
    <title>PARTIE 5 EXO 5</title>
</head>

<body>
    <p>
        <?php
        $dept = ['60' => 'oise', '80' => 'somme', '62' => 'pas-de-calais', '02' => 'aisne', '59' => 'nord'];
        foreach ($dept as $key => $value) : ?>
            <?= $key . $value ?>
        <?php endforeach; ?>
    </p>
</body>

</html>