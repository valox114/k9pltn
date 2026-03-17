<?php
$host = "sql313.infinityfree.com";       // InfinityFree MySQL host
$user = "if0_41410053";                  // Your MySQL username
$pass = "YOUR_DB_PASSWORD";              // The password you set when creating the DB
$db   = "if0_41410053_k9pltn";          // Your MySQL database name

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>