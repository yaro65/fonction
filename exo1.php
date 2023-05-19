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
        <input type="submit" value="Calculer la somme">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_POST["number"];
        $sum = 0;

        for ($i = 1; $i <= $n; $i++) {
            $sum += $i;
        }

        echo "La somme des $n premiers nombres entiers est : $sum";
    }
    ?>
</body>
</html>