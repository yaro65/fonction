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
        <label for="num1">Premier nombre :</label>
        <input type="number" name="num1" id="num1">
        <br>
        <label for="num2">Deuxième nombre :</label>
        <input type="number" name="num2" id="num2">
        <br>
        <input type="submit" value="Calculer">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        
        function multiplication($a, $b) {
            $product = 0;
            
            if ($b < 0) {
                $a = -$a;
                $b = -$b;
            }
            
            for ($i = 0; $i < $b; $i++) {
                $product += $a;
            }
            
            return $product;
        }
        
        $result = multiplication($num1, $num2);
        echo "Le produit de $num1 et $num2 est : $result";
    }
    ?>
</body>
</html>