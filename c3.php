<?php
//pas fini encore!
// Charger le fichier XML
$xml = simplexml_load_file('Q8b-xml.xml');

// Début de la sortie XHTML
echo '<!DOCTYPE html>';
echo '<html>';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '</head>';
echo '<body>';

// Parcourir les éléments du XML et générer le code XHTML
foreach ($xml->club as $club) {
    echo '<h1>' . $club->nom_Club . '</h1>';
    echo '<p><strong>Auteur :</strong> ' . $club['auteur'] . '</p>';
    echo '<p><strong>Date de création :</strong> ' . $club->date_Creation . '</p>';
    echo '<p><strong>Bilan CO2 :</strong> ' . $club->bilanCO2 . '</p>';
    echo '<p><strong>Nom du terrain :</strong> ' . $club->nom_Terrain . '</p>';
    echo '<p><strong>Nom du pays :</strong> ' . $club->nom_Pays . '</p>';
}

// Fin de la sortie XHTML
echo '</body>';
echo '</html>';
?>
