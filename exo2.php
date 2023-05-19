<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
        <label for="numbers">Entrez les nombres séparés par des virgules :</label>
        <input type="text" name="numbers" id="numbers" required>
        <input type="submit" value="Rechercher">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST["numbers"];

        // Convertir la chaîne de caractères en tableau de nombres
        $numbers = explode(",", $input);

        // Supprimer les espaces autour de chaque nombre
        $numbers = array_map('trim', $numbers);

        // Supprimer les nombres vides
        $numbers = array_filter($numbers);

        // Vérifier s'il y a au moins un nombre
        if (count($numbers) > 0) {
            // Initialiser les variables min et max
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

            echo "Le minimum est : $min<br>";
            echo "Le maximum est : $max";
        } else {
            echo "Aucun nombre n'a été saisi.";
        }
    }
    ?>
</body>
</html>