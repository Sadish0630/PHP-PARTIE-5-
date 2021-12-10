<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css" />
    <title>PARTIE 5 EXO 9</title>
</head>

<body>
<p><?php 
        $departments = array(
            '02' => 'Aisne',
            '59' => 'Nord',
            '60' => 'Oise',
            '62' => 'Pas-de-calais',
            '80' => 'Somme'
        );
        foreach($departments as $m) {
            echo ($m . "\n");
        }
    ?></p></body>

</html>