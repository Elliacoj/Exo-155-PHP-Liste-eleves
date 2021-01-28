<?php
if(!isset($_GET['eleve'])) {
    header('location: index.php?error=1');
}
else {
    $eleveJSON = json_decode(base64_decode($_GET['eleve']));
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Eleve</title>
</head>
<body>
    <div id="container">
        <h1>Information suplémentaire</h1>
        <?php
            foreach ($eleveJSON as $item => $value) {
                if(is_array($value)) {
                    $values = implode(", ", $value);
                    echo "<div>" . $item . ": " . $values . "</div>";
                }
                else {
                    echo "<div>" . $item . ": " . $value . "</div>";
                }
            }
            echo '<div><a href="index.php">Index</a></div>';
        ?>
    </div>
</body>
</html>

<?php
}
?>
