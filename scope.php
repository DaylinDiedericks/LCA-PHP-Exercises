<!DOCTYPE html>
<html>
<head>
    <title>PHP Variable Scope</title>
</head>
<body>

    <h1>PHP Variable Scope</h1>

    <?php

    // Global variable
    $globalMessage = "This is a global variable.";

    function showGlobalVariable()
    {
        global $globalMessage;

        echo $globalMessage . "<br>";
    }

    echo "<h2>Global Variable</h2>";
    showGlobalVariable();


    // Local variable
    function showLocalVariable()
    {
        $localMessage = "This is a local variable.";

        echo $localMessage . "<br>";
    }

    echo "<h2>Local Variable</h2>";
    showLocalVariable();

    echo "The local variable can only be accessed inside its function.<br>";


    // Static variable
    function countCalls()
    {
        static $count = 0;

        $count++;

        echo "The function has been called $count time(s).<br>";
    }

    echo "<h2>Static Variable</h2>";

    countCalls();
    countCalls();
    countCalls();

    ?>

</body>
</html>