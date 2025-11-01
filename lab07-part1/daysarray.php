<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Variables, Arrays and Operators</title>
</head>
<body>
    <h1>PHP Variables, Arrays and Operators</h1>
    <hr>
<?php
    // Days in English
    $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

    echo "<h2>The days of the week in English are:</h2>";
    echo "<p>" . implode(",", $days) . "</p>";

    // Days in French
     $days_fr = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");

    echo "<h2>The days of the week in French are:</h2>";
    echo "<p>" . implode(",", $days) . "</p>";  
?>
</body>
</html>