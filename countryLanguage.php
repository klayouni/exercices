<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>countryLanguage</title>
</head>

<body>

    <!-- It's also urgent, I need the language of some countries for my application.
HELP !

Input: countryName
Output: countryLanguage

Input: France
Output : français

Input: England
Output : english

Input: United-States
Output : english

Input: España
Output : español -->

    <?php
    function countryLanguage($countryName)
    {

        if ($countryName == 'France') {
            return 'Francais is the language name';
        } else if ($countryName == 'England') {
            return 'English is the language name';
        } else if ($countryName == 'United-States') {
            return 'English is the language name';
        } else if ($countryName == 'España') {
            return 'Español is the language name';
        }
    }
    echo (countryLanguage('France'));
    echo (countryLanguage('England'));
    echo (countryLanguage('Español'));
    echo (countryLanguage('United-States'));

    ?>


</body>

</html>