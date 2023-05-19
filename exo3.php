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
        <label for="number">Entrez un entier N :</label>
        <input type="number" name="number" id="number" required>
        <input type="submit" value="Calculer le binaire">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_POST["number"];

        // Vérifier si l'entier est valide
        if ($n >= 0) {
            $binary = decbin($n);

            echo "La représentation binaire de $n est : $binary";
        } else {
            echo "Entrez un entier positif ou nul.";
        }
    }
    ?>
</body>
</html>