<?php


$array = [
    0 => ["Deboudt", "Damien", "32", "beaumont", "passions" => ["trek", "Course a pied", "pêche"]],
    1 => ["Draux", "Wendy", "29", "Beaumont", "passions" => ["Peinture", "trek", "serie TV"]],
    2 => ["Deboudt", "Quentin", "28", "Valence", "passions" => ["VTT", "Jeux vidéo", "Pêche"]],
];

echo "<h1>Liste des élèves : <br><br></h1>";

foreach ($array as $index => $student) {
    echo "<a class='list' href='info.php?index=$index'>Nom et Prénom : " . $student[0] . " " . $student[1] . "</a><br>";

}
