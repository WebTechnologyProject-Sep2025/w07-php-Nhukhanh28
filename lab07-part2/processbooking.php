<!DOCTYPE html>
<html>
<head>
    <title>Booking Confirmation</title>
    <meta charset="UTF-8">
</head>
<body>

    <h1>Rohirrim Tour Booking Confirmation</h1>
    <hr>

    <?php
    // STEP 1: CHECK FOR ESSENTIAL DATA
    // We check for the required fields sent by the form (firstname, lastname, partysize, email).
    if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['partysize']) && isset($_POST['email'])) {

        // STEP 2: EXTRACT AND SANITIZE DATA

        // 1. Personal Data (using htmlspecialchars for security)
        $firstName = htmlspecialchars($_POST['firstname']);
        $lastName = htmlspecialchars($_POST['lastname']);
        $fullName = $firstName . " " . $lastName; // Combine first and last name
        $age = htmlspecialchars($_POST['age']);
        $species = htmlspecialchars($_POST['species']);
        
        // 2. Booking Data
        $partySize = htmlspecialchars($_POST['partysize']);
        $bookDay = htmlspecialchars($_POST['bookday']);
        $food = htmlspecialchars($_POST['food']);

        // 3. Handle Checkboxes (accom, 4day, 10day)
        $bookingItems = [];
        if (isset($_POST['accom'])) $bookingItems[] = "Accommodation";
        if (isset($_POST['4day'])) $bookingItems[] = "4 Day Tour";
        if (isset($_POST['10day'])) $bookingItems[] = "10 Day Tour";
        
        // Create a readable summary
        $tourSummary = empty($bookingItems) ? "No services selected" : implode(", ", $bookingItems);

        // STEP 3: DISPLAY CONFIRMATION
        echo "<h2>Booking Confirmed Successfully!</h2>";
        
        echo "<p>Welcome <strong>$fullName</strong>!</p>";
        echo "<p>You are now booked on the $bookingItems.</p>";
        echo "<p>Species: $species";
        echo "<p>Age: $age";
        echo "<p>Meal Preference: $food";
        echo "<p>Number of travellers: $partysize";
        
    } else {
        // Display the error if essential data is missing
        echo "<p style=\"color:red;\">Error: Missing form data. Please go back to the form and fill in all required information!</p>";
    }
    ?>

</body>
</html>