<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>

<body>

    <!-- https://fr.wikipedia.org/wiki/Factorielle

Return multiplication from 1 to n

Input: 3
Should return 1*2*3
Output: 6

Input: 5
Should return 1*2*3*4*5
Output: 120   -->

    <?php
    function fact($n)
    {
        $factorial = 1;
        for ($i = 1; $i <= $n; $i++) {
            // $factorial = $factorial * $i;
            $factorial *= $i;
        }
        return $factorial;
    }

    $n = 5;
    $f = fact($n);
    echo "La factorielle de $n est $f";
    ?>

</body>

</html>