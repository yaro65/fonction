<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h1>Calcul du quotient et du reste</h1>
    
    <form method="post" action="">
        <label for="a">Entier a :</label>
        <input type="number" name="a" required><br><br>

        <label for="b">Entier b :</label>
        <input type="number" name="b" required><br><br>

        <input type="submit" value="Calculer">
        <?php
  include('form.php');
        ?>
    </form>
    



<?php
    function sommeNombresEntiers($N) {
  $somme = 0;

  for ($i = 1; $i <= $N; $i++) {
    $somme += $i;
  }

  return $somme;
}

// Exemple d'utilisation :
echo sommeNombresEntiers(5); // affiche 15




function trouverMinEtMax($numbers) {
    // Initialiser les variables min et max avec la première valeur du tableau
    $min = $numbers[0];
    $max = $numbers[0];

    // Parcourir le tableau pour trouver le minimum et le maximum
    foreach ($numbers as $number) {
        if ($number < $min) {
            $min = $number;
        }
        if ($number > $max) {
            $max = $number;
        }
    }

    // Afficher le résultat
    echo "Le minimum est : " . $min . "\n";
    echo "Le maximum est : " . $max . "\n";
}

// Exemple d'utilisation
$ensemble = [5, 7, 2, 9, 1, 4];
trouverMinEtMax($ensemble);



function divisionSansDivision($a, $b) {
    $quotient = 0;
    $reste = $a;

    // Boucle tant que le reste est supérieur ou égal à b
    while ($reste >= $b) {
        $reste -= $b;
        $quotient++;
    }

    // Retourner le quotient et le reste sous forme de tableau
    return array('quotient' => $quotient, 'reste' => $reste);
}

// Exemple d'utilisation
$a = 17;
$b = 4;
$resultat = divisionSansDivision($a, $b);

echo "Le quotient de $a divisé par $b est : " . $resultat['quotient'] . "\n";
echo "Le reste de $a divisé par $b est : " . $resultat['reste'] . "\n";









?>




</body>
</html>