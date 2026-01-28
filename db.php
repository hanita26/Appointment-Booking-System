<?php
$db = new PDO("sqlite:database.db");
$db->exec("CREATE TABLE IF NOT EXISTS appointments (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    date TEXT,
    time TEXT
)");
?>
