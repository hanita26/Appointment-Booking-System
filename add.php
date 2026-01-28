<?php
include 'db.php';

$date = $_POST['date'];
$time = $_POST['time'];

$stmt = $db->prepare("INSERT INTO appointments (date, time) VALUES (?, ?)");
$stmt->execute([$date, $time]);

header("Location: index.php");
?>
