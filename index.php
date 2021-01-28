<?php
$eleves = [ 0 => ["nom" => "Brian", "prenom" => "Dani", "age" => "45", "ville" => "Paris", "passions" => ["ski", "pétanque", "football"]],
            1 => ["nom" => "Boon", "prenom" => "Jeff", "age" => "35", "ville" => "Bruxelles", "passions" => ["lecture", "basket", "mangas"]],
            2 => ["nom" => "Plock", "prenom" => "Sarah", "age" => "22", "ville" => "Charleroi", "passions" => ["danse", "lecture", "politique"]],
            3 => ["nom" => "Racklet", "prenom" => "Sylvie", "age" => "32", "ville" => "Anor", "passions" => ["chant", "tennis", "jardinnage"]],
];
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Index</title>
</head>
<body>
    <div id="container">
        <h1>Liste des élèves</h1>
        <?php
            foreach ($eleves as $eleve) {
                $eleveJSON = base64_encode(json_encode($eleve));
                echo "<div><a href='eleve.php?eleve=$eleveJSON'> $eleve[prenom] $eleve[nom]</a></div>";
            }
        ?>
    </div>
</body>
</html>
