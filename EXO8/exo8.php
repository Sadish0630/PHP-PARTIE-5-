<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css" />
    <title>PARTIE 5 EXO 8</title>
</head>

<body>
    <p><?php
        $months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
        foreach ($months as $m) {
            echo ($m);
        }
        ?></p>
</body>

</html>