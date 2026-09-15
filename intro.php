<!DOCTYPE html>
<html>
<head>
    <title>PHP Introduction</title>
</head>
<body>

    <h1>
        <?php
        echo "Welcome to PHP Programming!";
        ?>
    </h1>

    <?php

    echo "My name is Daylin.<br>";
    echo "My favourite programming language is PHP because it is useful for creating dynamic websites.<br><br>";

    $number1 = 25;
    $number2 = 15;
    $sum = $number1 + $number2;

    echo "The sum of $number1 and $number2 is: $sum<br><br>";

    echo "Today is " . date("l, F j, Y") . "<br><br>";

    $luckyNumber = rand(1, 100);

    echo "Your lucky number today is: $luckyNumber";

    ?>

</body>
</html>