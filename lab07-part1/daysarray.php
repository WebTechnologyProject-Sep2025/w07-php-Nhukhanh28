<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Days of the week</title>
</head>
<body>
<?php
    // Days in English
    $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

    echo "<h2>Days of the week (English)</h2>";
    echo "<ul>";
    foreach ($days as $day) {
        echo "<li>$day</li>";
    }
    echo "</ul>";

    // Days in French
     $days_fr = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");

    echo "<h2>Jours de la semaine (French)</h2>";
    echo "<ul>";
    foreach ($days_fr as $day) {
        echo "<li>$day</li>";
    }
    echo "</ul>";
?>
</body>
</html>