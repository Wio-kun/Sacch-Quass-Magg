<?php
$server = "localhost";
$brukernavn = "root";
$passord = "";
$database = "elden_ring_db";

$kobling = new mysql($server, $brukernavn, $passord, $database);

if ($kobling->connect_error) {
    die("Noe gikk galt: " . $kobling->connect_error);

}else {
    echo "Tolkoblingen virker"
    }

$sql = "SELECT * FROM bosses";
$resultat = $kobling->query($sql);

while($rad = $resultat->fetch_assoc()){
    $id_rb = $rad['id_remembrance_bosses']
    $zone = $rad['zone']
    $doungeon = $rad['doungeon']
    $element = $rad['element']
    $race = $rad['race']
    $name = $rad['name']
    $m_parent = $rad['m_parent']
    $f_parent = $rad['f_parent']
    $recommended_lvl = $rad['recommended_lvl']
}

?>