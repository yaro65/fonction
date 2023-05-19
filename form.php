<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs de a et b depuis le formulaire
    $a = $_POST["a"];
    $b = $_POST["b"];

    // Initialiser le quotient et le reste
    $quotient = 0;
    $reste = $a;

    // Boucle tant que le reste est supérieur ou égal à b
    while ($reste >= $b) {
        $reste -= $b;
        $quotient++;
    }

    // Afficher le résultat
    echo "Le quotient de $a divisé par $b est : $quotient<br>";
    echo "Le reste de $a divisé par $b est : $reste<br>";
}
?>




