<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Appointment Booking</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Appointment Booking</h2>

    <form action="add.php" method="POST">
        <input type="date" name="date" required>
        <input type="time" name="time" required>
        <button type="submit">Book Appointment</button>
    </form>

    <h3>Your Appointments</h3>

    <?php
    $result = $db->query("SELECT * FROM appointments");
    foreach ($result as $row) {
        echo "<div class='appointment'>
                <span>{$row['date']} {$row['time']}</span>
                <a href='delete.php?id={$row['id']}'>Delete</a>
              </div>";
    }
    ?>
</div>

</body>
</html>

