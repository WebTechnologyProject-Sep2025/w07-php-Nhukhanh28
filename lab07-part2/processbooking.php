<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
</head>
<body>
    <h1> Rohirrim Tour Booking Confirmation </h1>
<?php
if (isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['tour']) && isset($_POST['numpeople'])) {

      // Get the submitted values
      $fullname = $_POST['fullname'];
      $email = $_POST['email'];
      $tour = $_POST['tour'];
      $numpeople = $_POST['numpeople'];

      // Display confirmation
      echo "<p>Thank you, <strong>$fullname</strong>!</p>";
      echo "<p>Your booking for the <strong>$tour</strong> tour has been received.</p>";
      echo "<p>Number of people: <strong>$numpeople</strong></p>";
      echo "<p>A confirmation email will be sent to <strong>$email</strong>.</p>";

  } else {
      echo "<p style='color:red;'>Error: Missing form data.</p>";
  }
?>
</body>
</html>