<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
        <label for="numA">Entier A :</label>
        <input type="number" name="numA" id="numA">
        <br>
        <label for="numB">Entier B :</label>
        <input type="number" name="numB" id="numB">
        <br>
        <input type="submit" value="Vérifier">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numA = $_POST["numA"];
        $numB = $_POST["numB"];
        
        function estDivisible($a, $b) {
            if ($b == 0) {
                return false; // Évite la division par zéro
            }
            
            if ($a % $b == 0) {
                return true; // A est divisible par B
            } else {
                return false; // A n'est pas divisible par B
            }
        }
        
        if (estDivisible($numA, $numB)) {
            echo "$numA est divisible par $numB";
        } else {
            echo "$numA n'est pas divisible par $numB";
        }
    }
    ?>
</body>
</html>