<?php


$array = [
    0 => ["Deboudt", "Damien", "32", "beaumont", "passions" => ["trek", "Course a pied", "pêche"]],
    1 => ["Draux", "Wendy", "29", "Beaumont", "passions" => ["Peinture", "trek", "serie TV"]],
    2 => ["Deboudt", "Quentin", "28", "Valence", "passions" => ["VTT", "Jeux vidéo", "Pêche"]],
];

echo "<h1><a href='index.php'>Retour</a><br><br></h1>";

if (!isset($_GET['index'])) {
    header('location: index.php?error=1');
}

$index = intval($_GET['index']);

if ($index < 0) {
    $index = 0;
}

echo "<p><strong>Informations complémentaires : </strong><br><br></p>";

foreach ($array[$index] as $index => $student) {
    if ($index === "passions") {
        echo "<p><br><strong>Passions : </strong><br></p>";
        foreach ($student as $passions) {
            echo "<p>$passions</p>";
        }
    } else {
        echo "<p>$student</p>";
    }
}
