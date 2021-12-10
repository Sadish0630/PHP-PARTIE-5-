<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css" />
    <title>PARTIE 5 EXO 10</title>
</head>

<body>
    <p>
        <?php
        $hautDeFrance = [60 => 'oise', 80 => 'somme', 62 => 'pas-de-calais', 02 => 'aisne', 59 => 'nord'];
        foreach ($hautDeFrance as $departementNumber => $departementName) { ?>
    <p><?= 'Le département ' . $departementNumber . ' à le numéro ' . $departementName ?></p>
        <?php } ?>
</body>

</html>