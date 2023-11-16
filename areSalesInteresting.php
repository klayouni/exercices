<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>areSalesInteresting</title>
</head>

<body>
    <?php

    function areSalesInteresting($nameOfTheProduct, $percentageOfInflation, $percentageOfSales)
    {
        $initialPrice = 100;
        $priceAfterInflation = $initialPrice + ($percentageOfInflation * $initialPrice / 100);
        echo 'priceAfterInflation=', $priceAfterInflation, ", ";
        $priceAftersale = $priceAfterInflation - ($percentageOfSales * $priceAfterInflation / 100);
        echo 'priceAftersale=', $priceAftersale, ", ";

        if ($priceAftersale < $initialPrice) {
            return "A moi le sac à main Louis Vuitton";
        } else {
            return "Va falloir économiser";
        }
    }

    ?>
    Following inflation, prices increased.<br>
    But everything is fine, today is the sales.<br>
    On the other hand I still have the same budget, can I still buy the item ?<br><br>

    Input: nameOfTheProduct percentageOfInflation percentageOfSales<br><br>

    Input: "le sac à main Louis Vuitton" 50 40<br>
    Initial price 100$ ; Price after inflation (100 + 50% =) 150$ ; Price during sales (150 - 40% =) 90$<br>
    Should return "A moi le sac à main Louis Vuitton"<br><br>

    <?php

    echo areSalesInteresting("le sac à main Louis Vuitton", 50, 40);
    ?><br><br>
    Input: "la Tesla" 50 20<br>
    Initial price 100$ ; Price after inflation (100 + 50% =) 150$ ; Price during sales (150 - 20% =) 120$<br>
    Should return "Va falloir économiser"<br><br>

    <?php
    echo areSalesInteresting("la Tesla", 50, 20);
    ?>
    <br><br>
    Input: "le parfum Coco Chanel" 100 50<br>
    Initial price 100$ ; Price after inflation (100 + 100% =) 200$ ; Price during sales (200 - 50% =) 100$<br>
    Should return "A moi le parfum Coco Chanel"<br><br>
    <?php
    echo areSalesInteresting("le parfum Coco Chanel", 100, 50);
    ?>






</body>

</html>