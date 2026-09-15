<!DOCTYPE html>
<html>
<head>
    <title>PHP Variables and Data Types</title>
</head>
<body>

    <h1>PHP Variables and Data Types</h1>

    <?php

    // Variables
    $name = "Daylin";
    $age = 20;
    $favouriteColour = "Blue";
    $favouriteHobby = "Coding";

    // Display bio
    echo "<p>";
    echo "My name is $name. I am $age years old. ";
    echo "My favourite colour is $favouriteColour and my favourite hobby is $favouriteHobby.";
    echo "</p>";

    // BMI Calculator
    $height = 1.65;
    $weight = 65;

    $bmi = $weight / ($height * $height);

    echo "<h2>BMI Calculator</h2>";
    echo "Height: $height metres<br>";
    echo "Weight: $weight kg<br>";
    echo "BMI: " . round($bmi, 2) . "<br>";

    // BMI category
    if ($bmi < 18.5) {
        $category = "Underweight";
    } elseif ($bmi < 25) {
        $category = "Normal weight";
    } elseif ($bmi < 30) {
        $category = "Overweight";
    } else {
        $category = "Obese";
    }

    echo "Weight category: $category";

    // Float and integer conversion
    $floatNumber = 15.75;
    $integerNumber = intval($floatNumber);

    echo "<h2>intval() Example</h2>";
    echo "Original float value: $floatNumber<br>";
    echo "Converted integer value: $integerNumber<br>";

    // Data types
    $integerValue = 25;
    $floatValue = 10.5;
    $stringValue = "Hello PHP";
    $arrayValue = ["HTML", "CSS", "PHP"];

    echo "<h2>Data Types</h2>";

    echo "Integer variable type: " . gettype($integerValue) . "<br>";
    echo "Float variable type: " . gettype($floatValue) . "<br>";
    echo "String variable type: " . gettype($stringValue) . "<br>";
    echo "Array variable type: " . gettype($arrayValue) . "<br>";

    ?>

</body>
</html>